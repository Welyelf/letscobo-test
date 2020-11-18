<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Tags;
use App\Articles;

class TagsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function tag_consists_of_article()
    {
        $tag = new Tags();

        $article1 = new Articles('Sample 1', 3);
        $article2 = new Articles('Sample 2', 3);

        $tag->add($article1);
        $tag->add($article2);

        $this->assertEquals(2,count($tag->articles_count()));
        $this->assertCount(2,$tag->articles_count());
    }

    /** @test */
    public function get_total_tags(){

    }
}
