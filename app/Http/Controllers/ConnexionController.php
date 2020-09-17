<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('login');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        // À faire : vérification que l'email et le mot de passe sont corrects.
    
        var_dump(auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]));die;
        return true;
    }
}