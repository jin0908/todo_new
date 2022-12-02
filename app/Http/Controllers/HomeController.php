<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\User;

use Storage; 


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){   

        //ログインしているデータを取得
        $user = \Auth::user();


        //今日が登録から何日目か取得する
        //今日の日付を取得
        $dt1 = Carbon::now();
        //ユーザー登録日を取得、valueは指定した1つのカラムを取得できる
        $dt2 = User::where('id',$user['id'])->value('created_at'); 
        //今日とユーザー登録日の差を取得
        $dt3 = $dt2->diffInDays($dt1)+1;


        //必要kcalを計算
        //性別を取得
        $gender = User::where('id',$user['id'])->value('gender'); 
        //体重を取得
        $weight = User::where('id',$user['id'])->value('weight'); 
        //身長を取得
        $height = User::where('id',$user['id'])->value('height'); 
        //年齢を取得
        $age= User::where('id',$user['id'])->value('age'); 
        //体型を取得
        $body = User::where('id',$user['id'])->value('body'); 

        //男性で細マッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）× 1.55 -300
        if($gender === 'male'&& $body === 'hoso'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age)*1.55 -300 ;
            $kcal2 = round($kcal);
            
        //男性でソフトマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.55
        }elseif($gender === 'male'&& $body === 'soft'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.55;
            $kcal2 = round($kcal);
        
        //男性でゴリマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.725 +500
        }elseif($gender === 'male'&& $body === 'gori'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.725 +500;
            $kcal2 = round($kcal);

        //女性で細マッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 -300  
        }elseif($gender === 'female'&& $body === 'hoso'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55 -300;
            $kcal2 = round($kcal);

        //女性でソフトマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 
        }elseif($gender === 'female'&& $body === 'soft'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55;
            $kcal2 = round($kcal);

        //女性でゴリマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.725 +500
        }else{
        $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.725 +500;
        $kcal2 = round($kcal);
        }


        //必要タンパク質量を計算
        //全ての体型で 必要kcalの20%/4
            $protein = $kcal*0.2/4;
            $protein2 = round($protein);
            
        //必要脂質量を計算 全ての体型で必要kcalの20%/9
        $fat = $kcal*0.2/9;
        $fat2 = round($fat);
        
        //必要炭水化物量を計算
        //全ての体型で 必要kcalの60%/4
        $carb = $kcal*0.6/4;
        $carb2 = round($carb);

        //間食の回数を取得
        //細マッチョ 1回
        if($body === 'hoso'){
            $snack_time = 1;
        //ソフトマッチョ 2回
        }elseif($body === 'soft'){
            $snack_time = 2;
        //ゴリマッチョ 3回
        }else{
            $snack_time = 3;
        }
                



        return view('home', compact('user','dt3','kcal2','protein2','fat2','carb2','snack_time'));

    }
    
}