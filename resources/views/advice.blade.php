@extends('layouts.main')
@section('title', 'Записатись на послугу детейлінг студії в Івано-Франківську - CarStudio')
@section('meta_description', $seoDescription)
@section('content')
    @include('layouts.page-header',['title'=>'Відправити заявку для отримання послуги','name'=>'Записатись'])
    @include('layouts.advice-form',['bg'=>false])
@stop
