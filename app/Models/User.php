<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;

    // usa la tabla 'user_table' en la base de datos
    protected $table = 'user_table';

    // define los campos que se pueden asignar masivamente
    protected $fillable = [
        'name',
        'email',
        'description',
        'age',
        'address',
        'phone',
    ];
}
