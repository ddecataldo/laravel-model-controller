<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use App\Movie;



class MovieController extends Controller
{
    function index(){
        return view("home.index");
    }

    function readAll(){
        return Movie::all();
    }
}
