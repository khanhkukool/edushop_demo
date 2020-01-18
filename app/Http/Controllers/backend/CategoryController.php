<?php

namespace App\Http\Controllers\backend;

use App\Categories;
use App\Detail_categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Categories::paginate(10);
        return view('/backend/categories/index',[
            'categories' => $categories
        ]);
    }

    public function create(){
        $categories = Categories::all();
        return view('backend/categories/create',[
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

        $category_model = new Categories();
        $category_model->name =$request->get('name');
        $category_model->status = $request->get('status');

        $category_model->save();

        return redirect('/backend/categories/index');
    }

    public function delete($id){
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect('/backend/categories/index');
    }

    /**
     * Phuowng thuwcs xử lý ajax
     * @param Request $request
     */
    public function getDetailCategory(Request $request) {
//        truy vấn lấy tất cả detail category dựa theo id category bắt được từ ajax
        $category_id = $request->get('category_id');

        $detail_categories = Detail_categories::where('category_id', $category_id)->get();

        //khi return view thế này, sẽ trả về hàm success của nơi gọi ajax
        return view('/backend/categories/detail-category', [
            'detail_categories' => $detail_categories
        ]);
//        print_r($view_ajax);
    }
}
