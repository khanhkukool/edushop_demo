<?php

namespace App\Http\Controllers\backend;

use App\Bills;
use App\Http\Controllers\Controller;
use App\Products;
use App\Users;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(){
        $bills = Bills::paginate(10);
        return view('/backend/bills/index',[
            'bills' => $bills
        ]);
    }

    public function create(){
        $users = Users::all();
        $products = Products::all();
        return view('backend/bills/create',[
            'users' => $users,
            'products' => $products
        ]);
    }

    public function store(Request $request){
        $bill_model = new Bills();
        $total = Products::where('id','=',$request->get('product_id'))->pluck('price');
        $bill_model->user_id =$request->get('user_id');
        $bill_model->product_id =$request->get('product_id');
        $bill_model->total  = $total[0];

        $bill_model->save();
        $products = new Products();
        $products->count_videos = Products::where('products.id','=',$bill_model->product_id)
            ->increment('count_bills',1);
        return redirect('/backend/bills/index');
    }

    public function delete($id){
        $bill = Bills::findOrFail($id);
        $bill->delete();

        return redirect('/backend/bills/index');
    }
}
