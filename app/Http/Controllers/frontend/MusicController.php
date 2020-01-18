<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index(){
        $musics = Products::where('category_id','=',1)->paginate(20);

        return view('/categories/music',[
            'musics' => $musics
        ]);
    }
}
