<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login () {
        return view('auth.login');
    }

    public function authLogin (Request $request) {
        if ($request->email == 'a@a.com' && $request->password == '1234') {
            $nueva_cookie = cookie('userId', $request->email, 5);
            return view('home')->withCookie($nueva_cookie);
        } else {
            return view('home')->withErrors(['error' => 'Dades d\'accés incorrectes.']);
        }
    }

    public function password () {
        return view('auth.password');
    }

    public function authPassword (Request $request) {
        return view('home', ['password' => 'El email per restaurar la contrasenya ha sigut enviat a '.$request->email]);
    }

    public function register () {
        return view('auth.register');
    }

    public function authRegister (Request $request) {
        return view('home', ['register' => 'El usuari '.$request->email.' ha sigut creat correctament.']);
    }

    public function logout () {
        return view('home', ['logout' => 'El usuari ha seleccionat "Logout"']);
    }

}
