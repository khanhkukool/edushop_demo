<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){
        $languages = Products::where('category_id','=',6)->paginate(20);

        return view('/categories/languages',[
            'languages' => $languages
        ]);
    }
}
