<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;

class CategoryController extends Controller
{
    public function addCategory(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        try{
            Category::updateOrCreate([
                'name'=>$request->input('name')
            ]);
            return ResponseHelper::Out('success', 'Category add successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }
    }
}
