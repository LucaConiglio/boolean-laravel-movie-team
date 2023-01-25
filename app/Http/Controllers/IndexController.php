<?php

namespace App\Http\Controllers;


use App\Models\Movie;

class IndexController extends Controller
{
    function index(){

        //per dare il limite a 10
        //$allMovies = Movie::take(10)->get();
        $allMovies = Movie::latest()->take(10)->get();;

        return view('index', compact('allMovies'));
    }
}
