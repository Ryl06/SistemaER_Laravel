<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_AplicarEncuesta extends Controller
{
    public function Index(){
        return view('AplicarEncuesta');
    }
}
