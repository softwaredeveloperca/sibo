<?php
namespace App\Services;

use OpenAI;

class OpenAIService
{
    protected $client;

    public function __construct()
    {
        $this->client = OpenAI::client(env('OPENAI_API_KEY'));
    }

    public function generateImageFromImage(string $imagePath, int $maxTokens = 2000)
    {
        // We'll read the image file and encode it base64 to send as 'image' param
        $imageData = base64_encode(file_get_contents($imagePath));

        // Send the request to the GPT-image-1 model
        // OpenAI image model usually expects prompt to generate image, 
        // but for image input, you might want to call 'image-to-text' or 'image understanding' endpoints.
        // Assuming GPT-image-1 is a model that can accept an image and return text

        $response = $this->client->chat()->create([
            'model' => 'gpt-image-1',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => [
                        'image' => [
                            'data' => $imageData,
                            'mime_type' => mime_content_type($imagePath),
                        ],
                        'max_tokens' => $maxTokens,
                    ],
                ],
            ],
        ]);

        return $response;
    }
}
