<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//Peticiones al servidor 

class InicioController extends Controller
{
    public function index(Request $peticion){
        $array = ['nombre' => $peticion->query('nombre', 'Nombre')]; // /vista1/?nombre={query}
        return view('vista1')->with($array);
    }
}
