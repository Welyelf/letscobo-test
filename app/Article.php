<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','excerpt','body'];
//    public function getRouteKeyName()
//    {
//        //return 'title'; //
//    }

    public function path(){
        return route('articles.show',$this);
    }

    public function user(){

    }


}
