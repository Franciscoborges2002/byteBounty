<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'dificulty' => fake()->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'tech_stack' => fake()->randomElements(['react', 'php', 'laravel', 'vue', 'tailwindcss', 'javascript', 'nodejs', 'nextjs', 'python'], random_int(1, 5)),
            'created_by' => User::factory(),
        ];
    }
}
