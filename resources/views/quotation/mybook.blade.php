@extends('layouts.quotationapp')

@section('title', 'mypage')

@section('content')
    <div class='container'>
        {!! Form::open(['url' => route('list'), 'method' => 'get']) !!}
            {!! Form::submit('追加', ['class' => 'btn btn-primary w-100', 'id' => '']) !!}
        {!! Form::close() !!}
    @if ($items->isEmpty())
        <p class='text-center text-danger py-3'>まだマイ名言集が作成されていません<br>上記の追加より作成してください</p>
    @else
        <div class='table-responsive py-3'>
            <table class='table table-bordered bg-white'>
                <thead class='thead-light'>
                    <tr>
                        <th scope="col">名前</th>
                        <th colspan='3'>名言</th>
                    </tr>
                </thead>
                @foreach($items as $item)
                    <tr>
                        <td class="text-nowrap">{{$item->quotation->name}}</td>
                        <td>{{$item->quotation->quotation}}</td>
                        <td>
                        {!! Form::open(['url' => route('edit', $item->quotation_id), 'method' => 'get']) !!}
                            {!! Form::submit('編集', ['class' => 'btn w-auto', 'id' => '']) !!}
                        {!! Form::close() !!}
                        </td>
                        <td>
                        {!! Form::open(['url' => route('delete', $item->id), 'method' => 'delete']) !!}
                            {!! Form::submit('削除', ['class' => 'btn btn-danger w-auto', 'onclick' => 'return confirm("本当に削除しますか？");', 'id' => '']) !!}
                        {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif
    </div>
@endsection