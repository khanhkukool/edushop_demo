<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index(){
        $arts = Products::where('category_id','=',7)->paginate(20);
        return view('/categories/art',[
            'arts' => $arts
        ]);
    }
}
