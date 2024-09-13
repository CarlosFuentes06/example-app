<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\registroCtrl;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario-registro',[registroCtrl::class,'mostrarDatos']);