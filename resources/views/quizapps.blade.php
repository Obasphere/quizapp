@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <hr>

                    

                </div>
            </div>
        </div>
    </div>
</div>


<hr>
    
    @foreach($quizapps as $question)
        {{ $question->text }}
        @foreach($question->options($question->id) as $option)
            <input type="radio" name="option" id="option" value="{{ $option->id }}" >{{ $option->text }}
        @endforeach
        <hr>
    @endforeach

@stop