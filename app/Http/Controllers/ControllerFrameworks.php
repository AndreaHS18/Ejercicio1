<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFrameworks extends Controller
{
    public function bootstrap()
    {
        return view('bootstrap');
    }
    
    public function foundation()
    {
        return view('foundation');
    }
    
    public function materialize()
    {
        return view('materialize');
    }

}
