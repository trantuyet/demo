<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function edit($id , Request $request){
        $user = User::find($id);
        $user->fill($request ->all());
        $user->save();
        return response()->json($user,200);

    }
}
