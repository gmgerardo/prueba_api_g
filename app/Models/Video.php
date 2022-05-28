<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable=[        
        'name', 
        'url', 
    ];
    public function Video(){
        return $this->belongsToMany(Video::class, 'Video');
    }
}
