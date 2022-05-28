<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\Post_tag;
use Illuminate\Database\Eloquent\Collection;

class RelacionTest extends TestCase
{
  public function test_a_relacion_has_many_post_tags()
    {
       $relacion = new Post_tag;

        $this->assertInstanceOf(Collection::class, $relacion->post_tags);

    }
}
