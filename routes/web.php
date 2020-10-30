<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('welcome');
    //return ['foo' => 'bar'];
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::latest('id')->get()
    ]);
    //return ['foo' => 'bar'];
});

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');


// REST
// GET, POST, PUT, DELETE

Route::get('/contact', function () {
    return view('contact');
    //return ['foo' => 'bar'];
});

Route::get('test',function (){
    return view('test',[
        'name' => request('name')
    ]);
});

Route::get('/posts/{post}',function ($post){
    $posts = [
        'one' => 'I am number 1',
        'two' => 'I am number 2',
    ];

    if(!array_key_exists($post,$posts)){
        abort(404,'Sorry, that post was not found');
    }

    return view('test',[
        'post' => $posts[$post]
    ]);
    //return view('test');
});

Route::get('/post/{post}', 'PostsController@show');