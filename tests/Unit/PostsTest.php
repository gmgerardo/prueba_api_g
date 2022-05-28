<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostsTest extends TestCase
{
    public function test_a_relacion_has_many_posts()
    {
       $pos = new Post;

        $this->assertInstanceOf(Collection::class, $pos->posts);

    }
}
