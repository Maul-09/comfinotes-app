<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Authentikasi extends Authenticatable
{
    protected $table = 'authentikasi';

    protected $fillable = [
        'name', 'email', 'grup_number', 'password', 'user_type',
    ];

    protected $hidden = [
        'password',
    ];
}
