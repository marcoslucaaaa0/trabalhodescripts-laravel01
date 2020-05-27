<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logar(Request $request){
        $request->validate([
            'email'=> 'required',
            'senha'=> 'required',
        ]);

        if($request->email == "huehue@gmail.com" && $request->senha == "123456")
            return redirect()->route('comprar')->with('message', 'ok');

        else
             return redirect() -> back() -> with('erro', 'login ou  senha incorretos!');

    }


}
