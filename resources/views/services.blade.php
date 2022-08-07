@extends('layouts.main')
@section('title', 'Послуги')
@section('meta_description', '')
@section('content')
    @include('layouts.page-header',['title'=>'Наші Послуги','name'=>'Послуги'])
    @include('layouts.service-list')
    @include('layouts.phone-number')
@stop
