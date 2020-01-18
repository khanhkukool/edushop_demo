<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = "videos";

    public function user(){
        return $this->belongsTo('App\Users','user_id','id');
    }

    public function product(){
        return $this->belongsTo('App\Products','product_id','id');
    }

}///
