<?php

namespace BetterLife\Http\Controllers;

use BetterLife\Cause;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $name = $request->get('name');

      $causes = Cause::orderBy('id','ASC')
        ->name($name)
        ->paginate(7);

      foreach ($causes as $cause) {
        $pct = ($cause->current_money * 100)/$cause->goal;
        $cause->pct = $pct;
      }
      // dd($causes);
      return view('admin.cause.causeIndex', compact('causes','cause'));
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
        'goal' => ['required'],
      ]);

      $cause = new Cause();
      $cause->name = $request->input('name');
      $cause->description = $request->input('description');
      $cause->goal = $request->input('goal');
      $cause->status = true;
      $cause->current_money = 0;
      $cause->save();

      // almacena la imagen en el disco
      if($request->hasFile('image_path'))
      {
        $file=$request->file('image_path')
                      ->store('uploads','public');
        $cause->images()->create(['image_patch'=>$file]);
      }

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
        'goal' => ['required'],
      ]);

      $cause= Cause::findOrFail($id);
      $cause->name = $request->input('name');
      $cause->description = $request->input('description');
      $cause->goal = $request->input('goal');
      $cause->status = true;
      $cause->current_money = $request->input('current_money');
      $cause->update();

      // //subir imagen de Usuario
      if($request->hasFile('image_path')){

        if($cause->images->image_patch){
          Storage::delete('public/'.$cause->images->image_patch);
        }
        $file=$request->file('image_path')->store('uploads','public');
        $cause->images()->update(['image_patch'=>$file]);
      }

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
    // public function destroy($id){
    //   $cause = Cause::findOrFail($id);
    //   dd($cause);
    // }
}
