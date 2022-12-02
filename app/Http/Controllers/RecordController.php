<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class RecordController extends Controller
{
    //記録一覧画面を表示
    public function record(){

        //アカウントデータを取得
        $user = \Auth::user();

        //アカウントと紐づく記録一覧取得
        $record = Record::where('user_id',$user['id'])->orderBy('date','asc')->get();
        //dd($record);
        return view('record', compact('user','record')); 
    }
    
    //記録入力画面を表示
    public function add(){
        //ログインしているデータを取得
        $user = \Auth::user();
        

        
        return view('add', compact('user')); 
        

    }
    
    
    //記録入力
    public function record_add(Request $request){

        //アカウントデータを取得
        $user = \Auth::user();
        $records = [];

        foreach($request["record"] as $value){
            
        $value['user_id'] = $user->id;
        
        $records[] = $value;
        
        }
        
        Record::upsert($records,['user_id', 'date']);

        return redirect()->route('record');      
        }


         //記録一覧編集画面を表示
        public function record_edit(){
    
        
    }
}

