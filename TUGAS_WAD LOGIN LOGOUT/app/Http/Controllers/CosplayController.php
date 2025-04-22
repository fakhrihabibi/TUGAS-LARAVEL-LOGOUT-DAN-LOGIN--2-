<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cosplay;

class CosplayController extends Controller

{
    public function index() {
        $cosplays = \App\Models\Cosplay::all(); 
        return view('cosplay.index', compact('cosplays'));
    }

    
}
