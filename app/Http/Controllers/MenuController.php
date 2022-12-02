<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MenuController extends Controller
{
    //朝食の栄養計算
    public function morning(){

        //ログインしているデータを取得
        $user = \Auth::user();

        //朝食に必要kcalを計算
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

        //男性で細マッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）× 1.55 -300 ×0.3
        if($gender === 'male'&& $body === 'hoso'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age)*1.55 -300 ;
            $kcal2 = $kcal*0.3;
            $kcal3 = round($kcal2);
            
        //男性でソフトマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.55 ×0.2
        }elseif($gender === 'male'&& $body === 'soft'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.55;
            $kcal2 = $kcal*0.2;
            $kcal3 = round($kcal2);
        
        //男性でゴリマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.725 +500 ×0.2
        }elseif($gender === 'male'&& $body === 'gori'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.725 +500;
            $kcal2 = $kcal*0.2;
            $kcal3 = round($kcal2);

        //女性で細マッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 -300  ×0.3
        }elseif($gender === 'female'&& $body === 'hoso'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55 -300;
            $kcal2 = $kcal*0.3;
            $kcal3 = round($kcal2);

        //女性でソフトマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 ×0.2
        }elseif($gender === 'female'&& $body === 'soft'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55;
            $kcal2 = $kcal*0.2;
            $kcal3 = round($kcal2);

        //女性でゴリマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.725 +500 ×0.2
        }else{
        $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.725 +500;
        $kcal2 = $kcal*0.2;
        $kcal3 = round($kcal2);
        }

        //朝食のタンパク質量を計算
        //朝食kcalの×0.2÷4
        $protein = $kcal3*0.2/4;
        $protein2 = round($protein);


        //朝食の脂質量を計算 
        //朝食kcalの×0.2÷4
        $fat = $kcal3*0.2/9;
        $fat2 = round($fat);

        //朝食の炭水化物量を計算
        //朝食kcalの×0.6/4
        $carb = $kcal3*0.6/4;
        $carb2 = round($carb);
        
        return view('morning',compact('user','kcal3','protein2','fat2','carb2'));    
    }

        //昼食の栄養計算
    public function lunch(){

        //ログインしているデータを取得
        $user = \Auth::user();

        //昼食に必要kcalを計算
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

        //男性で細マッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）× 1.55 -300 ×0.35
        if($gender === 'male'&& $body === 'hoso'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age)*1.55 -300 ;
            $kcal2 = $kcal*0.35;
            $kcal3 = round($kcal2);
            
        //男性でソフトマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.55 ×0.3
        }elseif($gender === 'male'&& $body === 'soft'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.55;
            $kcal2 = $kcal*0.3;
            $kcal3 = round($kcal2);
        
        //男性でゴリマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.725 +500 ×0.3
        }elseif($gender === 'male'&& $body === 'gori'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.725 +500;
            $kcal2 = $kcal*0.3;
            $kcal3 = round($kcal2);

        //女性で細マッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 -300  ×0.35
        }elseif($gender === 'female'&& $body === 'hoso'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55 -300;
            $kcal2 = $kcal*0.35;
            $kcal3 = round($kcal2);

        //女性でソフトマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 ×0.3
        }elseif($gender === 'female'&& $body === 'soft'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55;
            $kcal2 = $kcal*0.3;
            $kcal3 = round($kcal2);

        //女性でゴリマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.725 +500 ×0.3
        }else{
        $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.725 +500;
        $kcal2 = $kcal*0.3;
        $kcal3 = round($kcal2);
        }

        //昼食のタンパク質量を計算
        //昼食kcalの×0.2÷4
        $protein = $kcal3*0.2/4;
        $protein2 = round($protein);

        //昼食に必要脂質量を計算 
        //昼食kcalの×0.2÷9
        $fat = $kcal3*0.2/9;
        $fat2 = round($fat);

        //昼食の炭水化物量を計算
        //昼食kcalの×0.6/4
        $carb = $kcal3*0.6/4;
        $carb2 = round($carb);
        
        


        return view('lunch',compact('user','kcal3','protein2','fat2','carb2')); 

            
    }

    //夕食の栄養計算
    public function dinner(){
        //ログインしているデータを取得
        $user = \Auth::user();

        //夕食に必要kcalを計算
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

        //男性で細マッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）× 1.55 -300 ×0.3
        if($gender === 'male'&& $body === 'hoso'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age)*1.55 -300 ;
            $kcal2 = $kcal*0.3;
            $kcal3 = round($kcal2);
            
        //男性でソフトマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.55 ×0.3
        }elseif($gender === 'male'&& $body === 'soft'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.55;
            $kcal2 = $kcal*0.3;
            $kcal3 = round($kcal2);
        
        //男性でゴリマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.725 +500 ×0.2
        }elseif($gender === 'male'&& $body === 'gori'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.725 +500;
            $kcal2 = $kcal*0.2;
            $kcal3 = round($kcal2);

        //女性で細マッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 -300  ×0.3
        }elseif($gender === 'female'&& $body === 'hoso'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55 -300;
            $kcal2 = $kcal*0.3;
            $kcal3 = round($kcal2);

        //女性でソフトマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 ×0.3
        }elseif($gender === 'female'&& $body === 'soft'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55;
            $kcal2 = $kcal*0.3;
            $kcal3 = round($kcal2);

        //女性でゴリマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.725 +500 ×0.2
        }else{
        $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.725 +500;
        $kcal2 = $kcal*0.2;
        $kcal3 = round($kcal2);
        }

        //夕食のタンパク質量を計算
        //夕食kcalの×0.2÷4
        $protein = $kcal3*0.2/4;
        $protein2 = round($protein);


        //夕食の脂質量を計算 
        //夕食kcalの×0.2÷9
        $fat = $kcal3*0.2/9;
        $fat2 = round($fat);


        //夕食に必要炭水化物量を計算
        //夕食kcalの×0.6/4
        $carb = $kcal3*0.6/4;
        $carb2 = round($carb);
        
        
        return view('dinner',compact('user','kcal3','protein2','fat2','carb2'));    
    }


    //間食の栄養計算
    public function snack(){

        //ログインしているデータを取得
        $user = \Auth::user();

        //体型を取得
        $body = User::where('id',$user['id'])->value('body');
        //性別を取得
        $gender = User::where('id',$user['id'])->value('gender'); 
        //体重を取得
        $weight = User::where('id',$user['id'])->value('weight'); 
        //身長を取得
        $height = User::where('id',$user['id'])->value('height'); 
        //年齢を取得
        $age= User::where('id',$user['id'])->value('age'); 

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

        //間食の時間帯
        //細マッチョ
        if($body === 'hoso'){
            $snack_chance = '15時、トレーニング前など';
        //ソフトマッチョ 
        }elseif($body === 'soft'){
            $snack_chance = '10時、15時、トレーニング前など';
        //ゴリマッチョ 
        }else{
            $snack_chance = '10時、15時、トレーニング前、就寝前など';
        }

        //間食に必要kcalを計算
        //男性で細マッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）× 1.55 -300 ×0.05
        if($gender === 'male'&& $body === 'hoso'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age)*1.55 -300 ;
            $kcal2 = $kcal*0.05;
            $kcal3 = round($kcal2);
            
        //男性でソフトマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.55 ×0.2 ÷2
        }elseif($gender === 'male'&& $body === 'soft'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.55;
            $kcal2 = $kcal*0.2/2;
            $kcal3 = round($kcal2);
        
        //男性でゴリマッチョ 66 ＋ （13.7 × 体重 ）＋ 5.0 × 身長 − （6.8 × 年齢）×1.725 +500 ×0.3 ÷3
        }elseif($gender === 'male'&& $body === 'gori'){
            $kcal = (66 + 13.7*$weight + 5*$height -6.8*$age) *1.725 +500;
            $kcal2 = $kcal*0.3/3;
            $kcal3 = round($kcal2);

        //女性で細マッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 -300  ×0.05
        }elseif($gender === 'female'&& $body === 'hoso'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55 -300;
            $kcal2 = $kcal*0.05;
            $kcal3 = round($kcal2);

        //女性でソフトマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.55 ×0.2 ÷2
        }elseif($gender === 'female'&& $body === 'soft'){
            $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.55;
            $kcal2 = $kcal*0.2/2;
            $kcal3 = round($kcal2);

        //女性でゴリマッチョ 665.1 ＋（ 9.6 × 体重） ＋ 1.7 × 身長 − （7.0 × 年齢）× 1.725 +500 ×0.3 ÷3
        }else{
        $kcal = (665.1 + 9.6*$weight + 1.7*$height -7*$age) *1.725 +500;
        $kcal2 = $kcal*0.3/3;
        $kcal3 = round($kcal2);
        }

        //間食のタンパク質量を計算
        //間食kcalの×0.2÷4
        $protein = $kcal3*0.2/4;
        $protein2 = round($protein);


        //間食の脂質量を計算 
        //間食kcalの×0.2÷9
        $fat = $kcal3*0.2/9;
        $fat2 = round($fat);


        //間食に必要炭水化物量を計算
        //間食kcalの×0.6/4
        $carb = $kcal3*0.6/4;
        $carb2 = round($carb);
        
        
        return view('snack',compact('user','kcal3','protein2','fat2','carb2','snack_time','snack_chance'));
    
    }

    

    

}
