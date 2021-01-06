<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Category_Controller extends Controller
{
    public function create( Request $request){
        $Category = new Category;
        
        $Category->Category_ID = $request->input('Category_ID');
        $Category->Category_Name = $request->input('Category_Name');

        if($Category->save())
            return response()->json(true,200);
        else
            return response()->json(false,400);
    }

    public function showAll() {
        $result = Category::get();
        if($result)
            return response()->json($result,200);
        else
            return response()->json(false,400);
    }
}
