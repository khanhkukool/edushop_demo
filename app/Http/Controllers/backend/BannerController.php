<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banners;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function index(){
        $banners = Banners::paginate(10);
        return view('backend/banners/index',[
            'banners' => $banners
        ]);
    }

    public function create(){
        $banners = Banners::all();

        return view('backend/banners/create', [
            'banners' => $banners
        ]);
    }

    public function store(Request $request){
        $rule = [
            'file' => ['image']
        ];
        $messages = [
            'file.image' => 'File phải có định dạng ảnh'
        ];

        $request->validate($rule,$messages);

        $file_name = '';
        if(!empty($request->path)){
            $path = $request->path;
            $file_name = 'banner-' . time() . '-' .$path->getClientOriginalName();

            $dir_uploads = public_path() . '/uploads';
            $path->move($dir_uploads,$file_name);
        }
        $path = $file_name;

        $banner_model = new Banners();

        $banner_model->path = $path;
        $banner_model->save();

        return redirect('backend/banners/index');
    }

    public function delete($id){
        $banner = Banners::findOrFail($id);
        $banner->delete();

        return redirect('/backend/banners/index');
    }
}
