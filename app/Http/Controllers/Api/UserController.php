<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $validation = Validator::make($data, [
            'name' => ['required', 'string', 'min:2', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
        ]);
        $errors = $validation->errors()->all();
        if(!empty($errors)){
            return response()->json($errors,400);
        }
        $data['password'] = Hash::make($data['password']);
        $user=User::create($data);
        return response()->json($user);
    }

    public function login(Request $request)
    {
        $data = $request->all();
        $validation = Validator::make($data, [
            'name' => ['required'],
            'password' => ['required'],
        ]);
        $errors = $validation->errors()->all();
        if(!empty($errors)){
            return response()->json($errors, 400);
        }
        $user=User::where('name',$data['name'])
            ->select('id', 'name','password','email')
            ->first();
        if ($user && Hash::check($data['password'], $user->password)) {
            return response()->json($user);
        }
        return response()->json(['Authorization error'], 401);
    }
}
