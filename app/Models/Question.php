<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function tests()
    {
        return $this->belongsToMany(Test::class);
    }

    public function types()
    {
        return $this->belongsToMany(QuestionType::class);
    }
}
