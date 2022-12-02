<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{   

    //アカウント編集画面を表示
    public function edit($id){
    
        //アカウントデータを取得
        $user = \Auth::user();
        $account = User::where('id',$user['id'])->first();
        //dd($account);
        return view('edit',compact('user','account'));    
    }

    //アカウント編集
    public function update(Request $request, $id){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            //unique:一意
            'email' => ['required', 'string', 'email', 'max:255'],
            'gender' => ['required'],
            'height' => ['required'],
            'weight' => ['required'],
            'body'  => ['required'],   
        ]);
        $inputs = $request->all();
        //dd($inputs);
        User::where('id',$id)->update([
            'id'=> $inputs['id'],
            'name'=> $inputs['name'],
            'email'=> $inputs['email'],
            'gender'=> $inputs['gender'],
            'age'=> $inputs['age'],
            'height'=> $inputs['height'],
            'weight'=> $inputs['weight'],
            'body'=> $inputs['body'],
            'password'=> $inputs['password'] ]);

        return redirect()->route('home');  
    }
}
