<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionTest;
use App\Models\Test;
use App\Models\TestQuestion;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index()
   {
       $tests = Test::all();
       return view('task5.index', compact("tests"));
   }

   public function show($id)
   {
       $test = Test::where('id', $id) ->first();
     
    
       return view('task5.show', compact('test'));
   }

   public function types($testId,$questionId)
   {
      
    
       $question = Question::where('id', $questionId) ->first();
       
    
       return view('task5.type', compact('question'));
   }
}
