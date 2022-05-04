<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class AllMovies extends Controller
{
    public function list() {
        $myMovies = Movie::all();
        dd($myMovies);
        return view('movies');
    }
}
