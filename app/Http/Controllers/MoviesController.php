<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MoviesController extends Controller
{
    public function index() {
        $myMovies = Movie::all();
        $data = [
            'movies' => $myMovies
        ];
        return view('movies', $data);
    }
}
