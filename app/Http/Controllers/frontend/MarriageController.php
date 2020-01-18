<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class MarriageController extends Controller
{
    public function index(){
        $marriages = Products::where('category_id','=',12)->paginate(20);

        return view('/categories/marriage',[
            'marriages' => $marriages
        ]);
    }
}
