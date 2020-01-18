<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index(Request $request, $title, $id){
        $title = Products::find($title);
        $product = Products::find($id);
        $products = Products::paginate(8);
        return view('products/detail',[
            'product' => $product,
            'products' => $products
        ]);
    }
}
