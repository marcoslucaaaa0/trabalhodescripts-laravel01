<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenisCorridaController extends Controller
{
    public function corrida(){
        return view('tenisdecorrida');
    }
}
