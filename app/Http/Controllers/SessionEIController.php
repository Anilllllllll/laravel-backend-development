<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionEIController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required'
        ]);

        $request->session()->put('name', $request->input('user'));
        return redirect('/form');
    }
 
    public function logout(Request $request)
    {
        $request->session()->forget('name');
        return redirect('/loginform');
    }
}
