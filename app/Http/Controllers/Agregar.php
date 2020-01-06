<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Agregar extends Controller
{
    public function agregar_cliente() {
    return view('agregar.cliente');
    }
}
