<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'category'=>$this->faker->word(),
            'title'=>$this->faker->sentence(8),
            'article_text'=>$this->faker->text(2000),
            'author'=>$this->faker->name(),
            'image'=>$this->faker->image(public_path('images'),400,400,'nature',false),
            'reaction'=>$this->faker->randomNumber()
        ];
    }
}
