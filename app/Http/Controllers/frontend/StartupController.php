<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class StartupController extends Controller
{
    public function index(){
        $startups = Products::where('category_id','=',3)->paginate(20);

        return view('/categories/startup',[
            'startups' => $startups
        ]);
    }
}
