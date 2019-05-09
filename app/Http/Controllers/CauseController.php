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
      // $causes = Cause::all();

      $causes = Cause::paginate(5);
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

      $validate = $this->validate($request, [
        'name' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string', 'max:255'],
      ]);

      $cause = new Cause();
      $cause->name = $request->input('name');
      $cause->description = $request->input('description');
      $cause->goal = $request->input('goal');
      $cause->status = true;
      $cause->current_money = 0;
      $cause->save();

      return redirect()->route('causa.index')
                        ->with(['message'=>'Causa registrada correctamente']);
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
    public function edit($id)
    {
        //dd($cause);
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
    public function update(Request $request, $id)
    {
      $validate = $this->validate($request, [
        'name' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string', 'max:255'],
      ]);

      $cause= Cause::findOrFail($id);
      $cause->name = $request->input('name');
      $cause->description = $request->input('description');
      $cause->goal = $request->input('goal');
      $cause->status = true;
      $cause->current_money = 0;
      $cause->update();
      return redirect()->route('causa.index')
                        ->with(['message'=>'Informacion actualizada correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BetterLife\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cause = Cause::find($id);
      $cause->delete();
      // Cause::destroy($id);
        return redirect()->route('causa.index')
                        ->with(['message'=>'Registro eliminado correctamente']);
    }
}
