<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class TagsTest extends TestCase
{
  public function test_a_relacion_has_many_Tags()
    {
        $tag = new Tag;
        $this->assertInstanceOf(Collection::class, $tag->Tags);
    }
}
