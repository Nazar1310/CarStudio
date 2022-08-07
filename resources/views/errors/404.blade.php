@extends('layouts.main')
@section('title', 'Сторінку не знайдено')
@section('meta_description', 'Сторінку не знайдено')
@section('content')
    @include('layouts.page-header',['title'=>'Сторінку не знайдено','name'=>'404'])
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h2 class="display-1">404</h2>
                    <h2 class="mb-4">Сторінку не знайдено</h2>
                    <p class="mb-4">На жаль, сторінки, яку ви шукали, немає на нашому сайті! Можливо, перейдіть на нашу домашню сторінку або спробуйте скористатися пошуком?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('index')}}">Повернутися на головну</a>
                </div>
            </div>
        </div>
    </div>
@stop
