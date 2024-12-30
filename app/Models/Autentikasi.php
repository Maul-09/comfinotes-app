<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Autentikasi extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'autentikasi';

    protected $fillable = [
        'group_code', 'username', 'email', 'password', 'user_type',
    ];

    protected $hidden = [
        'password',
    ];

}
