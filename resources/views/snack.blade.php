<!-- layoutsフォルダのapp.bladeを親ファイルにする -->
@extends('layouts.app')

<!-- 以下の内容が@yield('content')に入る -->
@section('content')


<div class= "col-md-6 mx-auto">
    <div class="card text-dark">
        <img src="" class="card-img" alt="ボディメイクに適した間食">
        <div class="card-img-overlay">
            <h5 class="card-title">SNACK MENU</h5>
            <p class="card-text">間食</p>
            <p class="card-text">間食</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <h6>{{ $user->name }}さんの間食は1日<span style="color: red;" >{{$snack_time}}</span>回<br>
            {{$kcal3}}kcal<br>
            タンパク質：{{$protein2}}g<br>
            脂質：{{$fat2}}g<br>
            炭水化物：{{$carb2}}g<br>
            ～上記を{{$snack_time}}回食べよう～<br>
            </h6>
        </div>
    </div>
        <div class="card">
            <div class="card-body">
            <div class="card-title">
                <h5>☆間食の時間帯☆</h5>
                <p>{{$snack_chance}}</p>
                
                <h5>☆間食におすすめ食品☆</h5>
                <p>～自分の目標値になるよう組み合わせよう～</p>
            </div>
                <div class="card-text">
                <ul class="list">
                        <li class="item">
                        ・素焼きアーモンド10粒<p>(70kcal,P:2g,F:5g,C:2g)</p>
                        </li>
                        <li class="item">
                        ・焼き芋 小さめ1本<p>(160kcal,P:2g,F:0g,C:35g)</p>
                        </li>
                        <li class="item">
                        ・カッテージチーズ<p>(100g:115kcal,P:18g,F:4g,C:0g)</p>
                        </li>
                        <li class="item">
                        ・プロテインドリンク<p>(1杯:80kcal,P:20g,F:1g,C:8g)</p>
                        </li>
                        <li class="item">
                        ・カステラ<p>(1切れ:70kcal,P:2g,F:5g,C:2g)</p>
                        </li>
                        <li class="item">
                        ・どら焼き<p>(170kcal,P:4g,F:3g,C:30g)</p>
                        </li>
                        <li class="item">
                        ・大福<p>(230kcal,P:4g,F:1g,C:50g)</p>
                        </li>
                        <li class="item">
                        ・さけるチーズ<p>(1本:80kcal,P:7g,F:6g,C:0g)</p>
                        </li>
                        <li class="item">
                        ・ギリシャヨーグルト<br>(1カップ110g:70kcal,P:12g,F:0g,C:5g)
                        </li>
                        <li class="item">
                        ・せんべい(揚げていないもの)<p>(1枚:40kcal,P:1g,F:0g,C:10g)</p>
                        </li>
                        <li class="item">
                        ・バナナ<p>(1本:90kcal,P:1g,F:0g,C:22g)</p>
                        </li>
                        <li class="item">
                        ・鮭のおにぎり<p>(180kcal,P:5g,F:2g,C:36g)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="card">
        <div class="card-body text-center">
        <button onclick="location.href='/morning'" class="btn btn- btn-dark btn-lg m-3" >朝食</button>
        <button onclick="location.href='/lunch'" class="btn btn- btn-dark btn-lg m-3" >昼食</button>
        <button onclick="location.href='/dinner'" class="btn btn- btn-dark btn-lg m-3" >夕食</button>
        <button onclick="location.href='/home'" class="btn btn- btn-dark btn-lg m-3" >ホーム</button>
        </div>
    </div>
</div>
</div    





@endsection