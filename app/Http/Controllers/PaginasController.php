<?php

namespace BetterLife\Http\Controllers;

use Illuminate\Http\Request;
use BetterLife\Cause;
use BetterLife\Event;

class PaginasController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware(['auth','verified']);
    // }

    function index(){
        $causes = Cause::all();
        foreach ($causes as $cause) {
            $pct = ($cause->current_money * 100)/$cause->goal;
            $cause->pct = round($pct);
          }
        $events = Event::all();
        return view('index', compact('events', 'causes'));
    }
    function about(){
        return view('pages.about');
    }
    function causes(){
        $causes = Cause::all();
        foreach ($causes as $cause) {
            $pct = ($cause->current_money * 100)/$cause->goal;
            $cause->pct = round($pct);
          }
        return view('pages.causes', compact('causes'));
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
        return view('admin.event.event');
    }
    function entrar(){
        return view('login.login');
    }
    function panels(){
      return view('admin.panels');
    }
}
