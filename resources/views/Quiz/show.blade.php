@extends('layout')

@section('content')
    <section>
        <h1>Welcome to quiz {{$quizData->id}}</h1>
        <p>{{$quizData->question_1}}</p>

    </section>
@endsection
