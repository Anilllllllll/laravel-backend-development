<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormEiController extends Controller
{
    public function index()
    {
        return view('FormEI');
    }

    public function showform(Request $request)
    {
     $request->validate([
    'name' => 'required|alpha|min:3',
    'email' => 'required|email',
    'phone' => 'required|numeric'
]);

    
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        return "The name is: " . ($name ?? "missing data") . 
               " | The email is: " .( $email ?? "missing data") .
               " | The phone is: " . ($phone ?? "missing data");
    }
}
