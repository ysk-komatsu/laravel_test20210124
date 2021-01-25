@extends('layouts.quotationapp')

@section('title', 'index')

@section('content')
  <!-- 登録ページに遷移 -->
    {!! Form::open(['url' => '/quotation/add', 'method' => 'get']) !!}
        {!! Form::submit('登録', ['class' => 'btn btn-primary', 'id' => '']) !!}
    {!! Form::close() !!}

  <!-- データベースの表示 -->
    <div class='table-responsive'>
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
                                {{$score[$item->favorite]['label']}}
                            </div>
                            <div class='col text-right'>
                                {!! Form::open(['url' => '/quotation/'.$item->id.'/update', 'method' => 'get']) !!}
                                    {!! Form::submit('編集', ['class' => 'btn', 'id' => '']) !!}
                                {!! Form::close() !!}
                            </div>
                            <div class='col text-right'>
                                {!! Form::open(['url' => '/quotation/'.$item->id, 'method' => 'delete']) !!}
                                    {!! Form::submit('削除', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("本当に削除しますか？");', 'id' => '']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection