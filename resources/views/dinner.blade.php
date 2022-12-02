<!-- layoutsフォルダのapp.bladeを親ファイルにする -->
@extends('layouts.app')

<!-- 以下の内容が@yield('content')に入る -->
@section('content')


<div class= "col-md-6 mx-auto">
    <div class="card text-dark">
        <img src="" class="card-img" alt="ボディメイクに適した夕食">
        <div class="card-img-overlay">
            <h5 class="card-title">DINNER MENU</h5>
            <p class="card-text">夕食</p>
            <p class="card-text">夕食</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <h6>{{ $user->name }}さんの夕食は<br>
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
                    <h6>・刺身定食<h6>
                    <p>(630kcal,P:40g,F:10g,C:85g)</p>
                    <h6>・ほっけの塩焼定食<h6>
                    <p>(630cal,P:45g,F:13g,C:77g)</p>
                    <h6>・焼鳥とご飯・味噌汁セット(モモ塩・ムネ塩・ねぎま各1本)<h6>
                    <p>(540kcal,P:27g,F:15,C:65g)</p>
                    <h6>・おでん（大根・はんぺん・たまご・ちくわ・こんにゃく各1個）</h6>
                    <p>(206kcal,P:16g,F:7.5g,C:15g)</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5><span style="color: #ffffff; background-color: #ffa500 ; border: 2px solid #ffa500;  border-radius: 4px;">洋食</span></h5>
                </div>
                <div class="card-text">
                    <h6>・牛フィレ肉ステーキ(200g)<h6>
                    <p>(270kcal,P:40g,F:10g,C:0g)</p>
                    <h6>・シーフードマリネとフランスパン<h6>
                    <p>(420kcal,P:25g,F:12g,C:52g)</p>
                    <h6>・鶏ムネ肉のグリルチキン(皮なし200g)<h6>
                    <p>(380kcal,P:40g,F:3g,C:0g)</p>
                    <h6>・カジキマグロのステーキ<h6>
                    <p>(250kcal,P:28g,F:15g,C1g)</p>  
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
                    <h5>☆夕食におすすめ食品☆</h5>
                    <p>～自分の目標値になるよう組み合わせよう～</p>
                </div>
                <div class="card-text">
                <ul class="list">
                        <li class="item">
                        ・枝豆<p>(1人前g:110kcal,P:18g,F:4g,C:0g)</p>
                        </li>
                        <li class="item">
                        ・サバの塩焼<p>(200kcal,P:20g,F:11g,C:1g)</p>
                        </li>
                        <li class="item">
                        ・冷奴<p>(80kcal,P:8g,F:4g,C:4g)</p>
                        </li>
                        <li class="item">
                        ・馬刺し<p>(1人前100g:110kcal,P:20g,F:2g,C:0g)</p>
                        </li>
                        <li class="item">
                        ・刺身の盛り合わせ<p>(200kcal,P:30g,F:5g,C:5g)</p>
                        </li>
                        <li class="item">
                        ・オクラ納豆<p>(85kcal,P:8g,F:5g,C:5g)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    
    <div class="card">
        <div class="card-body text-center">
        <button onclick="location.href='/morning'" class="btn btn-dark btn-lg m-3" >朝食</button>
        <button onclick="location.href='/lunch'" class="btn btn-dark btn-lg m-3" >昼食</button>
        <button onclick="location.href='/snack'" class="btn btn-dark btn-lg m-3" >間食</button>
        <button onclick="location.href='/home'" class="btn btn-dark btn-lg m-3" >ホーム</button>
        </div>
    </div>
</div>    





@endsection