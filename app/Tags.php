<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/17/2020
 * Time: 12:57 PM
 */

namespace App;


class Tags
{
    protected $name= [];
    protected $tags_count;

    public function __construct()
    {

    }

    public function add(Articles $article)
    {
        $this->name[] = $article;
        //$this->tags_count = $tags_count;
    }

    public function articles_count()
    {
        return $this->name;
    }
}