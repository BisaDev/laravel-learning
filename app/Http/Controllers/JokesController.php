<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JokesController extends Controller
{
    function index() {
        $jokes = ['Hello world this is Bisa'];

        return view('Jokes', compact('jokes'));
    }
}

