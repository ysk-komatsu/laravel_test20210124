@extends('layouts.quotationapp')

@section('title', 'add')

@section('content')
    <div class="container">
        <button type="button" class="btn btn-secondary" onclick="history.back()">戻る</button>
        <div class="row justify-content-center">
            {!! Form::open(['url' => '/quotation/create', 'method' => 'post']) !!} 
            <!-- バリデーション -->
            @if($errors->has('name'))
                <dir class="alert alert-danger" role="alert">
                    {{$errors->first('name')}}
                </dir>
            @endif
            @if($errors->has('quotation'))
            <dir class="alert alert-danger" role="alert">
                    {{$errors->first('quotation')}}
                </dir>
            @endif
                <div class='form-group'>
                    {{Form::label('name', '名前')}}
                    {{Form::text('name', old('name'), ['class' => 'form-control'])}}
                </div>
                <div class='form-group'>
                    {{Form::label('quotation', '名言')}}
                    {{Form::textarea('quotation', old('quotation'), ['class' => 'form-control', 'rows' => '3'])}}
                </div>
                <div class='form-group'>
                    {{Form::label('category', 'カテゴリー')}}
                    {{Form::select('category_id', ['1' => '著名人', '2' => 'スポーツ選手', '3' => 'ドラマ', '4' => 'アニメ'], '1', ['class' => 'form-control'])}}
                </div>
                <div class='form-group'>
                {!! Form::hidden('score', 1) !!}
                {!! Form::submit('登録', ['class' => 'btn btn-primary w-25']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection