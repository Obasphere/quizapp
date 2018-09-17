<?php

namespace QuizApp;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table="questions";

    public function options($questionId)
    {
        $options = Option::where('question_id', $questionId)->orderByRaw('id')->get();
        return $options;
    }
}
