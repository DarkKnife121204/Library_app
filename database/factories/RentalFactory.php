<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'book_id' => Book::inRandomOrder()->first()->id,
            'rented_at' => fake()->dateTimeInInterval('-5 days'),
            'due_date' => fake()->dateTimeInInterval('+10 days'),
        ];
    }
}
