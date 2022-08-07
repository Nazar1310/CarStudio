@extends('layouts.main')
@section('title', 'Консультація')
@section('meta_description', '')
@section('content')
    @include('layouts.page-header',['title'=>'Отримати Консультацію','name'=>'Консультація'])
    @include('layouts.advice-form')
    @include('layouts.team')
@stop
