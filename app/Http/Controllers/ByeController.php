<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ByeController extends Controller
{
    public function index() {
        
        return view('bye');
    }
}
