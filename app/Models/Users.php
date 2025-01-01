<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $table = 'autentikasi';

    protected $fillable = [
        'group_code',
        'username',
        'email',
        'password',
        'user_type',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

