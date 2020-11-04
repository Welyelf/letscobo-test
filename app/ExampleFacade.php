<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/4/2020
 * Time: 9:01 PM
 */

namespace App;

use Illuminate\Support\Facades\Facade;


class ExampleFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
       return 'example';
    }
}