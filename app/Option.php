<?php

namespace QuizApp;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table="options";

    public function question()
    {
        return $this->hasOne('QuizApp\Question', 'question_id', 'id')->get();
    }
}
