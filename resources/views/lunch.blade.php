<!-- layoutsフォルダのapp.bladeを親ファイルにする -->
@extends('layouts.app')

<!-- 以下の内容が@yield('content')に入る -->
@section('content')


<div class= "col-md-6 mx-auto">
    <div class="card text-dark">
        <img src="" class="card-img" alt="ボディメイクに適した昼食">
        <div class="card-img-overlay">
            <h5 class="card-title">LUNCH MENU</h5>
            <p class="card-text">昼食</p>
            <p class="card-text">昼食</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <h6>{{ $user->name }}さんの昼食は<br>
            {{$kcal3}}kcal<br>
            タンパク質：{{$protein2}}g<br>
            脂質：{{$fat2}}g<br>
            炭水化物：{{$carb2}}g<br>
            ～上記を目標に食べよう～<br>
            </h6>
        </div>
    </div>
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                <h5><span style="color: #ffffff; background-color: #000080 ; border: 2px solid #000080;  border-radius: 4px; ">和食</span></h5>
                </div>
                <div class="card-text">
                    <h6>・鉄火丼<h6>
                    <p>(550kcal,P:28g,F:2g,C:90g)</p>
                    <h6>・海鮮丼<h6>
                    <p>(790kcal,P:30g,F:8g,C:90g)</p>
                    <h6>・鴨南蛮そば<h6>
                    <p>(590kcal,P:23g,F:16g,C:75g)</p>
                    <h6>・サバの塩焼き定食</h6>
                    <p>(710kcal,P:32g,F20g,C:70g)</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5><span style="color: #ffffff; background-color: #ffa500 ; border: 2px solid #ffa500;  border-radius: 4px;">洋食</span></h5>
                </div>
                <div class="card-text">
                    <h6>・チキンソテー定食<h6>
                    <p>(鶏モモ皮なし:560kcal,P:47g,F:11g,C:70g)</p>
                    <p style="margin-top: 0,5;">(鶏胸皮なし:530kcal,P:53g,F:5g,C:64g)</p>
                    <h6>・たらこソースパスタ<h6>
                    <p>(460kcal,P:20g,F:9g,C:73g)</p>
                    <h6>・鶏肉のトマト煮と全粒粉パン<h6>
                    <p>(615kcal,P:32g,F:25g,C:65g)</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class= "col-md-6 mx-auto">
    <div class="card-group mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5>☆昼食におすすめ食品☆</h5>
                    <p>～自分の目標値になるよう組み合わせよう～</p>
                </div>
                <div class="card-text">
                    <ul class="list">
                        <li class="item">
                        ・ざる蕎麦<p>(1人前 410g:360kcal,P:15g,F:2g,C:70g)</p>
                        </li>
                        <li class="item">
                        ・鮭のおにぎり<p>(180kcal,P:5g,F:2g,C:36g)</p>
                        </li>
                        <li class="item">
                        ・鶏むね肉サラダ<p>(1切れ:110kcal,P:18g,F:4g,C:0g)</p>
                        </li>
                        <li class="item">
                        ・チキン＆たまごサンドイッチ<p>(2切れ:320kcal,P:15g,F:17g,C:25g)</p>
                        </li>
                        <li class="item">
                        ・納豆巻き<p>(1本:190kcal,P:6g,F:2g,C:40g)</p>
                        </li>
                        <li class="item">
                        ・チキンミネストローネスープ<p>(18kcal,P:15g,F:8g,C:10g)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    
    

    <div class="card">
        <div class="card-body text-center">
        <button onclick="location.href='/morning'" class="btn btn-dark btn-lg m-3" >朝食</button>
        <button onclick="location.href='/dinner'" class="btn btn-dark btn-lg m-3" >夕食</button>
        <button onclick="location.href='/snack'" class="btn btn-dark btn-lg m-3" >間食</button>
        <button onclick="location.href='/home'" class="btn btn-dark btn-lg m-3" >ホーム</button>
        </div>
    </div>
</div>    





@endsection