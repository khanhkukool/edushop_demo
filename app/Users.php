<?php

namespace App;

use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    public function product(){
        return $this->hasMany('App\Products','user_id','id');
    }

    public function bill(){
        return $this->hasMany('App\Bills','user_id','id');
    }

    public function getAllPagination() {
        //sử dụng phương thức with để gọi relation e đã khai báo là video() nhé
        $users = Users::with('product')->paginate(10);
        return $users;
    }
}
