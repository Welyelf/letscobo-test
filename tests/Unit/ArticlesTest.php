<?php

namespace Tests\Unit;

use App\Article;

use PHPUnit\Framework\TestCase;

class ArticlesTest extends TestCase
{

    //protected $articles;

//    public function setUp(): void
//    {
//        $this->articles = new Articles('Sample');
//    }

    /** @test */
    public function example()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function get_all_articles()
    {
       // $this->assertEquals('Sample', $this->articles->title());
        $this->assertTrue(true);
    }

    public function testDatabase()
    {
        // Make call to application...

        $this->assertDa('users', [
            'email' => 'sally@example.com',
        ]);
    }

    /** @test */
    public function add_article()
    {
        //factory(Article::class,2)->create();
        factory(Article::class)->create();
        $title = factory(Article::class)->create();

        $articles = Article::all();

        $this->assertEquals($title->title,$articles->first());
    }
}
