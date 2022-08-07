@extends('layouts.main')
@section('title', 'Головна')
@section('meta_description', '')
@section('content')
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($services as $key=>$service)
                    <div class="carousel-item {{$key == 0?'active':''}}">
                        <img class="w-100" src="/img/carousel-bg-{{$key+1}}.jpg" alt="Image">
                        <div class="carousel-caption d-flex align-items-center">
                            <div class="container">
                                <div class="row align-items-center justify-content-center justify-content-lg-start">
                                    <div class="col-10 col-lg-7 text-center text-lg-start">
                                        <h6 class="text-white text-uppercase mb-3 animated slideInDown">// CarStudio //</h6>
                                        <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">{{$service->title}}</h1>
                                        <a href="{{route('service',$service->slug_url)}}" class="btn btn-primary py-3 px-5 animated slideInDown">Дізнатись більше<i class="fa fa-arrow-right ms-3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Якісне обслуговування</h5>
                            <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Досвідчені працівники</h5>
                            <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Сучасне обладнання</h5>
                            <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.service-list')
    @include('layouts.advice-form')
    @include('layouts.team')
    @include('layouts.reviews')
@stop
