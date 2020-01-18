<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class MultiController extends Controller
{
    public function index(){
        $multis = Products::where('category_id','=',4)->paginate(20);

        return view('/categories/multi',[
            'multis' => $multis
        ]);
    }
}
