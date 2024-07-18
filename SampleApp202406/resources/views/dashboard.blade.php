<?php

$configs = [
    "paging" => false,
    "searching" => false,
    "ordering" => false
];

$heads = [
    ['label' => '職員ID', 'no-export' => true,],
    ['label' => "職員名", 'no-export' => true,],
    ['label' => '生年月日', 'no-export' => true,],
    ['label' => '性別', 'no-export' => true,],
    ['label' => 'メールアドレス', 'no-export' => true,],
    ['label' => 'ステータス', 'no-export' => true,],
];
        
?>

@extends('adminlte::page')

@section('title', 'ダッシュボード')

@include('parts.common')

@section('content_header')
    <h1>ダッシュボード</h1>
@stop

@section('content')
    <h3>問題一覧</h3>
    <br/>
    <div class="row">
        <div class="col-1"><a href="/question1" class="btn btn-info" role="button">問題1</a></div>
        <div class="col-1"><a href="/question2" class="btn btn-info" role="button">問題2</a></div>
        <div class="col-1"><a href="/question3" class="btn btn-info" role="button">問題3</a></div>
        <div class="col-1"><a href="/question4" class="btn btn-info" role="button">問題4</a></div>
        <div class="col-1"><a href="/question5" class="btn btn-info" role="button">問題5</a></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-1"><a href="/question6" class="btn btn-info" role="button">問題6</a></div>
        <div class="col-1"><a href="/question7" class="btn btn-info" role="button">問題7</a></div>
        <div class="col-1"><a href="/question8" class="btn btn-info" role="button">問題8</a></div>
        <div class="col-1"><a href="/question9" class="btn btn-info" role="button">問題9</a></div>
        <div class="col-1"><a href="/question10" class="btn btn-info" role="button">問題10</a></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-1"><a href="/question11" class="btn btn-info" role="button">問題11</a></div>
        <div class="col-1"><a href="/question12" class="btn btn-info" role="button">問題12</a></div>
        <div class="col-1"><a href="/question13" class="btn btn-info" role="button">問題13</a></div>
        <div class="col-1"><a href="/question14" class="btn btn-info" role="button">問題14</a></div>
        <div class="col-1"><a href="/question15" class="btn btn-info" role="button">問題15</a></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-1"><a href="/question16" class="btn btn-info" role="button">問題16</a></div>
        <div class="col-1"><a href="/question17" class="btn btn-info" role="button">問題17</a></div>
        <div class="col-1"><a href="/question18" class="btn btn-info" role="button">問題18</a></div>
        <div class="col-1"><a href="/question19" class="btn btn-info" role="button">問題19</a></div>
        <div class="col-1"><a href="/question20" class="btn btn-info" role="button">問題20</a></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-1"><a href="/question21" class="btn btn-info" role="button">問題21</a></div>
        <div class="col-1"><a href="/question22" class="btn btn-info" role="button">問題22</a></div>
        <div class="col-1"><a href="/question23" class="btn btn-info" role="button">問題23</a></div>
        <div class="col-1"><a href="/question24" class="btn btn-info" role="button">問題24</a></div>
        <div class="col-1"><a href="/question25" class="btn btn-info" role="button">問題25</a></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-1"><a href="/question26" class="btn btn-info" role="button">問題26</a></div>
        <div class="col-1"><a href="/question27" class="btn btn-info" role="button">問題27</a></div>
        <div class="col-1"><a href="/question28" class="btn btn-info" role="button">問題28</a></div>
    </div>

    <br/>
    
    <br/>

    <div><strong>*「Page Not Found」の場合は必ず「php artisan optimize」を実行してから再度アクセスしてください</strong></div>
@stop

@section('css')
@stop

@section('js')
@stop
