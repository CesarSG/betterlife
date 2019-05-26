<?php

namespace BetterLife\Http\Controllers;

use Illuminate\Http\Request;
use BetterLife\Cause;
use BetterLife\Event;
use BetterLife\User;
use BetterLife\Donation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $causes = Cause::all();
        foreach ($causes as $cause) {
            $pct = ($cause->current_money * 100)/$cause->goal;
            $cause->pct = round($pct);
          }
        $events = Event::all();
        $users = User::all();
        $donations = Donation::all();
        //return view('admin.dashUser', compact('causes'));
        return view('admin.dash', compact('causes','events','users','donations'));
    }
}
