<?php

namespace BetterLife\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware(['auth','verified']);
    // }

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
    // function dashboard(){
    //     return view('admin.dash');
    // }
    function user(){
        return view('admin.user');
    }
    function team(){
        return view('admin.team');
    }
    function tables(){
        return view('admin.tables');
    }
    function notification(){
        return view('admin.notification');
    }
    function event(){
        return view('admin.event');
    }
    function entrar(){
        return view('login.login');
    }
    function panels(){
      return view('admin.panels');
    }
}
