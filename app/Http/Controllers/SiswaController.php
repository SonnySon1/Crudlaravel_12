<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //index view
    public function index() {
        return view('index');
    }
}
