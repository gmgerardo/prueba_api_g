<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\Video_tag;
use Illuminate\Database\Eloquent\Collection;

class videorelacionTest extends TestCase
{
     public function test_a_relacion_has_many_video_tags()
    {
        $videorela = new Video_tag;
        $this->assertInstanceOf(Collection::class, $videorela->video_tags);
    }
}
