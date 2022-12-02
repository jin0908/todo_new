<!-- layoutsフォルダのapp.bladeを親ファイルにする -->
@extends('layouts.app')

<!-- 以下の内容が@yield('content')に入る -->
@section('content')


<div class= "col-md-6 mx-auto">
    <div class="card text-dark">
        <img src="" class="card-img" alt="ボディメイクに適した朝食">
        <div class="card-img-overlay">
            <h5 class="card-title">MORNING MENU</h5>
            <p class="card-text">朝食</p>
            <p class="card-text">朝食</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <h6>
            {{ $user->name }}さんの朝食は<br>
            {{$kcal3}}kcal<br>
            タンパク質:{{$protein2}}g<br>
            脂質：{{$fat2}}g<br>
            炭水化物：{{$carb2}}g<br>
            ～上記を目標に食べよう～<p>
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
                    <h6>・白米<h6>
                    <p>(お茶碗1杯250kcal,P:4g,F:0g,C:55g)</p>
                    <h6>・ゆで卵<h6>
                    <p>(80kcal,P:7g,F:6g,C:0g)</p>
                    <h6>・納豆1パック<h6>
                    <p>(80kcal,P:8g,F:5g,C:5g)</p>
                    <h6>・豆腐の味噌汁</h6>
                    <p>(50kcal,P:3g,F:1g,C:5g)</p>
                </div>
            </div>
            <div class="card-footer">
                <h6>460kcal<p>タンパク質:22g,脂質:12g,炭水化物65g</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                    <h6 style="padding-top:25px">・白米<h6>
                    <p>(お茶碗1杯250kcal,P:4g,F:0g,C:55g)</p>
                    <h6>・焼き鮭<h6>
                    <p>(1切れ:110kcal,P:18g,F:4g,C:0g)</p>
                    <h6>豆腐の味噌汁<h6>
                    <p>(50kcal,P:3g,F:1g,C:5g)</p>
                    <h6>ほうれん草のおひたし<h6>
                    <p>(25kcal,P:3g,F:0g,C:3g)</p>  
                </div>
            </div>
            <div class="card-footer">
                <h6>435kcal<p>タンパク質:28g,脂質:5g,炭水化物63g</h6>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5><h5><span style="color: #ffffff; background-color: #ffa500 ; border: 2px solid #ffa500;  border-radius: 4px;">洋食</span></h5></h5>
                </div>
                <div class="card-text">
                    <h6>・ツナトースト<h6>
                    <p>(ノンオイルツナ缶と通常のマヨネーズ使用:304kcal,P:18g,F:13g,C:28g)</p>
                    <h6>・プロテインドリンク<h6>
                    <p>(1杯:80kcal,P:20g,F:1g,C:8g)</p>
                </div>
            </div>
            <div class="card-footer">
                <h6>384kcal<p>タンパク質:38g,脂質:14g,炭水化物36g</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    
                </div>
                <div class="card-text">
                    <h6 style="padding-top:25px">・ベーグル<h6>
                    <p>(1個225kcal,P:8g,F:1g,C:45g)</p>
                    <h6>・ゆで卵<h6>
                    <p>(80kcal,P:7g,F:6g,C:0g)</p>
                    <h6>ギリシャヨーグルト<h6>
                    <p>(1カップ110g:70kcal,P:12g,F:0g,C:5g)</p> 
                </div>
            </div>
            <div class="card-footer">
                <h6>375kcal<p>タンパク質:27g,脂質:7g,炭水化物50g</h6>
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
                    <h5>☆朝食におすすめ食品☆</h5>
                    <p>～自分の目標値になるよう組み合わせよう～</p>
                </div>
                <div class="card-text">
                    <ul class="list">
                    <li class="item">
                        ・全粒粉パン<p>(6枚切 2枚:300kcal,P:10g,F:6g,C:55g)</p>
                        </li>
                        <li class="item">
                        ・焼き鮭<p>(1切れ:110kcal,P:18g,F:4g,C:0g)</p>
                        </li>
                        <li class="item">
                        ・ブロッコリーサラダ<p>(小皿1皿:20kcal,P:2g,F:0g,C:4g)</p>
                        </li>
                        <li class="item">
                        ・サラダチキン<p>(1パック約115g:115kcal,P:25g,F:1g,C:1g)</p>
                        </li>
                        <li class="item">
                        ・カッテージチーズ<p>(100g:115kcal,P:18g,F:4g,C:0g)</p>
                        </li>
                        <li class="item">
                        ・さけるチーズ<p>(1本:80kcal,P:7g,F:6g,C:0g)</p>
                        </li>
                        <li class="item">
                        ・豆乳<p>(1杯200ml:95kcal,P:7g,F:4g,C:6g)</p>
                        </li>
                        <li class="item">
                        ・牛乳<p>(1杯200ml:140kcal,P:7g,F:8g,C:10g)</p>
                        </li>    
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
        <button onclick="location.href='/lunch'" class="btn btn-dark btn-lg m-3">昼食</button>
        <button onclick="location.href='/dinner'" class="btn btn- btn-dark btn-lg m-3" >夕食</button>
        <button onclick="location.href='/snack'" class="btn btn- btn-dark btn-lg m-3" >間食</button>
        <button onclick="location.href='/home'" class="btn btn- btn-dark btn-lg m-3" >ホーム</button>
        </div>
    </div>
</div>
@endsection