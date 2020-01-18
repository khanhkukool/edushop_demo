<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class InfoTechnologyController extends Controller
{
    public function index(){
        $infoTechnologies = Products::where('category_id','=',2)->paginate(20);

        return view('/categories/infoTechnology',[
            'infoTechnologies' => $infoTechnologies
        ]);
    }
}
