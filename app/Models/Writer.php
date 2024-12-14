<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Writer extends Authenticatable
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    use Notifiable;

    protected $guard='writer';
    protected $fillable=[
        'name','email','password'
    ];
    protected $hidden=[
        'password','remenber_token'
    ];
}
