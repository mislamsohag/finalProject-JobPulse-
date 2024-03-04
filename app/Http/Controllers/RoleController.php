<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;

class RoleController extends Controller
{
      public function addRole(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        try{
            Role::updateOrCreate([
                'name'=>$request->input('name')
            ]);
            return ResponseHelper::Out('success', 'Rule add successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }
    }
}


