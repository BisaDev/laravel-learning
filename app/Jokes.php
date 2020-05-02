<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jokes extends Model
{
    public function dude () {
        $this->Joke = 'dude';
        $this->save();
    }
}
