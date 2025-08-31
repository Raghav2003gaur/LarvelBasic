<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetworkController;

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/networks',[NetworkController:: class,'index'])->name('networks.index') ;
 Route::get('/networks/create',[NetworkController::class,'create'] )->name('networks.create');
 Route::get('/networks/{id}',[NetworkController::class,'show'] )->name('networks.show');
 Route::post('/networks',[NetworkController::class,'store'])->name('networks.store');
