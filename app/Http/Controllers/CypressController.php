<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CypressController extends Controller
{
    public function index() {
        return view('cypress.list');
    }
}
