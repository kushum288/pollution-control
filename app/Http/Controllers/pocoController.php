<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pocoController extends Controller
{
    public function backendDashboard() {
        return view('backend.dashboard');
    }
 
    public function frontendDashboard() {
        return view('frontend.dashboard');
    }

    
}
