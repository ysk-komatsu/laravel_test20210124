@extends('layouts.quotationapp')

@section('title', 'index')

@section('content')
    <div class=container>
        <div class='title text-center'>あなただけの<br>名言集を作りましょう</div>
        <!-- 登録ページに遷移 -->
        <div class='py-2'>
            {!! Form::open(['url' => route('login'), 'method' => 'get']) !!}
                {!! Form::submit('ログイン or 新規登録', ['class' => 'btn btn-primary w-100', 'id' => '']) !!}
            {!! Form::close() !!}
        </div>

        <!-- データベースの表示 -->
        <h2 class='text-center py-2'>
            最新のランキング
        </h2>
        <div class='table-responsive'>
            <table class='table table-bordered bg-white'>
                <thead class='thead-light'>
                    <tr>
                        <th scope="col">名前</th>
                        <th scope="col">名言</th>
                        <th class="text-nowrap" scope="col">追加数</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td class="text-nowrap" style="width:20%">{{$item->name}}</td>
                        <td style="width:70%">{{$item->quotation}}</td>
                        <td style="width:10%">{{$item->score}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection