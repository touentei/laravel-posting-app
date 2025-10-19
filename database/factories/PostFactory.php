<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 18, // 固定値
            'title' => fake()->realText(20,5), // ランダムタイトル
            'content' => fake()->realText(100,5), // ランダムコンテンツ
        ];
    }
}
