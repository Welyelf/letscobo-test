<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    /**
     * @return array
     */
    public  function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
