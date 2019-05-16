<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function audits()
    {
        return $this->hasMany('App\Audit');
    }
}
