<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skills = Products::where('category_id','=',11)->paginate(20);

        return view('/categories/skills',[
            'skills' => $skills
        ]);
    }
}
