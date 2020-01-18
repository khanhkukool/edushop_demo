<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Users;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $user_model = new Users();
        $users = $user_model->getAllPagination();
        //viết 1 phương thức riêng để thực hiện join bảng
        return view('/backend/users/index',[
            'users' => $users
        ]);
    }

    public function create(){
        return view('backend/users/create');
    }

    public function store(Request $request){
        $file_name = '';
        if(!empty($request->avatar)){
            $avatar = $request->avatar;
            $file_name = 'user-' . time() . '-' .$avatar->getClientOriginalName();

            $dir_uploads = public_path() . '/uploads';
            $avatar->move($dir_uploads,$file_name);
        }
        $avatar = $file_name;

        $user_model = new Users();
        $user_model->username = $request->get('username');
        $user_model->password = md5($request->get('password'));
        $user_model->first_name = $request->get('first_name');
        $user_model->last_name = $request->get('last_name');
        $user_model->avatar = $avatar;
        $user_model->job = $request->get('job');
        $user_model->address = $request->get('address');
        $user_model->facebook = $request->get('facebook');
        $user_model->count_products = DB::table('products')
            ->join('users', 'products.user_id', '=', 'users.id')
            ->count('users.id');
        $user_model->status = $request->get('status');
        $user_model->save();

        return redirect('/backend/users/index');
    }

    public function delete($id){
        $user = Users::findOrFail($id);
        $user->delete();

        return redirect('/backend/users/index');
    }
}
