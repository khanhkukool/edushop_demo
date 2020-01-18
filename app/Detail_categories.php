<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_categories extends Model
{
    protected $table="detail_categories";

    public function category(){
        return $this->hasOne('App\Categories','category_id','id');
    }
}
