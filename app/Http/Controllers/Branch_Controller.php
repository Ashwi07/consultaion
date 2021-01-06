<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class Branch_Controller extends Controller
{
    public function create( Request $request){
        $Branch = new Branch;
        
        $Branch->Branch_ID = $request->input('Branch_ID');
        $Branch->Branch_Name = $request->input('Branch_Name');

        if($Branch->save())
            return response()->json(true,200);
        else
            return response()->json(false,400);
    }

    public function showAll() {
        $result = Branch::get();
        if($result)
            return response()->json($result,200);
        else
            return response()->json(false,400);
    }
}
