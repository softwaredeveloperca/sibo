<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiboType;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $recipesData['Hydrogen-Dominant SIBO'] = [
            [
                'name' => 'Low FODMAP Salad',
                'short_description' => 'Refreshing salad with low fermentable carbs.',
                'body' => "Ingredients:\n- Lettuce\n- Cucumber\n- Olive oil\n- Lemon juice\nSteps:\n1. Chop vegetables.\n2. Toss with olive oil and lemon.\n3. Serve fresh."
            ],
            [
                'name' => 'Herbal Tea Blend',
                'short_description' => 'Soothing tea to ease bloating.',
                'body' => "Ingredients:\n- Peppermint leaves\n- Ginger slices\nSteps:\n1. Boil water.\n2. Add herbs and steep 5 min.\n3. Enjoy warm."
            ],
            [
                'name' => 'Grilled Chicken with Spinach',
                'short_description' => 'Lean protein with greens.',
                'body' => "Ingredients:\n- Chicken breast\n- Fresh spinach\n- Olive oil\nSteps:\n1. Grill chicken.\n2. Sauté spinach in olive oil.\n3. Plate and serve."
            ],
            [
                'name' => 'Zucchini Noodles with Pesto',
                'short_description' => 'Low-carb veggie noodles with basil pesto.',
                'body' => "Ingredients:\n- Zucchini\n- Basil pesto (low FODMAP)\nSteps:\n1. Spiralize zucchini.\n2. Toss with pesto.\n3. Serve chilled or warm."
            ],
            [
                'name' => 'Baked Salmon with Herbs',
                'short_description' => 'Oven-baked salmon with a light herb seasoning.',
                'body' => "Ingredients:\n- Salmon fillet\n- Thyme and rosemary\n- Olive oil\nSteps:\n1. Preheat oven to 180°C.\n2. Season salmon.\n3. Bake 15-20 min and serve."
            ],
            [
                'name' => 'Steamed Cod with Lemon',
                'short_description' => 'Light, gut-friendly fish dish.',
                'body' => "Ingredients:\n- Cod fillet\n- Lemon\n- Olive oil\nSteps:\n1. Steam cod.\n2. Drizzle with lemon and olive oil.\n3. Serve immediately."
            ],
            [
                'name' => 'Quinoa & Spinach Bowl',
                'short_description' => 'Balanced protein and carbs with light greens.',
                'body' => "Ingredients:\n- Quinoa\n- Spinach\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Sauté spinach in olive oil.\n3. Mix together and serve."
            ],
            [
                'name' => 'Carrot & Ginger Soup',
                'short_description' => 'Gut-soothing, anti-inflammatory soup.',
                'body' => "Ingredients:\n- Carrots\n- Ginger\n- Chicken stock\nSteps:\n1. Chop carrots and ginger.\n2. Simmer in stock 20 min.\n3. Blend until smooth."
            ],
            [
                'name' => 'Oven-Roasted Turkey Breast',
                'short_description' => 'Lean protein for lunch or dinner.',
                'body' => "Ingredients:\n- Turkey breast\n- Thyme\n- Olive oil\nSteps:\n1. Preheat oven.\n2. Season turkey.\n3. Roast 25-30 min and serve."
            ],
            [
                'name' => 'Cucumber & Dill Salad',
                'short_description' => 'Light refreshing salad for digestion.',
                'body' => "Ingredients:\n- Cucumber\n- Fresh dill\n- Olive oil\nSteps:\n1. Slice cucumber.\n2. Toss with dill and olive oil.\n3. Serve chilled."
            ],
            [
                'name' => 'Spinach & Feta Omelette',
                'short_description' => 'Protein-rich breakfast option.',
                'body' => "Ingredients:\n- Eggs\n- Spinach\n- Feta cheese\nSteps:\n1. Whisk eggs.\n2. Cook with spinach and feta.\n3. Fold omelette and serve."
            ],
            [
                'name' => 'Grilled Zucchini & Chicken Skewers',
                'short_description' => 'Perfect low-FODMAP dinner.',
                'body' => "Ingredients:\n- Chicken breast\n- Zucchini\n- Olive oil\nSteps:\n1. Cut chicken and zucchini.\n2. Skewer and grill.\n3. Serve warm."
            ],
            [
                'name' => 'Baked Tilapia with Herbs',
                'short_description' => 'Lightly seasoned baked fish.',
                'body' => "Ingredients:\n- Tilapia fillet\n- Parsley\n- Olive oil\nSteps:\n1. Preheat oven.\n2. Season tilapia.\n3. Bake 15 min and serve."
            ],
            [
                'name' => 'Quinoa & Herb Pilaf',
                'short_description' => 'Fragrant side dish with herbs.',
                'body' => "Ingredients:\n- Quinoa\n- Parsley\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Toss with parsley and olive oil.\n3. Serve warm."
            ],
            [
                'name' => 'Coconut & Blueberry Smoothie',
                'short_description' => 'Low-FODMAP breakfast smoothie.',
                'body' => "Ingredients:\n- Coconut milk\n- Blueberries\n- Ice\nSteps:\n1. Blend all ingredients.\n2. Serve chilled."
            ],
            [
                'name' => 'Zucchini & Carrot Sauté',
                'short_description' => 'Quick, easy, and light.',
                'body' => "Ingredients:\n- Zucchini\n- Carrots\n- Olive oil\nSteps:\n1. Chop vegetables.\n2. Sauté in olive oil.\n3. Serve warm."
            ],
            [
                'name' => 'Baked Chicken with Rosemary',
                'short_description' => 'Simple herb-baked chicken.',
                'body' => "Ingredients:\n- Chicken breast\n- Rosemary\n- Olive oil\nSteps:\n1. Preheat oven.\n2. Season chicken.\n3. Bake 25 min."
            ],
            [
                'name' => 'Lettuce & Cucumber Wraps',
                'short_description' => 'Low-carb lunch option.',
                'body' => "Ingredients:\n- Lettuce leaves\n- Cucumber\n- Cooked chicken\nSteps:\n1. Lay chicken in lettuce.\n2. Add cucumber.\n3. Roll and serve."
            ],
            [
                'name' => 'Spinach & Berry Salad',
                'short_description' => 'Light and antioxidant-rich.',
                'body' => "Ingredients:\n- Spinach\n- Blueberries\n- Strawberries\n- Olive oil\nSteps:\n1. Mix all ingredients.\n2. Toss with olive oil.\n3. Serve fresh."
            ],
            [
                'name' => 'Ginger & Carrot Juice',
                'short_description' => 'Fresh juice for digestive support.',
                'body' => "Ingredients:\n- Carrots\n- Ginger\n- Water\nSteps:\n1. Blend carrots and ginger.\n2. Strain juice.\n3. Serve chilled."
            ],
            [
                'name' => 'Grilled Chicken Salad',
                'short_description' => 'Light, high-protein lunch.',
                'body' => "Ingredients:\n- Grilled chicken\n- Lettuce\n- Cucumber\nSteps:\n1. Chop lettuce and cucumber.\n2. Slice chicken and add.\n3. Toss and serve."
            ],
            [
                'name' => 'Zucchini & Herb Frittata',
                'short_description' => 'Perfect for breakfast or brunch.',
                'body' => "Ingredients:\n- Eggs\n- Zucchini\n- Herbs\nSteps:\n1. Whisk eggs.\n2. Add zucchini and herbs.\n3. Bake 20 min."
            ],
            [
                'name' => 'Baked Salmon with Lemon Zest',
                'short_description' => 'Light and flavorful dinner.',
                'body' => "Ingredients:\n- Salmon fillet\n- Lemon zest\n- Olive oil\nSteps:\n1. Preheat oven.\n2. Season salmon.\n3. Bake 15-20 min."
            ],
            [
                'name' => 'Cucumber & Mint Salad',
                'short_description' => 'Refreshing low-FODMAP side.',
                'body' => "Ingredients:\n- Cucumber\n- Mint leaves\n- Olive oil\nSteps:\n1. Slice cucumber.\n2. Add mint and olive oil.\n3. Serve chilled."
            ],
            [
                'name' => 'Steamed Cod with Spinach',
                'short_description' => 'Gentle on digestion.',
                'body' => "Ingredients:\n- Cod fillet\n- Spinach\n- Olive oil\nSteps:\n1. Steam cod.\n2. Sauté spinach.\n3. Serve together."
            ],
            [
                'name' => 'Quinoa & Chicken Bowl',
                'short_description' => 'Balanced meal for lunch or dinner.',
                'body' => "Ingredients:\n- Quinoa\n- Grilled chicken\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Add grilled chicken and zucchini.\n3. Serve warm."
            ],

            [
                'name' => 'Steamed Chicken with Zucchini',
                'short_description' => 'Light protein with veggies.',
                'body' => "Ingredients:\n- Chicken breast\n- Zucchini\n- Olive oil\nSteps:\n1. Steam chicken and zucchini.\n2. Drizzle with olive oil.\n3. Serve warm."
            ],
            [
                'name' => 'Herbal Infusion Tea',
                'short_description' => 'Soothing tea for bloating relief.',
                'body' => "Ingredients:\n- Chamomile\n- Peppermint\nSteps:\n1. Boil water.\n2. Steep herbs 5-7 min.\n3. Serve warm."
            ],
            [
                'name' => 'Grilled Tilapia & Spinach',
                'short_description' => 'Protein-rich, light dinner.',
                'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\n- Olive oil\nSteps:\n1. Grill tilapia.\n2. Sauté spinach.\n3. Serve together."
            ],
            [
                'name' => 'Cucumber & Carrot Sticks',
                'short_description' => 'Easy snack option.',
                'body' => "Ingredients:\n- Cucumber\n- Carrot\nSteps:\n1. Cut into sticks.\n2. Serve raw as snack."
            ],
            [
                'name' => 'Baked Chicken with Thyme',
                'short_description' => 'Simple herb-baked chicken.',
                'body' => "Ingredients:\n- Chicken breast\n- Thyme\n- Olive oil\nSteps:\n1. Preheat oven.\n2. Season chicken.\n3. Bake 25 min."
            ],
            [
                'name' => 'Spinach & Strawberry Salad',
                'short_description' => 'Sweet and light salad.',
                'body' => "Ingredients:\n- Spinach\n- Strawberries\n- Olive oil\nSteps:\n1. Mix ingredients.\n2. Toss with olive oil.\n3. Serve fresh."
            ],
            [
                'name' => 'Grilled Chicken & Zucchini Platter',
                'short_description' => 'High-protein dinner with veggies.',
                'body' => "Ingredients:\n- Chicken breast\n- Zucchini\n- Olive oil\nSteps:\n1. Grill chicken.\n2. Grill zucchini.\n3. Plate and serve."
            ],
            [
                'name' => 'Quinoa & Herb Salad',
                'short_description' => 'Light and nutritious salad.',
                'body' => "Ingredients:\n- Quinoa\n- Parsley\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Toss with parsley and olive oil.\n3. Serve warm or cold."
            ],
            [
                'name' => 'Baked Salmon with Herbs',
                'short_description' => 'Flavorful and easy to digest.',
                'body' => "Ingredients:\n- Salmon fillet\n- Thyme and rosemary\n- Olive oil\nSteps:\n1. Preheat oven.\n2. Season salmon.\n3. Bake 15-20 min."
            ],
            [
                'name' => 'Cucumber & Basil Salad',
                'short_description' => 'Refreshing summer side dish.',
                'body' => "Ingredients:\n- Cucumber\n- Basil\n- Olive oil\nSteps:\n1. Slice cucumber.\n2. Mix with basil and olive oil.\n3. Serve chilled."
            ],
            [
                'name' => 'Zucchini & Chicken Stir-fry',
                'short_description' => 'Quick low-FODMAP dinner.',
                'body' => "Ingredients:\n- Chicken breast\n- Zucchini\n- Olive oil\nSteps:\n1. Slice chicken and zucchini.\n2. Stir-fry with olive oil 10 min.\n3. Serve warm."
            ],
            [
                'name' => 'Spinach & Egg Scramble',
                'short_description' => 'Protein-packed breakfast.',
                'body' => "Ingredients:\n- Eggs\n- Spinach\nSteps:\n1. Whisk eggs.\n2. Cook with spinach.\n3. Serve warm."
            ],
            [
                'name' => 'Quinoa & Vegetable Soup',
                'short_description' => 'Gut-friendly light soup.',
                'body' => "Ingredients:\n- Quinoa\n- Carrots\n- Zucchini\nSteps:\n1. Boil vegetables.\n2. Add quinoa.\n3. Simmer 20 min and serve."
            ],
            [
                'name' => 'Steamed Cod & Herbs',
                'short_description' => 'Light and easily digestible.',
                'body' => "Ingredients:\n- Cod fillet\n- Thyme\n- Olive oil\nSteps:\n1. Steam cod.\n2. Drizzle with olive oil and thyme.\n3. Serve warm."
            ],
            [
                'name' => 'Cucumber & Chicken Wraps',
                'short_description' => 'Low-carb lunch idea.',
                'body' => "Ingredients:\n- Lettuce leaves\n- Cooked chicken\n- Cucumber\nSteps:\n1. Place chicken and cucumber in lettuce.\n2. Wrap and serve."
            ],
            [
                'name' => 'Carrot & Ginger Soup',
                'short_description' => 'Soothing anti-inflammatory soup.',
                'body' => "Ingredients:\n- Carrots\n- Ginger\n- Chicken stock\nSteps:\n1. Chop ingredients.\n2. Simmer 20 min.\n3. Blend and serve warm."
            ],
            [
                'name' => 'Baked Tilapia with Lemon',
                'short_description' => 'Simple, light dinner option.',
                'body' => "Ingredients:\n- Tilapia fillet\n- Lemon\n- Olive oil\nSteps:\n1. Preheat oven.\n2. Season tilapia.\n3. Bake 15 min."
            ],
            [
                'name' => 'Spinach & Quinoa Salad',
                'short_description' => 'Nutritious side dish.',
                'body' => "Ingredients:\n- Spinach\n- Quinoa\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Mix with spinach and olive oil.\n3. Serve chilled or warm."
            ],
            [
                'name' => 'Grilled Chicken & Spinach Salad',
                'short_description' => 'High-protein meal.',
                'body' => "Ingredients:\n- Grilled chicken\n- Spinach\n- Olive oil\nSteps:\n1. Chop spinach.\n2. Slice chicken.\n3. Toss together and serve."
            ],
            [
                'name' => 'Cucumber & Carrot Salad',
                'short_description' => 'Refreshing crunchy side dish.',
                'body' => "Ingredients:\n- Cucumber\n- Carrot\n- Olive oil\nSteps:\n1. Slice vegetables.\n2. Toss with olive oil.\n3. Serve fresh."
            ],
            [
                'name' => 'Baked Salmon & Zucchini',
                'short_description' => 'Balanced, gut-friendly dinner.',
                'body' => "Ingredients:\n- Salmon fillet\n- Zucchini\n- Olive oil\nSteps:\n1. Preheat oven.\n2. Season salmon and zucchini.\n3. Bake 15-20 min."
            ],
            [
                'name' => 'Spinach & Feta Salad',
                'short_description' => 'Light, protein-rich side.',
                'body' => "Ingredients:\n- Spinach\n- Feta cheese\n- Olive oil\nSteps:\n1. Mix ingredients.\n2. Toss with olive oil.\n3. Serve fresh."
            ],
            [
                'name' => 'Grilled Zucchini & Chicken Bowl',
                'short_description' => 'Low-FODMAP, high-protein lunch.',
                'body' => "Ingredients:\n- Grilled chicken\n- Zucchini\n- Olive oil\nSteps:\n1. Grill chicken and zucchini.\n2. Combine in bowl.\n3. Serve warm."
            ],
            [
                'name' => 'Quinoa & Spinach Bowl',
                'short_description' => 'Balanced meal for lunch or dinner.',
                'body' => "Ingredients:\n- Quinoa\n- Spinach\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Add sautéed spinach.\n3. Serve warm."
            ]
        ];
    

        $recipesData['Mixed-Dominant SIBO'] = [
        [
            'name' => 'Quinoa Bowl',
            'short_description' => 'Balanced carbs and proteins.',
            'body' => "Ingredients:\n- Quinoa\n- Grilled chicken\n- Spinach\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Grill chicken.\n3. Toss with spinach and olive oil.\n4. Serve warm."
        ],
        [
            'name' => 'Coconut Yogurt Smoothie',
            'short_description' => 'Probiotic-rich and light.',
            'body' => "Ingredients:\n- Coconut yogurt\n- Blueberries\n- Chia seeds\nSteps:\n1. Blend all ingredients.\n2. Serve chilled."
        ],
        [
            'name' => 'Zucchini & Chicken Stir-fry',
            'short_description' => 'Quick, balanced meal.',
            'body' => "Ingredients:\n- Chicken breast\n- Zucchini\n- Olive oil\nSteps:\n1. Stir-fry chicken and zucchini 10 min.\n2. Serve warm."
        ],
        [
            'name' => 'Spinach & Salmon Salad',
            'short_description' => 'High-protein, low-carb salad.',
            'body' => "Ingredients:\n- Spinach\n- Salmon fillet\n- Olive oil\nSteps:\n1. Grill salmon.\n2. Toss with spinach.\n3. Drizzle olive oil and serve."
        ],
        [
            'name' => 'Quinoa & Carrot Bowl',
            'short_description' => 'Balanced and light.',
            'body' => "Ingredients:\n- Quinoa\n- Carrots\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Sauté carrots.\n3. Combine and serve warm."
        ],
        [
            'name' => 'Cucumber & Egg Salad',
            'short_description' => 'Protein-packed, refreshing salad.',
            'body' => "Ingredients:\n- Cucumber\n- Boiled eggs\n- Olive oil\nSteps:\n1. Chop cucumber and eggs.\n2. Toss with olive oil.\n3. Serve fresh."
        ],
        [
            'name' => 'Grilled Chicken & Spinach Wrap',
            'short_description' => 'Quick lunch option.',
            'body' => "Ingredients:\n- Grilled chicken\n- Spinach\n- Lettuce leaves\nSteps:\n1. Place chicken and spinach in lettuce.\n2. Wrap and serve."
        ],
        [
            'name' => 'Baked Tilapia with Quinoa',
            'short_description' => 'Balanced, light dinner.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Quinoa\n- Olive oil\nSteps:\n1. Bake tilapia 15 min.\n2. Serve with cooked quinoa."
        ],
        [
            'name' => 'Spinach & Chicken Omelette',
            'short_description' => 'Protein-packed breakfast.',
            'body' => "Ingredients:\n- Eggs\n- Spinach\n- Chicken\nSteps:\n1. Whisk eggs.\n2. Add chicken and spinach.\n3. Cook and serve warm."
        ],
        [
            'name' => 'Coconut Yogurt Parfait',
            'short_description' => 'Probiotic-rich breakfast.',
            'body' => "Ingredients:\n- Coconut yogurt\n- Blueberries\n- Chia seeds\nSteps:\n1. Layer ingredients in a glass.\n2. Serve chilled."
        ],
        [
            'name' => 'Quinoa & Salmon Bowl',
            'short_description' => 'Light and balanced meal.',
            'body' => "Ingredients:\n- Quinoa\n- Salmon fillet\n- Spinach\nSteps:\n1. Cook quinoa.\n2. Grill salmon.\n3. Serve with spinach."
        ],
        [
            'name' => 'Grilled Chicken & Zucchini Platter',
            'short_description' => 'Protein-rich lunch.',
            'body' => "Ingredients:\n- Chicken breast\n- Zucchini\n- Olive oil\nSteps:\n1. Grill chicken and zucchini.\n2. Serve warm."
        ],
        [
            'name' => 'Spinach & Carrot Salad',
            'short_description' => 'Refreshing side dish.',
            'body' => "Ingredients:\n- Spinach\n- Carrots\n- Olive oil\nSteps:\n1. Slice carrots.\n2. Toss with spinach and olive oil.\n3. Serve fresh."
        ],
        [
            'name' => 'Quinoa & Egg Bowl',
            'short_description' => 'Balanced breakfast or lunch.',
            'body' => "Ingredients:\n- Quinoa\n- Boiled eggs\n- Spinach\nSteps:\n1. Cook quinoa.\n2. Top with boiled eggs and spinach.\n3. Serve warm."
        ],
        [
            'name' => 'Baked Salmon & Spinach',
            'short_description' => 'Protein-rich dinner.',
            'body' => "Ingredients:\n- Salmon fillet\n- Spinach\n- Olive oil\nSteps:\n1. Bake salmon 15 min.\n2. Sauté spinach.\n3. Serve together."
        ],
        [
            'name' => 'Grilled Chicken & Carrot Wrap',
            'short_description' => 'Quick low-FODMAP meal.',
            'body' => "Ingredients:\n- Chicken breast\n- Carrots\n- Lettuce leaves\nSteps:\n1. Place chicken and carrots in lettuce.\n2. Wrap and serve."
        ],
        [
            'name' => 'Cucumber & Salmon Salad',
            'short_description' => 'Light protein-rich salad.',
            'body' => "Ingredients:\n- Cucumber\n- Salmon fillet\n- Olive oil\nSteps:\n1. Grill salmon.\n2. Slice cucumber.\n3. Toss and serve."
        ],
        [
            'name' => 'Quinoa & Tilapia Bowl',
            'short_description' => 'Balanced dinner option.',
            'body' => "Ingredients:\n- Quinoa\n- Tilapia fillet\n- Spinach\nSteps:\n1. Cook quinoa.\n2. Grill tilapia.\n3. Serve with spinach."
        ],
        [
            'name' => 'Spinach & Chicken Salad',
            'short_description' => 'High-protein lunch.',
            'body' => "Ingredients:\n- Grilled chicken\n- Spinach\n- Olive oil\nSteps:\n1. Grill chicken.\n2. Toss with spinach.\n3. Serve fresh."
        ],
        [
            'name' => 'Coconut Yogurt & Blueberry Bowl',
            'short_description' => 'Probiotic breakfast option.',
            'body' => "Ingredients:\n- Coconut yogurt\n- Blueberries\n- Chia seeds\nSteps:\n1. Mix ingredients.\n2. Serve chilled."
        ],
        [
            'name' => 'Grilled Tilapia & Spinach',
            'short_description' => 'Light, protein-rich dinner.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\n- Olive oil\nSteps:\n1. Grill tilapia.\n2. Sauté spinach.\n3. Serve together."
        ],
        [
            'name' => 'Quinoa & Chicken Stir-fry',
            'short_description' => 'Balanced lunch or dinner.',
            'body' => "Ingredients:\n- Quinoa\n- Chicken breast\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Stir-fry chicken and zucchini.\n3. Serve warm."
        ],
        [
            'name' => 'Spinach & Egg Wrap',
            'short_description' => 'Protein-rich breakfast or lunch.',
            'body' => "Ingredients:\n- Eggs\n- Spinach\n- Lettuce leaves\nSteps:\n1. Scramble eggs with spinach.\n2. Wrap in lettuce leaves.\n3. Serve fresh."
        ],
        [
            'name' => 'Cucumber & Quinoa Salad',
            'short_description' => 'Refreshing light salad.',
            'body' => "Ingredients:\n- Cucumber\n- Quinoa\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Mix with sliced cucumber.\n3. Serve chilled or warm."
        ],
        [
            'name' => 'Grilled Chicken & Spinach Bowl',
            'short_description' => 'High-protein, low-FODMAP lunch.',
            'body' => "Ingredients:\n- Grilled chicken\n- Spinach\n- Olive oil\nSteps:\n1. Grill chicken.\n2. Toss with spinach and olive oil.\n3. Serve warm."
        ],
        [
            'name' => 'Baked Salmon & Quinoa',
            'short_description' => 'Balanced dinner.',
            'body' => "Ingredients:\n- Salmon fillet\n- Quinoa\n- Spinach\nSteps:\n1. Bake salmon 15 min.\n2. Cook quinoa.\n3. Serve together."
        ],
        [
            'name' => 'Zucchini & Chicken Salad',
            'short_description' => 'Light, protein-rich side dish.',
            'body' => "Ingredients:\n- Zucchini\n- Grilled chicken\n- Olive oil\nSteps:\n1. Grill chicken.\n2. Slice zucchini.\n3. Toss together and serve."
        ],
        [
            'name' => 'Spinach & Coconut Yogurt Bowl',
            'short_description' => 'Probiotic-rich breakfast.',
            'body' => "Ingredients:\n- Spinach\n- Coconut yogurt\n- Chia seeds\nSteps:\n1. Mix ingredients.\n2. Serve chilled."
        ],
        [
            'name' => 'Quinoa & Carrot Wrap',
            'short_description' => 'Quick low-FODMAP lunch.',
            'body' => "Ingredients:\n- Quinoa\n- Carrots\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Add carrots.\n3. Wrap and serve."
        ],
        [
            'name' => 'Grilled Tilapia & Quinoa',
            'short_description' => 'Balanced meal for dinner.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Quinoa\n- Spinach\nSteps:\n1. Grill tilapia.\n2. Cook quinoa.\n3. Serve together."
        ],
        [
            'name' => 'Spinach & Chicken Stir-fry',
            'short_description' => 'Quick, protein-rich dinner.',
            'body' => "Ingredients:\n- Spinach\n- Chicken breast\n- Olive oil\nSteps:\n1. Stir-fry chicken and spinach 10 min.\n2. Serve warm."
        ],
        [
            'name' => 'Cucumber & Egg Bowl',
            'short_description' => 'Refreshing, high-protein meal.',
            'body' => "Ingredients:\n- Cucumber\n- Boiled eggs\n- Olive oil\nSteps:\n1. Slice cucumber.\n2. Chop eggs.\n3. Toss together and serve."
        ],
        [
            'name' => 'Grilled Chicken & Zucchini Bowl',
            'short_description' => 'Balanced, low-FODMAP lunch.',
            'body' => "Ingredients:\n- Chicken breast\n- Zucchini\n- Olive oil\nSteps:\n1. Grill chicken and zucchini.\n2. Serve warm."
        ],
        [
            'name' => 'Quinoa & Spinach Omelette',
            'short_description' => 'Protein-packed breakfast.',
            'body' => "Ingredients:\n- Quinoa\n- Eggs\n- Spinach\nSteps:\n1. Cook quinoa.\n2. Make omelette with eggs and spinach.\n3. Serve warm."
        ],
        [
            'name' => 'Baked Salmon & Spinach Wrap',
            'short_description' => 'Quick and light dinner.',
            'body' => "Ingredients:\n- Salmon fillet\n- Spinach\n- Lettuce leaves\nSteps:\n1. Bake salmon.\n2. Wrap with spinach in lettuce leaves.\n3. Serve."
        ],
        [
            'name' => 'Spinach & Carrot Bowl',
            'short_description' => 'Refreshing, nutrient-rich lunch.',
            'body' => "Ingredients:\n- Spinach\n- Carrots\n- Olive oil\nSteps:\n1. Slice carrots.\n2. Toss with spinach and olive oil.\n3. Serve warm or chilled."
        ],
        [
            'name' => 'Grilled Chicken & Coconut Yogurt Bowl',
            'short_description' => 'Protein and probiotic combo.',
            'body' => "Ingredients:\n- Grilled chicken\n- Coconut yogurt\n- Spinach\nSteps:\n1. Grill chicken.\n2. Serve over coconut yogurt with spinach."
        ],
        [
            'name' => 'Quinoa & Tilapia Wrap',
            'short_description' => 'Light lunch wrap.',
            'body' => "Ingredients:\n- Quinoa\n- Tilapia fillet\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Place tilapia and quinoa in lettuce.\n3. Wrap and serve."
        ],
        [
            'name' => 'Spinach & Chicken Quinoa Bowl',
            'short_description' => 'Balanced lunch or dinner.',
            'body' => "Ingredients:\n- Spinach\n- Chicken breast\n- Quinoa\nSteps:\n1. Grill chicken.\n2. Cook quinoa.\n3. Combine and serve warm."
        ],
        [
            'name' => 'Coconut Yogurt & Spinach Smoothie',
            'short_description' => 'Probiotic-rich breakfast drink.',
            'body' => "Ingredients:\n- Coconut yogurt\n- Spinach\n- Chia seeds\nSteps:\n1. Blend ingredients.\n2. Serve chilled."
        ],
        [
            'name' => 'Baked Tilapia & Spinach Bowl',
            'short_description' => 'Light, protein-rich dinner.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\n- Olive oil\nSteps:\n1. Bake tilapia 15 min.\n2. Sauté spinach.\n3. Serve together."
        ],
        [
            'name' => 'Quinoa & Chicken Wrap',
            'short_description' => 'Quick, balanced meal.',
            'body' => "Ingredients:\n- Quinoa\n- Chicken breast\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Grill chicken.\n3. Wrap and serve."
        ],
        [
            'name' => 'Spinach & Tilapia Salad',
            'short_description' => 'High-protein lunch.',
            'body' => "Ingredients:\n- Spinach\n- Tilapia fillet\n- Olive oil\nSteps:\n1. Grill tilapia.\n2. Toss with spinach and olive oil.\n3. Serve fresh."
        ],
        [
            'name' => 'Grilled Chicken & Quinoa Bowl',
            'short_description' => 'Balanced low-FODMAP dinner.',
            'body' => "Ingredients:\n- Chicken breast\n- Quinoa\n- Zucchini\nSteps:\n1. Grill chicken.\n2. Cook quinoa.\n3. Combine and serve warm."
        ],
        [
            'name' => 'Coconut Yogurt & Egg Bowl',
            'short_description' => 'Protein-packed breakfast.',
            'body' => "Ingredients:\n- Coconut yogurt\n- Boiled eggs\n- Spinach\nSteps:\n1. Mix ingredients.\n2. Serve chilled or room temp."
        ],
        [
            'name' => 'Spinach & Carrot Wrap',
            'short_description' => 'Light, nutrient-rich lunch.',
            'body' => "Ingredients:\n- Spinach\n- Carrots\n- Lettuce leaves\nSteps:\n1. Slice carrots.\n2. Add spinach.\n3. Wrap and serve."
        ],
        [
            'name' => 'Grilled Tilapia & Quinoa Bowl',
            'short_description' => 'Protein-rich dinner.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Quinoa\n- Spinach\nSteps:\n1. Grill tilapia.\n2. Cook quinoa.\n3. Serve together."
        ],
        [
            'name' => 'Quinoa & Spinach Stir-fry',
            'short_description' => 'Quick, balanced meal.',
            'body' => "Ingredients:\n- Quinoa\n- Spinach\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Stir-fry spinach.\n3. Serve warm."
        ],
        [
            'name' => 'Spinach & Chicken Wrap',
            'short_description' => 'Quick lunch option.',
            'body' => "Ingredients:\n- Spinach\n- Chicken breast\n- Lettuce leaves\nSteps:\n1. Grill chicken.\n2. Wrap in lettuce with spinach.\n3. Serve fresh."
        ],
        [
            'name' => 'Baked Salmon & Quinoa Bowl',
            'short_description' => 'Balanced dinner.',
            'body' => "Ingredients:\n- Salmon fillet\n- Quinoa\n- Spinach\nSteps:\n1. Bake salmon.\n2. Cook quinoa.\n3. Serve together."
        ],
        [
            'name' => 'Cucumber & Chicken Quinoa Bowl',
            'short_description' => 'Protein-rich lunch.',
            'body' => "Ingredients:\n- Cucumber\n- Chicken breast\n- Quinoa\nSteps:\n1. Grill chicken.\n2. Mix with cucumber and quinoa.\n3. Serve warm."
        ]
    ];


        $recipesData['Hydrogen sulfide SIBO'] = [
        [
            'name' => 'Steamed Fish with Rice',
            'short_description' => 'Light and easy to digest.',
            'body' => "Ingredients:\n- White fish fillet\n- White rice\n- Olive oil\nSteps:\n1. Steam fish 10-12 min.\n2. Cook rice.\n3. Serve together warm."
        ],
        [
            'name' => 'Mint Infusion Drink',
            'short_description' => 'Helps reduce sulfur gas symptoms.',
            'body' => "Ingredients:\n- Fresh mint leaves\n- Hot water\nSteps:\n1. Steep mint leaves in hot water 5 min.\n2. Serve warm or chilled."
        ],
        [
            'name' => 'Baked Tilapia & Zucchini',
            'short_description' => 'Light, low-FODMAP dinner.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Zucchini\n- Olive oil\nSteps:\n1. Bake tilapia 15 min.\n2. Sauté zucchini.\n3. Serve together."
        ],
        [
            'name' => 'Quinoa & Steamed Chicken',
            'short_description' => 'Balanced, easy to digest meal.',
            'body' => "Ingredients:\n- Quinoa\n- Chicken breast\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Steam chicken 10-12 min.\n3. Serve warm."
        ],
        [
            'name' => 'Cucumber & Carrot Salad',
            'short_description' => 'Refreshing, gut-friendly salad.',
            'body' => "Ingredients:\n- Cucumber\n- Carrots\n- Olive oil\nSteps:\n1. Slice cucumber and carrots.\n2. Toss with olive oil.\n3. Serve fresh."
        ],
        [
            'name' => 'Steamed Salmon & Spinach',
            'short_description' => 'Light and protein-rich.',
            'body' => "Ingredients:\n- Salmon fillet\n- Spinach\n- Olive oil\nSteps:\n1. Steam salmon 10 min.\n2. Sauté spinach lightly.\n3. Serve together."
        ],
        [
            'name' => 'Rice & Boiled Eggs',
            'short_description' => 'Simple, easy-to-digest breakfast.',
            'body' => "Ingredients:\n- White rice\n- Eggs\nSteps:\n1. Boil eggs 10 min.\n2. Cook rice.\n3. Serve together warm."
        ],
        [
            'name' => 'Zucchini & Tilapia Wrap',
            'short_description' => 'Low-FODMAP light lunch.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Zucchini\n- Lettuce leaves\nSteps:\n1. Bake tilapia.\n2. Slice zucchini.\n3. Wrap in lettuce and serve."
        ],
        [
            'name' => 'Quinoa & Steamed Fish Bowl',
            'short_description' => 'Balanced, light meal.',
            'body' => "Ingredients:\n- Quinoa\n- White fish fillet\n- Spinach\nSteps:\n1. Cook quinoa.\n2. Steam fish.\n3. Serve with spinach."
        ],
        [
            'name' => 'Cucumber Mint Salad',
            'short_description' => 'Refreshing and cooling.',
            'body' => "Ingredients:\n- Cucumber\n- Fresh mint\n- Olive oil\nSteps:\n1. Slice cucumber.\n2. Chop mint.\n3. Toss together and serve."
        ],
        [
            'name' => 'Baked Cod & Quinoa',
            'short_description' => 'Protein-rich, gentle on gut.',
            'body' => "Ingredients:\n- Cod fillet\n- Quinoa\n- Olive oil\nSteps:\n1. Bake cod 15 min.\n2. Cook quinoa.\n3. Serve together."
        ],
        [
            'name' => 'Steamed Chicken & Carrots',
            'short_description' => 'Simple and digestible meal.',
            'body' => "Ingredients:\n- Chicken breast\n- Carrots\nSteps:\n1. Steam chicken and carrots 10-12 min.\n2. Serve warm."
        ],
        [
            'name' => 'Rice & Zucchini Bowl',
            'short_description' => 'Light lunch or dinner.',
            'body' => "Ingredients:\n- White rice\n- Zucchini\n- Olive oil\nSteps:\n1. Cook rice.\n2. Sauté zucchini lightly.\n3. Serve warm."
        ],
        [
            'name' => 'Coconut Yogurt & Blueberries',
            'short_description' => 'Probiotic-rich, light breakfast.',
            'body' => "Ingredients:\n- Coconut yogurt\n- Blueberries\nSteps:\n1. Mix ingredients.\n2. Serve chilled."
        ],
        [
            'name' => 'Baked Tilapia & Spinach Bowl',
            'short_description' => 'Protein-rich dinner option.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\n- Olive oil\nSteps:\n1. Bake tilapia 15 min.\n2. Sauté spinach.\n3. Serve together."
        ],
        [
            'name' => 'Quinoa & Boiled Chicken',
            'short_description' => 'Easy, balanced meal.',
            'body' => "Ingredients:\n- Quinoa\n- Chicken breast\nSteps:\n1. Cook quinoa.\n2. Boil chicken.\n3. Serve warm."
        ],
        [
            'name' => 'Cucumber & Boiled Eggs',
            'short_description' => 'Light breakfast or snack.',
            'body' => "Ingredients:\n- Cucumber\n- Boiled eggs\nSteps:\n1. Slice cucumber.\n2. Chop eggs.\n3. Serve fresh."
        ],
        [
            'name' => 'Steamed Salmon & Rice',
            'short_description' => 'Balanced, easy-to-digest dinner.',
            'body' => "Ingredients:\n- Salmon fillet\n- White rice\nSteps:\n1. Steam salmon 10 min.\n2. Cook rice.\n3. Serve together warm."
        ],
        [
            'name' => 'Mint & Cucumber Smoothie',
            'short_description' => 'Refreshing probiotic drink.',
            'body' => "Ingredients:\n- Cucumber\n- Fresh mint\n- Coconut yogurt\nSteps:\n1. Blend ingredients.\n2. Serve chilled."
        ],
        [
            'name' => 'Baked Cod & Steamed Carrots',
            'short_description' => 'Light dinner meal.',
            'body' => "Ingredients:\n- Cod fillet\n- Carrots\nSteps:\n1. Bake cod 15 min.\n2. Steam carrots.\n3. Serve together."
        ],
        [
            'name' => 'Rice & Steamed Tilapia',
            'short_description' => 'Simple, easy-to-digest lunch.',
            'body' => "Ingredients:\n- White rice\n- Tilapia fillet\nSteps:\n1. Cook rice.\n2. Steam tilapia.\n3. Serve warm."
        ],
        [
            'name' => 'Quinoa & Steamed Salmon',
            'short_description' => 'Balanced protein-rich meal.',
            'body' => "Ingredients:\n- Quinoa\n- Salmon fillet\nSteps:\n1. Cook quinoa.\n2. Steam salmon.\n3. Serve together warm."
        ],
        [
            'name' => 'Steamed Chicken & Spinach Bowl',
            'short_description' => 'Gentle on gut, high-protein lunch.',
            'body' => "Ingredients:\n- Chicken breast\n- Spinach\nSteps:\n1. Steam chicken 10-12 min.\n2. Sauté spinach.\n3. Serve together."
        ],
        [
            'name' => 'Cucumber & Tilapia Salad',
            'short_description' => 'Light and refreshing.',
            'body' => "Ingredients:\n- Cucumber\n- Tilapia fillet\n- Olive oil\nSteps:\n1. Grill tilapia.\n2. Slice cucumber.\n3. Toss together and serve fresh."
        ],
        [
            'name' => 'Baked Salmon & Carrot Bowl',
            'short_description' => 'Balanced, easy-to-digest dinner.',
            'body' => "Ingredients:\n- Salmon fillet\n- Carrots\nSteps:\n1. Bake salmon 15 min.\n2. Steam carrots.\n3. Serve together warm."
        ],
        [
            'name' => 'Quinoa & Cucumber Wrap',
            'short_description' => 'Light, nutrient-rich lunch.',
            'body' => "Ingredients:\n- Quinoa\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Slice cucumber.\n3. Wrap and serve fresh."
        ],
        [
            'name' => 'Steamed Tilapia & Spinach Bowl',
            'short_description' => 'High-protein, easy-to-digest dinner.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\nSteps:\n1. Steam tilapia 10 min.\n2. Sauté spinach.\n3. Serve together warm."
        ],
        [
            'name' => 'Cucumber & Boiled Chicken Bowl',
            'short_description' => 'Light, protein-rich meal.',
            'body' => "Ingredients:\n- Cucumber\n- Boiled chicken\nSteps:\n1. Boil chicken 10-12 min.\n2. Slice cucumber.\n3. Serve together warm."
        ],
        [
            'name' => 'Quinoa & Steamed Fish Wrap',
            'short_description' => 'Balanced low-FODMAP lunch.',
            'body' => "Ingredients:\n- Quinoa\n- White fish\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Steam fish.\n3. Wrap in lettuce leaves and serve."
        ],
        [
            'name' => 'Baked Tilapia & Cucumber Salad',
            'short_description' => 'Light, refreshing dinner.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Cucumber\n- Olive oil\nSteps:\n1. Bake tilapia 15 min.\n2. Slice cucumber.\n3. Toss together and serve."
        ],
        [
            'name' => 'Steamed Salmon & Zucchini',
            'short_description' => 'Balanced protein-rich meal.',
            'body' => "Ingredients:\n- Salmon fillet\n- Zucchini\nSteps:\n1. Steam salmon 10 min.\n2. Sauté zucchini lightly.\n3. Serve together warm."
        ],
        [
            'name' => 'Rice & Steamed Chicken Salad',
            'short_description' => 'Light lunch option.',
            'body' => "Ingredients:\n- White rice\n- Steamed chicken\n- Spinach\nSteps:\n1. Cook rice.\n2. Steam chicken.\n3. Toss with spinach and serve."
        ],
        [
            'name' => 'Cucumber & Mint Smoothie',
            'short_description' => 'Refreshing gut-friendly drink.',
            'body' => "Ingredients:\n- Cucumber\n- Mint leaves\n- Coconut yogurt\nSteps:\n1. Blend ingredients.\n2. Serve chilled."
        ],
        [
            'name' => 'Baked Cod & Steamed Spinach',
            'short_description' => 'High-protein, gentle dinner.',
            'body' => "Ingredients:\n- Cod fillet\n- Spinach\nSteps:\n1. Bake cod 15 min.\n2. Steam spinach lightly.\n3. Serve warm."
        ],
        [
            'name' => 'Quinoa & Steamed Chicken Wrap',
            'short_description' => 'Easy, balanced lunch.',
            'body' => "Ingredients:\n- Quinoa\n- Steamed chicken\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Wrap chicken and quinoa in lettuce.\n3. Serve fresh."
        ],
        [
            'name' => 'Steamed Tilapia & Carrot Bowl',
            'short_description' => 'Protein-rich, light dinner.',
            'body' => "Ingredients:\n- Tilapia fillet\n- Carrots\nSteps:\n1. Steam tilapia 10 min.\n2. Steam carrots.\n3. Serve together warm."
        ],
        [
            'name' => 'Rice & Baked Salmon Bowl',
            'short_description' => 'Balanced dinner meal.',
            'body' => "Ingredients:\n- White rice\n- Salmon fillet\nSteps:\n1. Cook rice.\n2. Bake salmon 15 min.\n3. Serve together warm."
        ],
        [
            'name' => 'Cucumber & Steamed Fish Wrap',
            'short_description' => 'Light lunch, easy to digest.',
            'body' => "Ingredients:\n- Cucumber\n- White fish\n- Lettuce leaves\nSteps:\n1. Steam fish 10 min.\n2. Slice cucumber.\n3. Wrap in lettuce leaves and serve."
        ],
        [
            'name' => 'Quinoa & Baked Tilapia Bowl',
            'short_description' => 'Protein-rich meal option.',
            'body' => "Ingredients:\n- Quinoa\n- Tilapia fillet\nSteps:\n1. Cook quinoa.\n2. Bake tilapia.\n3. Serve together warm."
        ],
        [
            'name' => 'Steamed Chicken & Zucchini Bowl',
            'short_description' => 'Balanced, light lunch.',
            'body' => "Ingredients:\n- Chicken breast\n- Zucchini\nSteps:\n1. Steam chicken 10-12 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
        ],
        [
            'name' => 'Cucumber & Quinoa Salad',
            'short_description' => 'Refreshing and light meal.',
            'body' => "Ingredients:\n- Cucumber\n- Quinoa\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Slice cucumber.\n3. Toss together and serve."
        ]
    ];



        $recipesData['Methane-Dominant SIBO'] = [
    [
        'name' => 'Roasted Chicken & Veggies',
        'short_description' => 'Simple protein-rich recipe.',
        'body' => "Ingredients:\n- Chicken breast\n- Carrots, zucchini, and bell peppers\n- Olive oil\nSteps:\n1. Preheat oven to 375°F (190°C).\n2. Toss chicken and veggies with olive oil.\n3. Roast 25-30 min until cooked through."
    ],
    [
        'name' => 'Ginger Soup',
        'short_description' => 'Anti-inflammatory and gut calming.',
        'body' => "Ingredients:\n- Fresh ginger\n- Carrots\n- Chicken or vegetable broth\nSteps:\n1. Slice ginger and carrots.\n2. Simmer in broth 20 min.\n3. Blend until smooth and serve warm."
    ],
    [
        'name' => 'Grilled Turkey & Spinach',
        'short_description' => 'Lean protein with leafy greens.',
        'body' => "Ingredients:\n- Turkey breast\n- Fresh spinach\n- Olive oil\nSteps:\n1. Grill turkey until cooked.\n2. Sauté spinach lightly.\n3. Serve together warm."
    ],
    [
        'name' => 'Zucchini & Chicken Stir-Fry',
        'short_description' => 'Quick, low-FODMAP stir-fry.',
        'body' => "Ingredients:\n- Chicken breast\n- Zucchini\n- Olive oil\nSteps:\n1. Slice chicken and zucchini.\n2. Stir-fry with olive oil 8-10 min.\n3. Serve warm."
    ],
    [
        'name' => 'Baked Salmon & Carrots',
        'short_description' => 'Simple and gut-friendly dinner.',
        'body' => "Ingredients:\n- Salmon fillet\n- Carrots\n- Olive oil\nSteps:\n1. Bake salmon 15 min at 375°F.\n2. Steam or roast carrots.\n3. Serve together."
    ],
    [
        'name' => 'Quinoa & Roasted Chicken Bowl',
        'short_description' => 'Balanced protein and carbs.',
        'body' => "Ingredients:\n- Quinoa\n- Roasted chicken\n- Zucchini and carrots\nSteps:\n1. Cook quinoa.\n2. Add roasted chicken and veggies.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Turkey Salad',
        'short_description' => 'Refreshing, easy-to-digest lunch.',
        'body' => "Ingredients:\n- Sliced turkey breast\n- Cucumber\n- Olive oil\nSteps:\n1. Slice turkey and cucumber.\n2. Toss with olive oil.\n3. Serve fresh."
    ],
    [
        'name' => 'Steamed Cod & Spinach',
        'short_description' => 'Light and protein-rich.',
        'body' => "Ingredients:\n- Cod fillet\n- Spinach\n- Olive oil\nSteps:\n1. Steam cod 10 min.\n2. Sauté spinach lightly.\n3. Serve together."
    ],
    [
        'name' => 'Roasted Turkey & Carrot Bowl',
        'short_description' => 'Simple, protein-rich meal.',
        'body' => "Ingredients:\n- Turkey breast\n- Carrots\n- Olive oil\nSteps:\n1. Roast turkey 20-25 min.\n2. Roast carrots or steam.\n3. Serve together warm."
    ],
    [
        'name' => 'Ginger Chicken Soup',
        'short_description' => 'Gut soothing and light.',
        'body' => "Ingredients:\n- Chicken breast\n- Fresh ginger\n- Carrots\n- Broth\nSteps:\n1. Simmer chicken, ginger, and carrots in broth 20 min.\n2. Serve warm."
    ],
    [
        'name' => 'Quinoa & Grilled Salmon',
        'short_description' => 'Balanced low-FODMAP meal.',
        'body' => "Ingredients:\n- Quinoa\n- Salmon fillet\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Grill salmon 10 min.\n3. Serve together."
    ],
    [
        'name' => 'Roasted Chicken & Zucchini',
        'short_description' => 'Simple, nutritious dinner.',
        'body' => "Ingredients:\n- Chicken breast\n- Zucchini\n- Olive oil\nSteps:\n1. Roast chicken and zucchini 20 min.\n2. Serve warm."
    ],
    [
        'name' => 'Cucumber & Salmon Salad',
        'short_description' => 'Light and refreshing lunch.',
        'body' => "Ingredients:\n- Cucumber\n- Cooked salmon\n- Olive oil\nSteps:\n1. Slice cucumber and flake salmon.\n2. Toss together.\n3. Serve fresh."
    ],
    [
        'name' => 'Baked Tilapia & Carrot Bowl',
        'short_description' => 'Easy, gut-friendly dinner.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Carrots\n- Olive oil\nSteps:\n1. Bake tilapia 12-15 min.\n2. Steam or roast carrots.\n3. Serve together."
    ],
    [
        'name' => 'Quinoa & Roasted Turkey',
        'short_description' => 'Balanced protein and carbs.',
        'body' => "Ingredients:\n- Quinoa\n- Roasted turkey\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Add roasted turkey and zucchini.\n3. Serve warm."
    ],
    [
        'name' => 'Steamed Chicken & Spinach',
        'short_description' => 'Light, digestible meal.',
        'body' => "Ingredients:\n- Chicken breast\n- Spinach\n- Olive oil\nSteps:\n1. Steam chicken 10 min.\n2. Sauté spinach lightly.\n3. Serve together."
    ],
    [
        'name' => 'Roasted Salmon & Zucchini',
        'short_description' => 'Simple dinner, low-FODMAP.',
        'body' => "Ingredients:\n- Salmon fillet\n- Zucchini\n- Olive oil\nSteps:\n1. Roast salmon 12-15 min.\n2. Roast zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Chicken Wrap',
        'short_description' => 'Light lunch option.',
        'body' => "Ingredients:\n- Cooked chicken\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Slice chicken and cucumber.\n2. Wrap in lettuce leaves.\n3. Serve fresh."
    ],
    [
        'name' => 'Baked Cod & Carrot Bowl',
        'short_description' => 'Simple and gut-friendly dinner.',
        'body' => "Ingredients:\n- Cod fillet\n- Carrots\n- Olive oil\nSteps:\n1. Bake cod 12 min.\n2. Steam or roast carrots.\n3. Serve together."
    ],
    [
        'name' => 'Quinoa & Grilled Chicken Bowl',
        'short_description' => 'Balanced low-FODMAP meal.',
        'body' => "Ingredients:\n- Quinoa\n- Grilled chicken\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Grill chicken.\n3. Serve together."
    ],
    [
        'name' => 'Steamed Tilapia & Spinach',
        'short_description' => 'Protein-rich, gentle dinner.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\n- Olive oil\nSteps:\n1. Steam tilapia 10 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Roasted Turkey Salad',
        'short_description' => 'Light and refreshing lunch.',
        'body' => "Ingredients:\n- Roasted turkey\n- Cucumber\n- Olive oil\nSteps:\n1. Slice turkey and cucumber.\n2. Toss together.\n3. Serve fresh."
    ],
    [
        'name' => 'Baked Salmon & Carrot Bowl',
        'short_description' => 'Easy-to-digest dinner.',
        'body' => "Ingredients:\n- Salmon fillet\n- Carrots\n- Olive oil\nSteps:\n1. Bake salmon 12-15 min.\n2. Roast or steam carrots.\n3. Serve together warm."
    ],
    [
        'name' => 'Quinoa & Steamed Chicken Bowl',
        'short_description' => 'Balanced protein and carbs.',
        'body' => "Ingredients:\n- Quinoa\n- Steamed chicken\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Steam chicken 10 min.\n3. Serve with zucchini."
    ],
    [
        'name' => 'Steamed Cod & Carrots',
        'short_description' => 'Simple and light dinner.',
        'body' => "Ingredients:\n- Cod fillet\n- Carrots\n- Olive oil\nSteps:\n1. Steam cod 10-12 min.\n2. Steam carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Quinoa Wrap',
        'short_description' => 'Light lunch or snack.',
        'body' => "Ingredients:\n- Quinoa\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Slice cucumber.\n3. Wrap in lettuce leaves and serve."
    ],
    [
        'name' => 'Roasted Chicken & Spinach Bowl',
        'short_description' => 'Protein-rich, low-FODMAP dinner.',
        'body' => "Ingredients:\n- Roasted chicken\n- Spinach\n- Olive oil\nSteps:\n1. Roast chicken.\n2. Sauté spinach lightly.\n3. Serve together warm."
    ],
    [
        'name' => 'Baked Tilapia & Zucchini',
        'short_description' => 'Easy-to-digest dinner meal.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Zucchini\n- Olive oil\nSteps:\n1. Bake tilapia 12 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Baked Salmon Bowl',
        'short_description' => 'Balanced protein and carbs.',
        'body' => "Ingredients:\n- Quinoa\n- Salmon fillet\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Bake salmon 12-15 min.\n3. Serve together warm."
    ],
    [
        'name' => 'Steamed Chicken & Carrot Bowl',
        'short_description' => 'Light, easy-to-digest dinner.',
        'body' => "Ingredients:\n- Chicken breast\n- Carrots\nSteps:\n1. Steam chicken 10-12 min.\n2. Steam carrots.\n3. Serve together warm."
    ],
    [
        'name' => 'Cucumber & Steamed Fish Wrap',
        'short_description' => 'Refreshing light lunch.',
        'body' => "Ingredients:\n- Cucumber\n- White fish\n- Lettuce leaves\nSteps:\n1. Steam fish 10 min.\n2. Slice cucumber.\n3. Wrap in lettuce leaves and serve."
    ],
    [
        'name' => 'Quinoa & Baked Tilapia Bowl',
        'short_description' => 'Protein-rich meal option.',
        'body' => "Ingredients:\n- Quinoa\n- Tilapia fillet\nSteps:\n1. Cook quinoa.\n2. Bake tilapia.\n3. Serve together warm."
    ],
    [
        'name' => 'Steamed Chicken & Zucchini Bowl',
        'short_description' => 'Balanced, light lunch.',
        'body' => "Ingredients:\n- Chicken breast\n- Zucchini\nSteps:\n1. Steam chicken 10-12 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Quinoa Salad',
        'short_description' => 'Refreshing and light meal.',
        'body' => "Ingredients:\n- Cucumber\n- Quinoa\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Slice cucumber.\n3. Toss together and serve."
    ]
];

        $recipesData['Mixed-Dominant SIBO'] = [
    [
        'name' => 'Quinoa & Steamed Chicken Bowl',
        'short_description' => 'Balanced protein and carbs.',
        'body' => "Ingredients:\n- Quinoa\n- Chicken breast\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Steam chicken 10 min.\n3. Sauté zucchini lightly.\n4. Serve warm."
    ],
    [
        'name' => 'Coconut Yogurt Smoothie',
        'short_description' => 'Probiotic-rich and light.',
        'body' => "Ingredients:\n- Coconut yogurt\n- Blueberries\n- Spinach\nSteps:\n1. Blend all ingredients until smooth.\n2. Serve chilled."
    ],
    [
        'name' => 'Roasted Salmon & Carrots',
        'short_description' => 'Simple, gut-friendly dinner.',
        'body' => "Ingredients:\n- Salmon fillet\n- Carrots\n- Olive oil\nSteps:\n1. Roast salmon 12-15 min.\n2. Roast or steam carrots.\n3. Serve together warm."
    ],
    [
        'name' => 'Steamed Cod & Zucchini',
        'short_description' => 'Protein-rich, light meal.',
        'body' => "Ingredients:\n- Cod fillet\n- Zucchini\n- Olive oil\nSteps:\n1. Steam cod 10-12 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Grilled Chicken Salad',
        'short_description' => 'Balanced and refreshing lunch.',
        'body' => "Ingredients:\n- Quinoa\n- Grilled chicken\n- Cucumber\nSteps:\n1. Cook quinoa.\n2. Grill chicken.\n3. Toss together with cucumber."
    ],
    [
        'name' => 'Baked Tilapia & Spinach',
        'short_description' => 'Easy, light dinner option.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\n- Olive oil\nSteps:\n1. Bake tilapia 12 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Roasted Turkey Wrap',
        'short_description' => 'Refreshing lunch, easy to digest.',
        'body' => "Ingredients:\n- Roasted turkey\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Slice turkey and cucumber.\n2. Wrap in lettuce leaves.\n3. Serve fresh."
    ],
    [
        'name' => 'Quinoa & Steamed Tilapia Bowl',
        'short_description' => 'Protein-rich, light meal.',
        'body' => "Ingredients:\n- Quinoa\n- Tilapia fillet\n- Carrots\nSteps:\n1. Cook quinoa.\n2. Steam tilapia 10 min.\n3. Steam carrots and serve together."
    ],
    [
        'name' => 'Steamed Chicken & Carrot Bowl',
        'short_description' => 'Simple, gut-friendly dinner.',
        'body' => "Ingredients:\n- Chicken breast\n- Carrots\n- Olive oil\nSteps:\n1. Steam chicken 10-12 min.\n2. Steam carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Quinoa Salad',
        'short_description' => 'Light and refreshing meal.',
        'body' => "Ingredients:\n- Cucumber\n- Quinoa\n- Olive oil\nSteps:\n1. Cook quinoa.\n2. Slice cucumber.\n3. Toss together and serve."
    ],
    [
        'name' => 'Roasted Chicken & Zucchini Bowl',
        'short_description' => 'Balanced protein and veggies.',
        'body' => "Ingredients:\n- Roasted chicken\n- Zucchini\n- Olive oil\nSteps:\n1. Roast chicken.\n2. Sauté zucchini lightly.\n3. Serve together warm."
    ],
    [
        'name' => 'Baked Salmon & Spinach',
        'short_description' => 'Simple and light dinner.',
        'body' => "Ingredients:\n- Salmon fillet\n- Spinach\n- Olive oil\nSteps:\n1. Bake salmon 12-15 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Roasted Turkey Bowl',
        'short_description' => 'Protein-rich meal with grains.',
        'body' => "Ingredients:\n- Quinoa\n- Roasted turkey\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Add roasted turkey and zucchini.\n3. Serve together warm."
    ],
    [
        'name' => 'Steamed Cod & Carrot Bowl',
        'short_description' => 'Light, easy-to-digest dinner.',
        'body' => "Ingredients:\n- Cod fillet\n- Carrots\nSteps:\n1. Steam cod 10-12 min.\n2. Steam carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Grilled Chicken Salad',
        'short_description' => 'Refreshing lunch with protein.',
        'body' => "Ingredients:\n- Grilled chicken\n- Cucumber\n- Olive oil\nSteps:\n1. Slice chicken and cucumber.\n2. Toss together.\n3. Serve fresh."
    ],
    [
        'name' => 'Baked Tilapia & Zucchini Bowl',
        'short_description' => 'Easy and balanced meal.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Zucchini\nSteps:\n1. Bake tilapia 12-15 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Steamed Chicken Wrap',
        'short_description' => 'Light lunch with protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Steamed chicken\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Steam chicken.\n3. Wrap in lettuce leaves and serve."
    ],
    [
        'name' => 'Cucumber & Roasted Salmon Bowl',
        'short_description' => 'Light, gut-friendly meal.',
        'body' => "Ingredients:\n- Cucumber\n- Roasted salmon\n- Olive oil\nSteps:\n1. Slice cucumber.\n2. Roast salmon 12-15 min.\n3. Serve together."
    ],
    [
        'name' => 'Steamed Tilapia & Carrot Bowl',
        'short_description' => 'Simple, protein-rich dinner.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Carrots\nSteps:\n1. Steam tilapia 10 min.\n2. Steam carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Grilled Salmon Salad',
        'short_description' => 'Balanced protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Grilled salmon\n- Spinach\nSteps:\n1. Cook quinoa.\n2. Grill salmon 10 min.\n3. Toss together and serve."
    ],
    [
        'name' => 'Roasted Chicken & Carrot Bowl',
        'short_description' => 'Simple dinner, easy to digest.',
        'body' => "Ingredients:\n- Roasted chicken\n- Carrots\n- Olive oil\nSteps:\n1. Roast chicken.\n2. Roast or steam carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Steamed Cod Wrap',
        'short_description' => 'Light lunch option.',
        'body' => "Ingredients:\n- Steamed cod\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Steam cod 10 min.\n2. Slice cucumber.\n3. Wrap in lettuce leaves and serve."
    ],
    [
        'name' => 'Quinoa & Baked Salmon Bowl',
        'short_description' => 'Balanced meal with protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Baked salmon\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Bake salmon 12-15 min.\n3. Serve warm."
    ],
    [
        'name' => 'Steamed Chicken & Zucchini Bowl',
        'short_description' => 'Light, gut-friendly dinner.',
        'body' => "Ingredients:\n- Chicken breast\n- Zucchini\nSteps:\n1. Steam chicken 10-12 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Quinoa Wrap',
        'short_description' => 'Easy-to-digest lunch.',
        'body' => "Ingredients:\n- Quinoa\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Slice cucumber.\n3. Wrap in lettuce leaves and serve."
    ],
    [
        'name' => 'Roasted Turkey & Spinach Bowl',
        'short_description' => 'Protein-rich, balanced meal.',
        'body' => "Ingredients:\n- Roasted turkey\n- Spinach\n- Olive oil\nSteps:\n1. Roast turkey.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Baked Tilapia & Carrot Bowl',
        'short_description' => 'Simple, light dinner option.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Carrots\nSteps:\n1. Bake tilapia 12-15 min.\n2. Steam carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Roasted Chicken Bowl',
        'short_description' => 'Balanced protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Roasted chicken\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Roast chicken.\n3. Serve warm."
    ],
    [
        'name' => 'Steamed Cod & Spinach',
        'short_description' => 'Light, easy-to-digest meal.',
        'body' => "Ingredients:\n- Cod fillet\n- Spinach\n- Olive oil\nSteps:\n1. Steam cod 10-12 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Grilled Tilapia Salad',
        'short_description' => 'Refreshing, light lunch.',
        'body' => "Ingredients:\n- Grilled tilapia\n- Cucumber\n- Olive oil\nSteps:\n1. Grill tilapia 10 min.\n2. Slice cucumber.\n3. Toss together and serve."
    ],
    [
        'name' => 'Quinoa & Steamed Turkey Bowl',
        'short_description' => 'Balanced protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Steamed turkey\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Steam turkey.\n3. Serve warm."
    ],
    [
        'name' => 'Steamed Chicken & Cucumber Bowl',
        'short_description' => 'Light, easy-to-digest meal.',
        'body' => "Ingredients:\n- Chicken breast\n- Cucumber\nSteps:\n1. Steam chicken 10-12 min.\n2. Slice cucumber.\n3. Serve together warm."
    ],
    [
        'name' => 'Roasted Salmon & Zucchini Bowl',
        'short_description' => 'Balanced dinner with protein.',
        'body' => "Ingredients:\n- Salmon fillet\n- Zucchini\nSteps:\n1. Roast salmon 12-15 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Baked Tilapia Wrap',
        'short_description' => 'Light lunch, protein-rich.',
        'body' => "Ingredients:\n- Baked tilapia\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Bake tilapia 12 min.\n2. Slice cucumber.\n3. Wrap in lettuce leaves."
    ],
    [
        'name' => 'Quinoa & Grilled Chicken Bowl',
        'short_description' => 'Balanced protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Grilled chicken\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Grill chicken.\n3. Serve warm."
    ],
    [
        'name' => 'Steamed Tilapia & Spinach Bowl',
        'short_description' => 'Light, gut-friendly dinner.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\nSteps:\n1. Steam tilapia 10-12 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Roasted Chicken & Cucumber Salad',
        'short_description' => 'Refreshing lunch with protein.',
        'body' => "Ingredients:\n- Roasted chicken\n- Cucumber\n- Olive oil\nSteps:\n1. Roast chicken.\n2. Slice cucumber.\n3. Toss together and serve."
    ],
    [
        'name' => 'Baked Salmon & Quinoa Bowl',
        'short_description' => 'Balanced, easy-to-digest meal.',
        'body' => "Ingredients:\n- Baked salmon\n- Quinoa\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Bake salmon 12-15 min.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Steamed Tilapia Wrap',
        'short_description' => 'Light lunch with grains and protein.',
        'body' => "Ingredients:\n- Quinoa\n- Steamed tilapia\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Steam tilapia 10 min.\n3. Wrap in lettuce leaves and serve."
    ],
    [
        'name' => 'Cucumber & Steamed Chicken Salad',
        'short_description' => 'Refreshing light meal.',
        'body' => "Ingredients:\n- Chicken breast\n- Cucumber\n- Olive oil\nSteps:\n1. Steam chicken 10-12 min.\n2. Slice cucumber.\n3. Toss together and serve."
    ],
    [
        'name' => 'Roasted Turkey & Quinoa Bowl',
        'short_description' => 'Protein-rich and balanced meal.',
        'body' => "Ingredients:\n- Roasted turkey\n- Quinoa\n- Zucchini\nSteps:\n1. Roast turkey.\n2. Cook quinoa.\n3. Serve warm."
    ],
    [
        'name' => 'Baked Tilapia & Spinach Bowl',
        'short_description' => 'Light, easy-to-digest dinner.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\nSteps:\n1. Bake tilapia 12 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
];



$recipesData['Hydrogen Sulfide SIBO'] = [
    [
        'name' => 'Steamed Fish with Rice',
        'short_description' => 'Light and easy to digest.',
        'body' => "Ingredients:\n- White fish fillet\n- Rice\n- Olive oil\nSteps:\n1. Steam fish 10-12 min.\n2. Cook rice.\n3. Serve fish over rice with a drizzle of olive oil."
    ],
    [
        'name' => 'Mint Infusion Drink',
        'short_description' => 'Helps reduce sulfur gas symptoms.',
        'body' => "Ingredients:\n- Fresh mint leaves\n- Hot water\nSteps:\n1. Pour hot water over mint leaves.\n2. Steep for 5 min.\n3. Serve warm."
    ],
    [
        'name' => 'Steamed Chicken & Carrots',
        'short_description' => 'Simple protein-rich meal.',
        'body' => "Ingredients:\n- Chicken breast\n- Carrots\nSteps:\n1. Steam chicken 10 min.\n2. Steam carrots.\n3. Serve together warm."
    ],
    [
        'name' => 'Quinoa & Steamed Cod Bowl',
        'short_description' => 'Balanced meal for digestion.',
        'body' => "Ingredients:\n- Quinoa\n- Cod fillet\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Steam cod 10 min.\n3. Sauté zucchini lightly and serve."
    ],
    [
        'name' => 'Coconut Yogurt Smoothie',
        'short_description' => 'Probiotic-rich and gentle on the gut.',
        'body' => "Ingredients:\n- Coconut yogurt\n- Blueberries\n- Spinach\nSteps:\n1. Blend all ingredients.\n2. Serve chilled."
    ],
    [
        'name' => 'Steamed Tilapia with Zucchini',
        'short_description' => 'Protein-rich, easy to digest.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Zucchini\nSteps:\n1. Steam tilapia 10 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Roasted Turkey & Quinoa Bowl',
        'short_description' => 'Balanced protein and carbs.',
        'body' => "Ingredients:\n- Roasted turkey\n- Quinoa\n- Spinach\nSteps:\n1. Roast turkey.\n2. Cook quinoa.\n3. Toss with spinach and serve."
    ],
    [
        'name' => 'Baked Salmon & Steamed Carrots',
        'short_description' => 'Gut-friendly dinner.',
        'body' => "Ingredients:\n- Salmon fillet\n- Carrots\nSteps:\n1. Bake salmon 12-15 min.\n2. Steam carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Steamed Chicken Wrap',
        'short_description' => 'Light, protein-rich lunch.',
        'body' => "Ingredients:\n- Chicken breast\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Steam chicken 10 min.\n2. Slice cucumber.\n3. Wrap in lettuce leaves and serve."
    ],
    [
        'name' => 'Quinoa & Steamed Fish Salad',
        'short_description' => 'Balanced, gentle meal.',
        'body' => "Ingredients:\n- Quinoa\n- White fish\n- Spinach\nSteps:\n1. Cook quinoa.\n2. Steam fish 10 min.\n3. Toss with spinach and serve."
    ],
    [
        'name' => 'Steamed Chicken & Zucchini Bowl',
        'short_description' => 'Simple and gut-friendly.',
        'body' => "Ingredients:\n- Chicken breast\n- Zucchini\nSteps:\n1. Steam chicken 10 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Baked Tilapia with Spinach',
        'short_description' => 'Light, protein-rich meal.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\nSteps:\n1. Bake tilapia 12 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Roasted Chicken Salad',
        'short_description' => 'Protein-rich lunch option.',
        'body' => "Ingredients:\n- Quinoa\n- Roasted chicken\n- Cucumber\nSteps:\n1. Cook quinoa.\n2. Roast chicken.\n3. Toss with cucumber and serve."
    ],
    [
        'name' => 'Steamed Cod & Carrot Bowl',
        'short_description' => 'Easy-to-digest dinner.',
        'body' => "Ingredients:\n- Cod fillet\n- Carrots\nSteps:\n1. Steam cod 10-12 min.\n2. Steam carrots.\n3. Serve together."
    ],
    [
        'name' => 'Cucumber & Grilled Chicken Salad',
        'short_description' => 'Refreshing and light lunch.',
        'body' => "Ingredients:\n- Grilled chicken\n- Cucumber\n- Olive oil\nSteps:\n1. Grill chicken.\n2. Slice cucumber.\n3. Toss together and serve."
    ],
    [
        'name' => 'Baked Salmon & Quinoa Bowl',
        'short_description' => 'Balanced dinner with protein and grains.',
        'body' => "Ingredients:\n- Salmon fillet\n- Quinoa\n- Zucchini\nSteps:\n1. Bake salmon 12-15 min.\n2. Cook quinoa.\n3. Serve together."
    ],
    [
        'name' => 'Steamed Turkey & Spinach Bowl',
        'short_description' => 'Gut-friendly, high protein.',
        'body' => "Ingredients:\n- Turkey breast\n- Spinach\nSteps:\n1. Steam turkey 10-12 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Steamed Tilapia Bowl',
        'short_description' => 'Balanced protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Tilapia fillet\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Steam tilapia 10 min.\n3. Sauté zucchini lightly."
    ],
    [
        'name' => 'Cucumber & Steamed Chicken Salad',
        'short_description' => 'Light and refreshing meal.',
        'body' => "Ingredients:\n- Chicken breast\n- Cucumber\n- Olive oil\nSteps:\n1. Steam chicken 10 min.\n2. Slice cucumber.\n3. Toss together."
    ],
    [
        'name' => 'Roasted Salmon & Carrots',
        'short_description' => 'Simple, gut-friendly dinner.',
        'body' => "Ingredients:\n- Salmon fillet\n- Carrots\nSteps:\n1. Roast salmon 12 min.\n2. Steam or roast carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Roasted Turkey Bowl',
        'short_description' => 'Protein-rich, balanced meal.',
        'body' => "Ingredients:\n- Quinoa\n- Roasted turkey\n- Spinach\nSteps:\n1. Cook quinoa.\n2. Roast turkey.\n3. Toss with spinach."
    ],
    [
        'name' => 'Steamed Cod & Zucchini Bowl',
        'short_description' => 'Light, easy-to-digest dinner.',
        'body' => "Ingredients:\n- Cod fillet\n- Zucchini\nSteps:\n1. Steam cod 10-12 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Baked Tilapia Wrap',
        'short_description' => 'Light lunch, protein-rich.',
        'body' => "Ingredients:\n- Baked tilapia\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Bake tilapia 12 min.\n2. Slice cucumber.\n3. Wrap in lettuce leaves."
    ],
    [
        'name' => 'Quinoa & Steamed Chicken Bowl',
        'short_description' => 'Balanced protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Chicken breast\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Steam chicken.\n3. Serve warm."
    ],
    [
        'name' => 'Steamed Tilapia & Spinach Bowl',
        'short_description' => 'Light, gut-friendly dinner.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\nSteps:\n1. Steam tilapia 10 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Roasted Chicken & Cucumber Salad',
        'short_description' => 'Refreshing lunch with protein.',
        'body' => "Ingredients:\n- Roasted chicken\n- Cucumber\n- Olive oil\nSteps:\n1. Roast chicken.\n2. Slice cucumber.\n3. Toss together."
    ],
    [
        'name' => 'Baked Salmon & Quinoa Bowl',
        'short_description' => 'Balanced, easy-to-digest meal.',
        'body' => "Ingredients:\n- Baked salmon\n- Quinoa\n- Zucchini\nSteps:\n1. Cook quinoa.\n2. Bake salmon.\n3. Serve together warm."
    ],
    [
        'name' => 'Quinoa & Steamed Tilapia Wrap',
        'short_description' => 'Light lunch with protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Steamed tilapia\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Steam tilapia 10 min.\n3. Wrap in lettuce leaves."
    ],
    [
        'name' => 'Cucumber & Steamed Chicken Salad',
        'short_description' => 'Refreshing light meal.',
        'body' => "Ingredients:\n- Chicken breast\n- Cucumber\n- Olive oil\nSteps:\n1. Steam chicken 10 min.\n2. Slice cucumber.\n3. Toss together."
    ],
    [
        'name' => 'Roasted Turkey & Quinoa Bowl',
        'short_description' => 'Protein-rich and balanced meal.',
        'body' => "Ingredients:\n- Roasted turkey\n- Quinoa\n- Zucchini\nSteps:\n1. Roast turkey.\n2. Cook quinoa.\n3. Serve warm."
    ],
    [
        'name' => 'Baked Tilapia & Spinach Bowl',
        'short_description' => 'Light, easy-to-digest dinner.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Spinach\nSteps:\n1. Bake tilapia 12 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Steamed Chicken & Rice Bowl',
        'short_description' => 'Simple, gut-friendly meal.',
        'body' => "Ingredients:\n- Chicken breast\n- Rice\n- Zucchini\nSteps:\n1. Steam chicken 10 min.\n2. Cook rice.\n3. Serve together warm."
    ],
    [
        'name' => 'Quinoa & Baked Cod Salad',
        'short_description' => 'Balanced protein and grains.',
        'body' => "Ingredients:\n- Quinoa\n- Baked cod\n- Spinach\nSteps:\n1. Cook quinoa.\n2. Bake cod 12 min.\n3. Toss with spinach."
    ],
    [
        'name' => 'Steamed Turkey & Carrot Bowl',
        'short_description' => 'Protein-rich, easy-to-digest meal.',
        'body' => "Ingredients:\n- Turkey breast\n- Carrots\nSteps:\n1. Steam turkey 10 min.\n2. Steam carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Cucumber & Steamed Cod Wrap',
        'short_description' => 'Light lunch with protein.',
        'body' => "Ingredients:\n- Steamed cod\n- Cucumber\n- Lettuce leaves\nSteps:\n1. Steam cod 10 min.\n2. Slice cucumber.\n3. Wrap in lettuce leaves."
    ],
    [
        'name' => 'Roasted Chicken & Quinoa Bowl',
        'short_description' => 'Balanced, easy-to-digest dinner.',
        'body' => "Ingredients:\n- Roasted chicken\n- Quinoa\n- Zucchini\nSteps:\n1. Roast chicken.\n2. Cook quinoa.\n3. Serve together."
    ],
    [
        'name' => 'Baked Tilapia & Zucchini Bowl',
        'short_description' => 'Light, gut-friendly meal.',
        'body' => "Ingredients:\n- Baked tilapia\n- Zucchini\nSteps:\n1. Bake tilapia 12 min.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Quinoa & Steamed Chicken Wrap',
        'short_description' => 'Protein and grains in a wrap.',
        'body' => "Ingredients:\n- Quinoa\n- Steamed chicken\n- Lettuce leaves\nSteps:\n1. Cook quinoa.\n2. Steam chicken 10 min.\n3. Wrap in lettuce leaves."
    ],
    [
        'name' => 'Steamed Tilapia & Carrot Bowl',
        'short_description' => 'Simple, gut-friendly dinner.',
        'body' => "Ingredients:\n- Tilapia fillet\n- Carrots\nSteps:\n1. Steam tilapia 10 min.\n2. Steam carrots.\n3. Serve warm."
    ],
    [
        'name' => 'Roasted Turkey & Zucchini Bowl',
        'short_description' => 'Protein-rich, balanced meal.',
        'body' => "Ingredients:\n- Roasted turkey\n- Zucchini\nSteps:\n1. Roast turkey.\n2. Sauté zucchini lightly.\n3. Serve warm."
    ],
    [
        'name' => 'Baked Salmon & Spinach Bowl',
        'short_description' => 'Light, gut-friendly dinner.',
        'body' => "Ingredients:\n- Salmon fillet\n- Spinach\nSteps:\n1. Bake salmon 12 min.\n2. Sauté spinach lightly.\n3. Serve warm."
    ],
];



var_dump($recipesData);

        foreach ($recipesData as $typeName => $recipes) {
            $type = SiboType::where('name', $typeName)->first();
            if (!$type) continue;

            foreach ($recipes as $recipe) {
                Recipe::create([
                    'sibo_type_id' => $type->id,
                    'name' => $recipe['name'],
                    'short_description' => $recipe['short_description'],
                    'body' => $recipe['body'],
                ]);
            }
        }
    }
}















































