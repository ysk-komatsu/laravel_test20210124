@extends('layouts.quotationapp')
@section('title', 'quotation.update')

@section('menubar')
  @parent
  編集ページ
@endsection

@section('content')
    {!! Form::open(['url' => '/quotation/'.$item->id, 'method' => 'put']) !!}
        {{Form::token()}}

        <!-- バリデーション -->
        @if($errors->has('name'))
            <p>{{$errors->first('name')}}</p>
        @endif

        {{Form::label('name', '名前')}}
        {{Form::text('name', old('name', $item->name))}}

        {{Form::label('quotation', '名言')}}
        {{Form::textarea('quotation', old('quotation', $item->quotation))}}

        {{Form::label('favorite', 'お気に入り度')}}
        {{Form::select('favorite', ['1' => '★', '2' => '★★', '3' => '★★★', '4' => '★★★★', '5' => '★★★★★'], $item->favorite)}}
        <!-- <select>
            @foreach(config('score') as $key => $score)
            <option value="{{ $key }}">{{ $score['label'] }}</option>
            @endforeach
        </select> -->

        {!! Form::submit('編集完了') !!}

    {!! Form::close() !!}
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
