<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index(){
        $designs = Products::where('category_id','=',8)->paginate(20);
        return view('/categories/design',[
            'designs' => $designs
        ]);
    }
}
