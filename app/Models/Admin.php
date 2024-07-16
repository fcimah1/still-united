<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use laravel\Sanctum\HasApiTokens;
class Admin extends  Authenticatable 
{
    use HasFactory;

    protected $guard = 'admin';
    protected $table = 'admins';

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password','remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        
        'password' => 'hashed',
    ];
    // protected $hidden = ['password'];
}
