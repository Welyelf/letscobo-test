<?php

namespace App;


class Articles
{
    protected $name= [];
    protected $tags_count;

    public function __construct($name,$tags_count)
    {
       $this->name[] = $name;
       $this->tags_count = $tags_count;
    }

    public function title()
    {
        return $this->name;
    }

    public function articles_count()
    {
        return $this->name;
    }
}