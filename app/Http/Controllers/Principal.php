<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Principal extends Controller
{
    public function index() {

        $reservas = App\Reservar::all();
        return view('home', compact('reservas'));
    }
}
