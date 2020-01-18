<?php

namespace App\Http\Controllers\backend;

use App\Detail_categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;

class DetailCategoryController extends Controller
{
    public function index(){
        $detail_categories = Detail_categories::paginate(10);
        return view('/backend/detail_categories/index',[
            'detail_categories' => $detail_categories
        ]);
    }

    public function create(){
        $categories = Categories::all();
        return view('backend/detail_categories/create',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request){
        $rule = [
            'name' => 'required'
        ];

        $message = [
            'name.required' => "Name không được để trống"
        ];

        $request->validate($rule,$message);

        $detail_category_model = new Detail_categories();
        $detail_category_model->name =$request->get('name');
        $detail_category_model->category_id=$request->get('category');

        $detail_category_model->save();

        return redirect('/backend/detail_categories/index');
    }

    public function delete($id){
        $detail_category = Detail_categories::findOrFail($id);
        $detail_category->delete();

        return redirect('/backend/detail_categories/index');
    }
}
