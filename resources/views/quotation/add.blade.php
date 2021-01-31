@extends('layouts.quotationapp')

@section('title', 'add')

@section('content')
    <div class="container">
        <button type="button" class="btn btn-secondary" onclick="history.back()">戻る</button>
        <div class="row justify-content-center">
            {!! Form::open(['url' => route('regist'), 'method' => 'post']) !!} 
                <div class='form-group'>
                    {{Form::label('name', '名前')}}
                    {{Form::text('name', old('name', $item->name), ['class' => 'form-control', 'readonly'=>'readonly'])}}
                </div>
                <div class='form-group'>
                    {{Form::label('quotation', '名言')}}
                    {{Form::textarea('quotation', old('quotation', $item->quotation), ['class' => 'form-control', 'rows' => '3', 'readonly'=>'readonly'])}}
                </div>
                <div class='form-group'>
                    {{Form::label('category', 'カテゴリー')}}
                    {{Form::text('category', old('category', $item->category->category), ['class' => 'form-control', 'readonly'=>'readonly'])}}
                </div>
                <div class='form-group'>
                {!! Form::hidden('quote_id', $id) !!}
                {!! Form::submit('登録', ['class' => 'btn btn-primary w-25']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
