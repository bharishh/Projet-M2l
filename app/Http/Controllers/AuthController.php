<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            // Créer un log de connexion
            \DB::table('logs')->insert([
                'collaborateur_id' => Auth::user()->id,
                'action' => 'login',
                'created_at' => now(),
            ]);

            return redirect()->intended(route('home.acceuil'));
        }

        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrecte',
        ])->onlyInput('email');
    }

    public function Logout(Request $request)
    {
        // Créer un log de déconnexion avant de déconnecter
        \DB::table('logs')->insert([
            'collaborateur_id' => Auth::user()->id,
            'action' => 'logout',
            'created_at' => now(),
        ]);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.doLogin');
    }

}
