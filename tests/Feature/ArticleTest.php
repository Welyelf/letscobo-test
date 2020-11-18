<?php

namespace Tests\Feature;

use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


use App\Article;
use App\User;
use Faker\Generator as Faker;

class ArticleTest extends TestCase
{
    use RefreshDatabase,WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function add_article()
    {
        //$user = factory(Article::class)->make();
        $user = factory(Article::class)->create([
            'title' => 'Abigail',
        ])->first();
        $this->assertEquals($user->title,'Abigail');
        // $this->assertEquals($user->title,$articles->first()->title);
        //$this->assertCount(1,$user);s
//        $user = factory(Article::class)->make([
//            'title' => 'Abigail',
//        ]);
//
//        factory(User::class)->make([
//            'email' => 'welyelfhisula@gmail.com',
//        ]);
//

    }

    /** @test */
    public function check_articles_page()
    {
        $article = factory(Article::class)->create()->first();
        $this->get('/articles')->assertSee($article->title);
        $this->assertDatabaseHas('articles', [
            'title' => $article->title,
        ]);
    }

    /** @test */
    public function a_dashboard_has_a_text()
    {
        $this->get('/')->assertSee("Laravel");
    }

    /** @test */
    public function a_user_can_add_articles()
    {
        $article = factory(Article::class,2)->create();
        $this->assertEquals(2,$article->count());
    }

    /** @test */
    public function user_can_remove_article()
    {
        $article = factory(Article::class,3)->create()->first();
        $article->delete(0);
        $this->assertEquals(2,$article->count());
    }

    /** @test */
    public function can_add_article_using_form(){
         $data = [
            'user_id' =>  factory(User::class),
            'title' => 'Sample 1',
            'excerpt' => 'Sample 1',
            'body' => 'Sample 1',
        ];

        $this->get('/articles/create')->assertSee('New Article');
        $this->post('/articles/create', $data)->assertSee('Sample 1');

//        $this->assertDatabaseHas('articles', [
//            'title' => $data['title'],
//        ]);

    }
}
