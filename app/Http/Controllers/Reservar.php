<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Reservar extends Controller
{
    public function reserve() {
        return view('reservar.agregar');
    }
}
