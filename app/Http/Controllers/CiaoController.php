<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CiaoController extends Controller
{
    public function index() {
        
        return view('ciao');
    }
}
