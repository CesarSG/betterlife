<?php

namespace BetterLife\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function config(){
      return view('user.config');
    }

  public function update(Request $request)
  {
    $user =\Auth::user();
    $id =$user->id;

    $validate = $this->validate($request, [
      'username' => ['required', 'string', 'max:50','unique:users,username,' . $id],
      'name' => ['required', 'string', 'max:255'],
      'last_name' => ['string', 'max:100'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
    ]);

    //datos del formulario
    $name = $request -> input('name');
    $apellido = $request -> input('last_name');
    $username = $request -> input('username');
    $email = $request -> input('email');

    //datos a Actualizar
    $user->name = $name;
    $user->last_name = $apellido;
    $user->username = $username;
    $user->email = $email;

    //ejecucion de consulta a la DB
    $user->update();
    return redirect()->route('config')
                      ->with(['message'=>'Informacion actualizada correctamente']);
  }
}
