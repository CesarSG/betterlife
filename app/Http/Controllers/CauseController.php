<?php

namespace BetterLife\Http\Controllers;

use BetterLife\Cause;
use Illuminate\Http\Request;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $causes = Cause::all();
      return view('admin.cause.causeIndex', compact('causes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cause.causeForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request->all());

      $cause = new Cause();
      $cause->name = $request->input('name');
      $cause->description = $request->input('description');
      $cause->goal = $request->input('goal');
      $cause->status = true;
      $cause->current_money = 0;
      $cause->save();

      return redirect()->route('causa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \BetterLife\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function show(Cause $cause)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \BetterLife\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    // public function edit(Cause $cause)
    // {
    //     //dd($cause);
    //     $causes = Cause::findOrFail($cause);
    //     dd($cause);
    //     return view('admin.cause.causeForm', compact('causes'));
    // }

    public function edit($id){
      //dd($id);
      $cause = Cause::findOrFail($id);
      return view('admin.cause.causeForm', compact('cause'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \BetterLife\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cause $cause)
    {
      //dd($request->all());
      $cause->update($request->all());
      return redirect()->route('causa.index', $cause->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BetterLife\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cause $cause)
    {
      dd($cause);
      $cause->delete();
      return redirect()->route('causa.index');
    }
    // public function destroy($id){
    //   $cause = Cause::findOrFail($id);
    //   dd($cause);
    // }
}
