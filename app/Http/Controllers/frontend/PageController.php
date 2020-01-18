<?php

namespace App\Http\Controllers\frontend;

use App\Banners;
use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $banners = Banners::all();
//        $products = Products::orderBy('updated_at','DESC')->paginate(8);
        $top_products = Products::orderBy('count_bills','DESC')->paginate(8);
        $sale_products = Products::where('old_price','>',0)->paginate(8);
        return view('index/index',[
            'banners'=>$banners,
            'top_products' => $top_products,
            'sale_products' => $sale_products
        ]);
    }
}

/*
DB::table('videos')
    ->join('products', 'videos.product_id', '=', 'products.id')
    ->count('videos.id');
*/

/*
 * select * from products -> join(bills, products.id, '=', bills.product_id) -> count('bills.id')
 */
