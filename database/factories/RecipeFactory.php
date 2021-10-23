<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->unique()->words($nb=4, $asText=true);
        return [
            'name'=>$name,
            'title'=>$this->faker->word(),
            'shortdescription'=>$this->faker->word(),
            'description'=>$this->faker->word(),
            'detaildescription'=>$this->faker->word(),
            'summary'=>$this->faker->word(),
            'ingredients'=>$this->faker->word(),
            'method'=>$this->faker->word(),
            'authorintro'=>$this->faker->word(),
            'img'=>$this->faker->unique()->numberBetween(1, 22).'.jpg',
        ];
    }
}
