<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeniorCtznController extends Controller
{
    public function create(){
        return view('Senior.applicationform')->with('title', 'Application');
    }
}
