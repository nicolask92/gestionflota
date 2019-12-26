<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Principal extends Controller
{
    public function index() {
        return view('home');
    }
}
