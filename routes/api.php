<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user',[UserController::class,'index']);


Route::get('/user/{id}', function ($id) {
    return "obteniendo usuario con ID {$id}";
});


Route::post('/user', function () {
    return "usuario creado exitosamente.";
});
Route::put('/user/{id}', function ($id) {
    return "usuario con ID {$id} actualizado exitosamente.";
});
