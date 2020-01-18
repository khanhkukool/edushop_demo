<?php

namespace App\Http\Controllers\backend;

use App\Detail_categories;
use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Categories;
use App\Users;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
//        $products = Products::paginate(10);
        $product_model = new Products();
        $products = $product_model->getAllPagination();
        //viết 1 phương thức riêng để thực hiện join bảng
        return view('/backend/products/index',[
            'products' => $products
        ]);
    }

    public function create(){
        $categories = Categories::all();
        $detail_categories = Detail_categories::where('id','=',$categories->get('id'))->get();
        $users = User::all();
        return view('backend/products/create',[
            'categories' => $categories,
            'detail_categories' => $detail_categories,
            'users' => $users
        ]);
    }

    public function store(Request $request){
        //nó vẫn chạy được vào đậy, chứng tỏ đã submit được form
//        print_r("a");die;
        $rule = [
            'title' => 'required'
        ];

        $message = [
            'title.required' => "Title không được để trống"
        ];

        $request->validate($rule,$message);

        $file_name = '';
        if(!empty($request->avatar)){
            $avatar = $request->avatar;
            $file_name = 'product-' . time() . '-' .$avatar->getClientOriginalName();

            $dir_uploads = public_path() . '/uploads';
            $avatar->move($dir_uploads,$file_name);
        }
        $avatar = $file_name;

        $product_model = new Products();
        $product_model->category_id = $request->get('category');
        $product_model->detail_category_id = $request->get('detail_category');
        $product_model->user_id = $request->get('user');
        $product_model->title = $request->get('title');
        $product_model->avatar = $avatar;

        //theo logic này thì count_video tự nó update được khi e thêm sản phẩm mới r mà nhỉ

//        $product_model->count_videos = DB::table('videos')
//            ->join('products', 'videos.product_id', '=', $id)
//            ->count('videos.id');
//        echo "<pre>";
//        print_r($product_model->count_videos);
//        echo "</pre>";
//        die();
//        $product_model->count_bills = DB::table('bills')
//            ->join('products', 'bills.product_id', '=', 'products.id')
//            ->count('bills.id');
        $product_model->price = $request->get('price');
        $product_model->old_price = $request->get('old_price');
        $product_model->summary = $request->get('summary');
        $product_model->content = $request->get('content');
        $product_model->status = $request->get('status');
        $product_model->save();

//        $id = DB::getPdo()->lastInsertId()+1;
//        echo "<pre>";
//        print_r($id);
//        echo "</pre>";
//        die();

        return redirect('/backend/products/index');

    }

    public function delete($id){
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect('/backend/products/index');
    }

}
