<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_tag extends Model
{
    use HasFactory;

    protected $fillable=[
        'post_id',
        'tag_id',        
    ];
    public function post()
    {
        return $this->hasONe(Post::class, 'id', 'post_id');
    }
    public function tag()
    {
        return $this->hasOne(Tag::class, 'id', 'tag_id');
    }
    public function post_tags(){
        return $this->hasMany(Post_tag::class);
    }
}
