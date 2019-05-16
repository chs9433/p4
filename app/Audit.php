<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    public function location()
 {
     return $this->belongsTo('App\Location');
 }
}
