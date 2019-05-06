<?php

namespace BetterLife\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use BetterLife\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;




class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware(['auth','verified']);
  }

  public function config()
  {
    return view('user.config');
  }

  public function register()
  {
    return view('user.create');
  }



      /**
       * Create a new user instance after a valid registration.
       *
       * @param  array  $data
       * @return \BetterLife\User
       */
      protected function create(Request $request)
      {

        $validate = $this->validate($request, [
          'username' => ['required', 'string', 'max:50','unique'],
          'name' => ['required', 'string', 'max:255'],
          'last_name' => ['string', 'max:100'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique'],
        ]);

        //datos del formulario
        $name = $request -> input('name');
        $last_name = $request -> input('last_name');
        $username = $request -> input('username');
        $email = $request -> input('email');
        $password = $request -> input('password');

         User::create([
            'role'=>'admin',
            'username' => $username,
            'last_name' => $last_name,
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        return redirect()->route('register.user')
                          ->with(['message'=>'Usuario registrado correctamente']);
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
    $last_name = $request -> input('last_name');
    $username = $request -> input('username');
    $email = $request -> input('email');

    //datos a Actualizar
    $user->name = $name;
    $user->last_name = $last_name;
    $user->username = $username;
    $user->email = $email;

    //subir imagen de Usuario
    $image_path = $request->file('image_path');
    if($image_path){

      $image_path_name = time().$image_path->getClientOriginalName();

      Storage::disk('users')->put($image_path_name, File::get($image_path));
      $user->image = $image_path_name;
    }

    //ejecucion de consulta a la DB
    $user->update();
    return redirect()->route('config')
                      ->with(['message'=>'Informacion actualizada correctamente']);
  }

  public function getImage($filename){
    $file = Storage::disk('users')->get($filename);
    return new Response($file, 200);
  }

}
