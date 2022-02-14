<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionType;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Test::factory(9)->has(Question::factory()->hasTypes(1)->count(1))->create();
        // QuestionType::factory(10)->create();
        // Question::factory(1)->hasTests(1)->hasTypes(1)->create();
        User::factory(1)->hasTests(1)->hasCourses(1)->hasSettings(1)->create();
    }
}
