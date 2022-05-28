<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_tag extends Model
{
    use HasFactory;
    protected $fillable=[
        'tag_id',
        'video_id',                
    ];
    public function tag()
    {
        return $this->hasOne(Tag::class, 'id', 'tag_id');
    }
    public function video()
    {
        return $this->hasONe(Video::class, 'id', 'video_id');
    }
    
    public function Video_tags(){
        return $this->hasMany(Video_tag::class);
    }
}
