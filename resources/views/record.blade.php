@extends('layouts.app')

@section('content')
<header><h1 style="text-align: center">11月</h1></header>
    <div class="container">
        <div class="main">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">体重(kg)</th>
                    <th scope="col">カロリー(kcal)</th>
                    <th scope="col">タンパク質(g)</th>
                    <th scope="col">脂質(g)</th>
                    <th scope="col">炭水化物(g)</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($record as $record)
                <tr>
                    <th scope="row">{{ date("j", strtotime($record->date)) }}</th>
                    <td>{{ $record->weight }}</td>
                    <td>{{ $record->kcal }}</td>
                    <td>{{ $record->protein }}</td>
                    <td>{{ $record->fat }}</td>
                    <td>{{ $record->carb }}</td>
                    <td><button onclick="location.href='/record_edit/{{$record->id}}'" class="btn btn-outline-secondary btn-sm" >編集</button></td>
                    
                </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>
    <footer>
    <div class="d-grid gap-2 col-4 mx-auto text-center">
        <button onclick="location.href='/add' " class="btn btn-dark btn-lg" >データを入力する</button>
    </div>
    <div class="text-center">
        <button onclick="location.href='/home'" class="btn btn-outline-dark btn-lg m-3" >ホームへ戻る</button>
    </div>
                    

    </footer>


            


    @endsection






    






