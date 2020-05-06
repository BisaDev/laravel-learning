@extends('layout')

@section('content')
    <section>
        <h1>Let's create a quiz</h1>
        <form method="POST" action="/quiz" class="create">
            @csrf
            <label for="quizQuestion">Type your questions</label>
            <input type="text" name="quizQuestion">
            <button type="Submit">Submit</button>

        </form>

    </section>
@endsection
