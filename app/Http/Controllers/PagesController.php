<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function list(){
        return view('tables');
    }

    public function map(){
        return view('map');
    }

    public function new(){
        return view('new');
    }
        
    
}
