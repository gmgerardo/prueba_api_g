<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tag extends Model
{
    use HasFactory;
    
    protected $fillable=[        
        'name', 
    ];

    // Relacion de muchoa a muchos

    public function posts(){
        return $this->belongsToMany(Post::class, 'posts_tags');
    }
}
