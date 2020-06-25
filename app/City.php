<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $tbale= "cities";

    public function cityArea() {
        return $this->hasMany(Area::class, 'cid', 'id');
    }

}
