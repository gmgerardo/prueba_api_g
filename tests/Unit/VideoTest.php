<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\Video;
use Illuminate\Database\Eloquent\Collection;

class VideoTest extends TestCase
{
    public function test_a_relacion_has_many_Video()
    {
        $vi= new Video;
        $this->assertInstanceOf(Collection::class, $vi->Video);
    }
}
