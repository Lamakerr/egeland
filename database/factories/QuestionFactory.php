<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\QuestionType;
use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Question::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'content' => $this->faker->text().'?',
        //     'test_id' => function() {
        //         return Test::orderBy(DB::raw('RAND()'))->first()->id;   
        //     },
        //     'question_type_id' => function() {
        //         return QuestionType::orderBy(DB::raw('RAND()'))->first()->id;   
        //     }
        ];
    }
}
