<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Pest\Laravel\call;

/**
 * @extends Factory<Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'book_id' => Book::factory(),
            'is_done' => false,
        ];
    }
}
