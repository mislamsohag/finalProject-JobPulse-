<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Rule;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;

class RuleController extends Controller
{
    public function addRule(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        try{
            Rule::updateOrCreate([
                'name'=>$request->input('name')
            ]);
            return ResponseHelper::Out('success', 'Role add successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }
    }
}
