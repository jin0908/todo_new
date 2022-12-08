<!-- layoutsフォルダのapp.bladeを親ファイルにする -->
@extends('layouts.app')

<!--以下の内容が@yield('content')に入る -->
@section('content')

<div class="container">
    <div class="row justify-content-start">
        <div class= "col-md-3">
        <div class= "card">
        <div class="card text-center">
            <div class="card-header">筋肉食堂にようこそ！</div>
                <div class="card-body"><span style="background-color:#dc143c;">
                <script>
                var a=["腹筋はキッチンで作られる",
                        "限界を決めるのはあなたの心だ",
                        "筋肉という名の衣服を日々の努力で縫い上げる",
                        "続ければ必ず成長出来る",
                        "頑張るか、超頑張るかの二択だ",
                        "さあ、トレーニングだ。余計なことは忘れて",
                        "真のトレーニングとはやめたいと思った時から始まる",
                        "筋肉は裏切らない"];
                var x;
                x=Math.floor(Math.random()*8); 
                document.write(a[x]);
                </script>
                </span></div>
                </div> 
            </div>       
        </div>
        <div class="col-md-6">
            <div class="card text-dark">
                <img src="{{ asset('/css/images/\weights-exercise-weightlifter-strong-athletic.jpg') }}" class="card-img" alt="トレーニング画像" height="250">
            <div class="card-img-overlay">
                <h5 class="card-title">筋肉食堂</h5>
                <p class="card-text"></p>
                <p class="card-text"></p>
            </div>
        </div>
            <div class="card">
                <div class="card-body">
                    <h3 style="text-align:center">{{$dt3}}日目</h3>
                    <p style="text-align:center">
                        <font size="5">
                        {{ $user->name }}さんの１日の目標値は<br>
                        <span class='taeget'>{{$kcal2}}kcal</span><br>
                        <span class='taeget'>タンパク質：{{$protein2}}g</span><br>
                        <span class='taeget'>脂質：{{$fat2}}g</span><br>
                        <span class='taeget'>炭水化物：{{$carb2}}g</span><br>
                        3回の食事と{{$snack_time}}回の間食で調整しよう！<br>
                        </font>
                    </p>
                    <div class="text-center">
                        <button onclick="location.href='/morning'" class="btn btn-dark btn-lg m-3" >朝食メニュー</button>
                        <button onclick="location.href='/lunch'" class="btn btn-dark btn-lg m-3" >昼食メニュー</button>
                    </div>
                    <div class="text-center">
                        <button onclick="location.href='/dinner'" class="btn btn-dark btn-lg m-3" >夕食メニュー</button>
                        <button onclick="location.href='/snack'" class="btn btn-dark btn-lg m-3">間食メニュー</button>
                    </div>
                    <div class="text-center">
                        <button onclick="location.href='/record'" class="btn btn-outline-dark  m-3">記録を確認</button>
                        <button onclick="location.href='/edit/{id}'" class="btn btn-outline-dark  ml-3 ">アカウント編集</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
@endsection