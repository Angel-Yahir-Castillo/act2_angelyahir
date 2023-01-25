<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('registrar');
    }

    public function login(){
        return view('login');
    }

    public function sesion(){
        return view('usuario');
    }


    public function validar_register(Request $request){

        $user = new User();
        $user->name = $request->nombre;
        $user->email = $request->correo;
        $user->password = Hash::make($request->contrasena);

        $user->save();

        Auth::login($user);

        return redirect(route('user.sesion'));
    }

    
    public function inicia_sesion(Request $request){

        $credentials = [
            "email" => $request->correo,
            "password" => $request->contrasena
        ];

        $remember  = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)){

            $request->session()->regenerate();

            return redirect(route('user.sesion'));
        }
        else{
            return redirect(route('user.login'));
        }

    }

    
    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }
}
