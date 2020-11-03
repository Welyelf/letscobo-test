<?php

namespace App;


class Example
{
    protected $foo;
    protected $collabolator;

    public function go(){
        dump('it works');
    }

    public function __construct(Colabolator $collabolator, $foo)
    {
        $this->collabolator = $collabolator;
        $this->foo = $foo;
    }

//    public function __construct($foo)
//    {
//        $this->foo = $foo;
//    }

}