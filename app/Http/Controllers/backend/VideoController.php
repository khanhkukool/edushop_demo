<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Products;
use App\Users;
//đó, phải import nó vào như này
use App\Videos;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index()
    {
        //class Videos này này, e thấy PHPStorm nó đang bôi sáng ko, nghĩa là e gọi class
//        nhưng chưa import vào
        $videos = Videos::paginate(10);
        return view('/backend/videos/index', [
            'videos' => $videos
        ]);
    }

    public function create()
    {
        $users = Users::all();
        $products = Products::all();
        return view('backend/videos/create', [
            'users' => $users,
            'products' => $products
        ]);
    }

    public function store(Request $request)
    {

        $file_name = '';
        if (!empty($request->video)) {
            $video = $request->video;
            $file_name = 'video-' . time() . '-' . $video->getClientOriginalName();

            $dir_uploads = public_path() . '/uploads';
            $video->move($dir_uploads, $file_name);
        }
        $video = $file_name;

        $videos_model = new Videos();
        $videos_model->user_id = $request->get('user');
        $videos_model->product_id = $request->get('product');
        $videos_model->video = $video;

        $videos_model->save();

        $products = new Products();
        $products->count_videos = Products::where('products.id','=',$videos_model->product_id)
            ->increment('count_videos',1);
        return redirect('/backend/videos/index');
    }

    public function delete($id)
    {
        $video = Videos::findOrFail($id);
        $video->delete();

        return redirect('/backend/videos/index');
    }
}
