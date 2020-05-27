<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprarController extends Controller
{
    public function comprar(){
        if (Session('message'))
            return view('comprar');
        else
            return redirect()->route('login')->with('erro', 'é necessário fazer login antes!');
    }
}
