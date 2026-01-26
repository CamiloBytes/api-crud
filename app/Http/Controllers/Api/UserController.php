<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // muestra la lista de usuarios
    public function index()
    {
        return "obteniendo lista de usuarios desde el controlador.";
    }
}

