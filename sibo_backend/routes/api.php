<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Http;
use App\Models\Signup;
use App\Models\SiboType;
use App\Models\Recipe;
use Illuminate\Support\Str;



Route::post('/sibo', function (Request $request) {
    $request->validate([
        'hydrogen' => 'nullable|numeric',
        'methane' => 'nullable|numeric',
        'h2s' => 'nullable|numeric',
        'file' => 'nullable|image', // optional now
    ]);

    $hydrogen = (float) $request->input('hydrogen', 0);
    $methane = (float) $request->input('methane', 0);
    $h2s = (float) $request->input('h2s', 0);

    // If file exists, you can process with OpenAI
    if ($request->hasFile('file')) {
        $file = $request->file('file');

        // Example OpenAI call
        try {
            $response = OpenAI::images()->edits([
                'model' => 'gpt-4.1-mini',
                'image' => fopen($file->getPathname(), 'r'),
                'prompt' => 'Extract Hydrogen, Methane, and Hydrogen Sulfide numbers from this SIBO test image.',
                'size' => '1024x1024',
            ]);

            $text = $response['data'][0]['url'] ?? '';

            preg_match_all('/Hydrogen:\s*(\d+)/i', $text, $hMatches);
            preg_match_all('/Methane:\s*(\d+)/i', $text, $mMatches);
            preg_match_all('/Hydrogen Sulfide:\s*(\d+)/i', $text, $h2sMatches);

            $hydrogen = (int) ($hMatches[1][0] ?? $hydrogen);
            $methane = (int) ($mMatches[1][0] ?? $methane);
            $h2s = (int) ($h2sMatches[1][0] ?? $h2s);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Determine SIBO type
    $type = 'Hydrogen-Dominant SIBO';
    if ($methane > $hydrogen && $methane > $h2s) {
        $type = 'Methane-Dominant SIBO';
    } elseif ($h2s > $hydrogen && $h2s > $methane) {
        $type = 'Hydrogen sulfide SIBO';
    } elseif ($hydrogen > 0 && $methane > 0) {
        $type = 'Mixed-Dominant SIBO';
    }

    return response()->json([
        'type' => $type,
        'hydrogen' => $hydrogen,
        'methane' => $methane,
        'h2s' => $h2s,
    ]);
});


Route::get('/recipe/{siboType}/{meal}', function ($siboType, $meal) {
    // Convert URL SIBO type back to name format
    $typeName = Str::title(str_replace('-', ' ', $siboType));

    // Map meal to meal_type
    $mealMap = [
        'breakfast' => 1,
        'lunch' => 2,
        'dinner' => 3,
    ];

    if (!isset($mealMap[$meal])) {
        return response()->json(['error' => 'Invalid meal'], 400);
    }

    $mealType = $mealMap[$meal];

    // Find the SIBO type
    $sibo = SiboType::whereRaw("LOWER(REPLACE(name,'-',' ')) = ?", [strtolower(str_replace('-', ' ', $siboType))])->first();


    if (!$sibo) {
        return response()->json(['error' => 'Invalid SIBO type'], 422);
    }

    // Find a random recipe for that type and meal
    $recipe = Recipe::where('sibo_type_id', $sibo->id)
        ->where('meal_type', $mealType)
        ->inRandomOrder()
        ->first(['name', 'short_description', 'body']);

    if (!$recipe) {
        return response()->json(['error' => 'No recipe found'], 404);
    }

    return response()->json([
        'name' => $recipe->name,
        'short_description' => $recipe->short_description,
        'body' => $recipe->body,
    ]);
});



Route::get('/sibotypes', function () {
    return response()->json([
        'types' => SiboType::all(['id', 'name', 'short_name']),
    ]);
});


Route::post('/signup', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'type' => 'required|string', // SIBO type name
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    $email = $request->input('email');
    $typeName = $request->input('type');

    $siboType = SiboType::where('name', $typeName)->first();
    if (!$siboType) {
        return response()->json(['error' => 'Invalid SIBO type'], 422);
    }

    $signup = Signup::create([
        'email_address' => $email,
        'type_id' => $siboType->id,
        'status' => 1,
    ]);

    return response()->json([
        'message' => "Email {$signup->email_address} has been added for {$siboType->name}!",
    ]);
});

