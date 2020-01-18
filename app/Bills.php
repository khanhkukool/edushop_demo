<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    protected $table ="bills";

    public function user(){
        return $this->belongsTo('App\Users','user_id','id');
    }

    public function product(){
        return $this->hasMany('App\Products','product_id','id');
    }


}
