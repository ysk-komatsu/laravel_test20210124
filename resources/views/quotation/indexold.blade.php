@extends('layouts.quotationapp')
@section('title', 'quotation')

@section('menubar')
  @parent
  メインページ
@endsection

@section('script')
  <script>
    $(function(){
      $('.btn-dell').click(function(){
        if(confirm("本当に削除しますか？")){
    //そのままsubmit（削除）
        }else{
    //cancel
          return false;
        }
      });
    });
  </script>
@endsection

@section('content')

  <!-- 登録ページに遷移 -->
  {!! Form::open(['url' => '/quotation/add', 'method' => 'get']) !!}
    {!! Form::submit('登録', ['class' => 'btn btn-primary', 'id' => '']) !!}
  {!! Form::close() !!}

  <!-- データベースの表示 -->
  <table>
    <tr>
      <th>名前</th>
      <th>名言</th>
      <th>お気に入り度</th>
      <th>編集</th>
      <th>削除</th>
    </tr>
    @foreach($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->quotation}}</td>
        <td>{{$score[$item->favorite]['label']}}</td>
        <td>
          {!! Form::open(['url' => '/quotation/'.$item->id.'/update', 'method' => 'get']) !!}
            {!! Form::submit('編集', ['class' => 'form-control', 'id' => '']) !!}
          {!! Form::close() !!}
        </td>
        <td>
          {!! Form::open(['url' => '/quotation/'.$item->id, 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-dell', 'id' => '']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>   
@endsection
 
@section('footer')
2021 task laravel
@endsection