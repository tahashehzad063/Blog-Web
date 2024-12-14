<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commant extends Model
{
    use HasFactory;
    public function pos()
    {
        return $this->belongsTo(Post::class);
    }
    public function reply(){
        return $this->hasMany(Reply::class);
    }
}
