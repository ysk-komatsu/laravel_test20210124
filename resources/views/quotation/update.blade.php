@extends('layouts.quotationapp')

@section('title', 'update')

@section('content')
    {!! Form::open(['url' => '/quotation/add', 'method' => 'post']) !!} 
    <!-- バリデーション -->
    @if($errors->has('name'))
        <p>{{$errors->first('name')}}</p>
    @endif
    <div class='container'>
        <div>
            <div>
                <div class='m-2'>
                    {{Form::label('name', '名前')}}
                </div>
                <div>
                    {{Form::text('name', old('name', $item->name))}}
                </div>
            </div>
            <div>
                <div class='m-2'>
                    {{Form::label('quotation', '名言')}}
                </div>
                <div>
                    {{Form::textarea('quotation', old('quotation', $item->quotation), ['rows' => '5'])}}
                </div>
            </div>
            <div>
                <div class='m-2'>
                    {{Form::label('favorite', 'お気に入り度')}}
                </div>
                <div>
                {{Form::select('favorite', ['1' => '★', '2' => '★★', '3' => '★★★', '4' => '★★★★', '5' => '★★★★★'], $item->favorite)}}
                </div>
            </div>
            <div class='m-2'>
            {!! Form::submit('編集完了', ['class' => 'btn btn-primary w-25']) !!}
            </div>
    {!! Form::close() !!}
        </div>
    </div>
@endsection
