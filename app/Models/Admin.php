<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    protected $guard='admin';
    protected $fillable=[
        'name','email','password'
    ];
    protected $hidden=[
        'password','remenber_token'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
}
