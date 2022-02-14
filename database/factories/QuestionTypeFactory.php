<?php

namespace Database\Factories;

use App\Models\QuestionType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuestionType>
 */
class QuestionTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    protected $model = QuestionType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
