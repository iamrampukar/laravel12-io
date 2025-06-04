<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $loadData = 'Namaste';
        return view('home',compact('loadData'));
    }
}
