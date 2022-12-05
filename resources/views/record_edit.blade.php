@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h4 style="text-align: center">12月{{ date("j", strtotime($record->date)) }}日</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('record_update') }}">
                        @csrf
                        <!-- ID送信 -->
                        <input type="hidden" value="{{ $record->id }}" name="id">
                        <!-- 日付送信 -->
                        <input type="hidden" value="{{ $record->date }}" name="date">
                        <!-- 体重入力欄 -->
                        <div class="form-group row">
                            <label for="weight" class="col-md-3 col-form-label text-md-right">体重(kg)</label>

                            <div class="col-md-6">
                                <input id="weight" type="number" step="0.1"  min="10" max="120" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ $record->weight }}" required autocomplete="weight" autofocus>
                                @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--カロリー入力欄--> 
                        <div class="form-group row">
                            <label for="kcal" class="col-md-3 col-form-label text-md-right">カロリー(kcal)</label>
                            <div class="col-md-6">
                                <input id="kcal" type="number" step="1"  min="0" max="3000" class="form-control @error('kcal') is-invalid @enderror" name="kcal" value="{{ $record->kcal }}" required autocomplete="kcal" autofocus>
                                @error('kcal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- タンパク質入力欄 -->
                        <div class="form-group row">
                            <label for="protein" class="col-md-3 col-form-label text-md-right">タンパク質(g)</label>
                            <div class="col-md-6">
                                <input id="protein" type="number" step="1"  min="0" max="3000" class="form-control @error('protein') is-invalid @enderror" name="protein" value="{{ $record->protein }}" required autocomplete="protein" autofocus>
                                @error('protein')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- 脂質入力欄 --> 
                        <div class="form-group row">
                            <label for="fat" class="col-md-3 col-form-label text-md-right">脂質(g)</label>
                            <div class="col-md-6">
                                <input id="fat" type="number" step="1"  min="0" max="3000" class="form-control @error('fat') is-invalid @enderror" name="fat" value="{{ $record->fat}}" required autocomplete="fat" autofocus>
                                @error('fat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- 炭水化物入力欄 -->
                        <div class="form-group row">
                            <label for="carb" class="col-md-3 col-form-label text-md-right">炭水化物(g)</label>
                            <div class="col-md-6">
                                <input id="carb" type="number" step="1"  min="0" max="3000" class="form-control @error('carb') is-invalid @enderror" name="carb" value="{{ $record->carb }}" required autocomplete="carb" autofocus>

                                @error('carb')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-dark">編集</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                        


@endsection
