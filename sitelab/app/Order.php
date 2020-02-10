<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Order extends Model
{
    public function user(){
        return $this->belongsTo('App\User');

    }
}
