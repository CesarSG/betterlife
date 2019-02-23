<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    function index(){
        return view('index');
    }
    function about(){
        return view('pages.about');
    }
    function causes(){
        return view('pages.causes');
    }
    function gallery(){
        return view('pages.gallery');
    }
    function news(){
        return view('pages.news');
    }
    function contact(){
        return view('pages.contact');
    }
}
