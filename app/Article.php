<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function scopeTrending($query)
    {

    }

    public function add($user)
    {
        //$user_obj = new  User();
       //$user_obj->articles()->save($user);
        $this->articles()->save($user);
    }

    public function articles()
    {
        $user_obj = new  User();
        return $user_obj->hasMany($this);
    }
}
