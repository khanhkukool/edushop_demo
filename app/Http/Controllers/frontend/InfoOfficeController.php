<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class InfoOfficeController extends Controller
{
    public function index(){
        $infoOffices = Products::where('category_id','=',10)->paginate(20);

        return view('/categories/infoOffice',[
            'infoOffices' => $infoOffices
        ]);
    }
}
