<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    protected $table = "products";

    public function bill(){
        return $this->hasMany('App\Bills','product_id','id');
    }

    public function category(){
        return $this->belongsTo('App\Categories','category_id','id');
    }

    public function user(){
        return $this->belongsTo('App\Users','user_id','id');
    }

    public function video(){
        return $this->hasMany('App\Videos','product_id','id');
    }

    public function getAllPagination() {
        //sử dụng phương thức with để gọi relation e đã khai báo là video() nhé
        $products = Products::with('video')->paginate(10);
        return $products;
    }

}
