<?php

namespace Database\Factories;
use App\Models\Comment;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'category_id'=> Category::factory(),
            'title' => $this->faker->sentence(),
            'excerpt'=>'<p>'.implode('</p><p>',$this->faker->paragraphs(2)).'</p>',
            'slug'=>$this->faker->slug(),
            'body'=>'<p>'.implode('</p><p>',$this->faker->paragraphs(6)).'</p>'
        ];
    }
}
