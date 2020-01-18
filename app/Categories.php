<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    public function product(){
        return $this->hasMany('App/Products','category_id','id');
    }
    public function detail_categories(){
        return $this->hasMany('App/Detail_categories','category_id','id');
    }
}
