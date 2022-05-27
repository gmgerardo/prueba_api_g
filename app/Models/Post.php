<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[        
        'name', 
    ];
       // Relacion de muchoa a muchos

     // Relacion de muchoa a muchos

     public function tags(){
        return $this->belongsToMany(Tag::class, 'posts_tags');
    }
}

