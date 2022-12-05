<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\CarbonPeriod;


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
        //アカウントデータを取得
        $user = \Auth::user();
        //アカウントと紐づく記録一覧取得
        $records = Record::where('user_id',$user['id'])->get();

        //1か月分の日付取得
        //$period= CarbonPeriod::create('2022-11-01', '2022-11-30')->toArray();
        //$dates = [];
        //foreach ($period as $date) {
        //$dates[] = $date->format('d');
        //}

        //dd($dates);
        return view('add', compact('user','records')); 
        

    }
    
    
    //記録入力
    public function record_add(Request $request){
        
        //$request->validate([
            //'date' => 'unique','record',
        //]);

        //アカウントデータを取得
        $user = \Auth::user();
        
        //個別入力
        Record::create([
            'user_id' => Auth::user()->id,
            'date' => $request->date,
            'weight' => $request->weight,
            'kcal' => $request->kcal,
            'protein' => $request->protein,
            'fat' => $request->fat,
            'carb' => $request->carb,
        ]);

        //$period = CarbonPeriod::create('2021-08-01', '2021-08-')->toArray();
        //dd($period);
        //dd($request);

        //一括入力
        //$records = [];
        //foreach($request["record"] as $value){    
        //$value['user_id'] = $user->id;
        //$records[] = $value;
        //}
        //Record::upsert($records,['user_id', 'date']);
        
        return redirect()->route('record');      
        }


         //記録編集画面を表示
        public function record_edit($id){
        
        //dd($id);
        //該当するIDの記録を取得
        $record = Record::find($id);

        return view('record_edit',(compact('record')));    
    
        }
        

        //記録編集
        public function record_update(Request $request){
        
        //dd($request);
        //編集するため、リクエストで渡されたIDを元に前のデータを取得
        $record = Record::where('id',$request->id)->first();
            $record->date = $request->date;
            $record->weight = $request->weight;
            $record->kcal= $request->kcal;
            $record->protein= $request->protein;
            $record->fat= $request->fat;
            $record->carb= $request->carb;
            $record->save();
        
            
        return redirect()->route('record');    
        
}
}