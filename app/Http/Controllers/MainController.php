<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function delivery()
    {
        return view('delivery');
    }
    
    public function contacts()
    {
        return view('contacts');
    }
    
    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function index()
    {
        return view('layouts.app');
    }
}
