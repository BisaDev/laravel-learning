<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Quiz.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Quiz.create');
    }


    public function store(Request $request)
    {
        $question = $request->quizQuestion;
        $quiz = new Quiz;

        $quiz->title = 'Awesome question!';
        $quiz->question_1 = $question;
        $quiz->save();


        return $question;
    }


    public function show($id , Quiz $quizData)
    {
        $quizData = Quiz::find($id);

        return view('Quiz.show', compact('quizData') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
