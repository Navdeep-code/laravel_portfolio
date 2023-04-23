<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyProject>
 */
class MyProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'url' => $this->faker->url,
            'date'=> $this->faker->dateTimeThisDecade,
            'user_id' => User::all()->random(),
            'type_id' => Type::all()->random(),
        ];
    }
}
