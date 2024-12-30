<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Users extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $table = 'autentikasi';
    protected $fillable = ['group_code', 'username', 'email', 'password', 'user_type'];
    protected $hidden = ['password'];
}
