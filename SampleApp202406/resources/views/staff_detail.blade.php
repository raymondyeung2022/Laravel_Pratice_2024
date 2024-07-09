@extends('adminlte::page')

@section('title', '職員詳細')

@include('parts.common')

@section('content_header')
    <h1>職員詳細</h1>
@stop

@section('content')
    <h4>(問題1との答えをここで表示しないように、部分の項目だけ表示します)</h4>
    <div class="row">
        <div class="col-2">職員ID: </div>
        <div class="col-2">{{ $staff_detail->id }}</div>
    </div>
    <br/>
    <div class="row">
        <div class="col-2">職員名: </div>
        <div class="col-2">{{ $staff_detail->id }}</div>
    </div>
    <br/>
    <div class="row">
        <div class="col-2">生年月日: </div>
        <div class="col-2">{{ $staff_detail->birth_date }}</div>
    </div>
    <br/>
    <div class="row">
        <div class="col-2">メールアドレス: </div>
        <div class="col-2">{{ $staff_detail->email }}</div>
    </div>
    <br/>
    <div class="row">
        <div class="col-2">自己紹介: </div>
        <div class="col-2">{{ $staff_detail->self_intro }}</div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script type="text/javascript">
    </script>
@stop
