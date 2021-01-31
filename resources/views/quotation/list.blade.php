@extends('layouts.quotationapp')

@section('title', 'list')

<?php
$categories =['0'=>'一覧', '1'=>'著名人'];
?>

@section('content')
    <div class=container>
        @if (session('flash_message'))
            <div class="text-center alert alert-danger" role="alert">
                {{ session('flash_message') }}
            </div>
            @endif
        <div class='title text-center'>名言集リスト</div>
        
        <div class='row'>
            <div class='col py-2'>
                {!! Form::open(['url' => route('create'), 'method' => 'get']) !!}
                    {!! Form::submit('リストにない名言を追加', ['class' => 'btn btn-primary w-100', 'id' => '']) !!}
                {!! Form::close() !!}
            </div>
            <div class='col py-2'>
                {!! Form::open(['url' => route('mypage'), 'method' => 'get']) !!}
                    {!! Form::submit('マイ名言集を表示', ['class' => 'btn btn-danger w-100', 'id' => '']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <div class="btn-group d-flex" role="group">
            <a href="/quotation/list?category_id=0" class="btn btn-outline-primary w-100">一覧</a>
            <a href="/quotation/list?category_id=1" class="btn btn-outline-primary w-100">著名人</a>
            <a href="/quotation/list?category_id=2" class="btn btn-outline-primary w-100">スポーツ</a>
            <a href="/quotation/list?category_id=3" class="btn btn-outline-primary w-100">ドラマ</a>
            <a href="/quotation/list?category_id=4" class="btn btn-outline-primary w-100">アニメ</a>
        </div>
        <!-- データベースの表示 -->
        <div class='table-responsive pt-2'>
            <table class='table table-bordered bg-white'>
                <thead class='thead-light'>
                    <tr>
                        <th scope="col">名前</th>
                        <th scope="col">名言</th>
                    </tr>
                </thead>
                @foreach($items as $item)
                <tr>
                    <td class="text-nowrap">{{$item->name}}</td>
                    <td>{{$item->quotation}}</td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class='col'>
                                    追加数：{{$item->score}}
                                </div>
                                <div class='col text-right'>
                                    {!! Form::open(['url' => route('check', $item->id), 'method' => 'get']) !!}
                                        {!! Form::submit('追加', ['class' => 'btn', 'id' => '']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection