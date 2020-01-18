<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function index(){
        $marketings = Products::where('category_id','=',5)->paginate(20);

        return view('/categories/marketing',[
            'marketings' => $marketings
        ]);
    }
}
