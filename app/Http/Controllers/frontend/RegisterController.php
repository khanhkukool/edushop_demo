<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function create(Request $request){
        $rules = [
            'username' => ['required','unique:users,username'],
            'password' => ['required','min:6'],
            're_password' => 'same:password',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'unique:users,email',
            'address' => 'required',
        ];
        $messages = [
            'username.required' => 'Username không được để trống',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Password phải lớn hơn 6 ký tự',
            'first_name.required' => 'Firstname không được để trống',
            'last_name.required' => 'Lastname không được để trống',
            'email.unique' => 'Email đã được đăng ký',
            'username.unique' => 'Username đã được đăng ký',
        ];

        $request->validate($rules,$messages);

        $user_model = new Users();
        $user_model->username = $request->get('username');
        $user_model->password = md5($request->get('password'));
        $user_model->first_name = $request->get('first_name');
        $user_model->last_name = $request->get('last_name');
        $user_model->email = $request->get('email');
        $user_model->address = $request->get('address');
        $is_register = $user_model->save();

        if ($is_register) {
            //sử dụng session kiểu flash để hiển thị duy nhất 1 lần
            session()->flash('success', 'Đăng ký thành công');
        } else {
            session()->flash('error', 'Đăng ký thất bại');
        }

        return redirect('/index');
    }
}
