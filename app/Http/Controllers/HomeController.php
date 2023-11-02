<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get_pantalla_inicial() {
        return view('index');
    }
}
