<?php

namespace QuizApp\Http\Controllers;

use Illuminate\Http\Request;
use QuizApp\Question;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    //public function index()
    //{
    //    return view('home');
    //}

    public function index()
    {
        $quizapps = Question::all();
        $data = [
            'quizapps' => $quizapps
        ];

        return view('quizapps', $data);
    }

   

}

