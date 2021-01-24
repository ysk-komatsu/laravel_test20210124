@extends('layouts.quotationapp')
@section('title', 'quotation.add')

@section('menubar')
  @parent
  登録ページ
@endsection

@section('content')
    {!! Form::open(['url' => '/quotation/add', 'method' => 'post']) !!} 

        <!-- バリデーション -->
        @if($errors->has('name'))
            <p>{{$errors->first('name')}}</p>
        @endif
        <div>
            <div class='m-2'>
                {{Form::label('name', '名前')}}
            </div>
            <div>
                {{Form::text('name', old('name'))}}
            </div>
            <div class='m-2'>
                {{Form::label('quotation', '名言')}}
            </div>
            <div>
                {{Form::textarea('quotation', old('quotation'), ['row' => '3'])}}
            </div>

            <div class='m-2'>
                {{Form::label('favorite', 'お気に入り度')}}
            </div>
            <div>
                {{Form::select('favorite', ['1' => '★', '2' => '★★', '3' => '★★★', '4' => '★★★★', '5' => '★★★★★'])}}
            </div>
        </div>
        <div class='m-2'>
        {!! Form::submit('登録', ['class' => 'btn btn-primary w-25']) !!}
        </div>

    {!! Form::close() !!}
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
