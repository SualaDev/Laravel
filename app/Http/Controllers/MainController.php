<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index() {
        $x = 7/0;
        return view('welcome');
    }
}
