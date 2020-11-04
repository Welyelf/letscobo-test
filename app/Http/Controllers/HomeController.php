<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    //public function facade_test(Filesystem $file){
    public function facade_test(){

        //cache facade
        //Cache::remember('foo',60, fn()=>'foobar');
        //return Cache::get('foo');

        // same out
        return File::get(public_path('index.php'));
       // return $file->get(public_path('index.php'));




    }
}
