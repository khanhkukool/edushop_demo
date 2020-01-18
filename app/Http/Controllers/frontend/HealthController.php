<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index(){
        $healths = Products::where('category_id','=',9)->paginate(20);
        return view('/categories/health',[
            'healths' => $healths
        ]);
    }
}
