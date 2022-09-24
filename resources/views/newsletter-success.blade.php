@extends('layouts.main')
@section('title', 'Ви успішно підписались')
@section('meta_description', '')
@section('content')
    <div class="container-xxl py-5">
        <div class="container text-center pt-5 pb-5">
            <h2 class="mb-4">Ви успішно підписались на розсилку новин.</h2>
            <a href="{{route('index')}}" class="btn btn-primary py-3 px-5">Назад на головну<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </div>
@stop
