<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CypressController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cypress-list',[CypressController::class,'index'])->name('cypress_list');
