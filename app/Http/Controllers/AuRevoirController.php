<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuRevoirController extends Controller
{
    public function index() {
        
        return view('auRevoir');
    }
}
