<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                "password" => 'confirmed'
            ],
            [
                'password' => 'Šifre se ne poklapaju!'
            ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();
        auth()->login($user);

        return redirect(route('home'));
    }
    
    public function logout(Request $request)
    {
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect(route('home'));
    }

    public function login()
    {
        return view('users.login');
    }

    public function autentifikacija(Request $request)
    {
        $podaci = 
        [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (auth()->attempt($podaci)) 
        {
            $request->session()->regenerate();
            return redirect(route('home'));
        }
       
       return back()->withErrors(['autentifikacija' => "Ne postoji korisnik ili nije dobra sifra"]);
    }
}
