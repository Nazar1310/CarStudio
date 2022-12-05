@extends('layouts.main')
@section('title', $service->seo_title)
@section('meta_description', $seoDescription)
@section('content')
    @include('layouts.page-header',['title'=>$service->title,'name'=>$service->name])
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="/img/{{$service->slug_url}}/{{$service->prev}}" style="object-fit: cover;" alt="{{$service->slug_url}} preview">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h2 class="display-4 text-white mb-0">{{$service->price}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// Детальніше про послугу //</h6>
                    <h2 class="mb-4">{{$service->title}}</h2>
                    <p class="mb-4">{!!$service->desc!!}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// {{$service->name}} //</h6>
                <h2 class="mb-5">Наші роботи</h2>
            </div>
            <div class="row g-4">
                @foreach(explode(',',$service->media) as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                @if(str_contains($item,'mp4'))
                                    <video class="img-fluid bg-dark" controls="" playsinline="" webkit-playsinline="">
                                        <source src="/img/{{$service->slug_url}}/{{$item}}" type="video/mp4">
                                        Your browser does not support HTML video.
                                    </video>
                                @else
                                    <img class="img-fluid" src="/img/{{$service->slug_url}}/{{$item}}" alt="{{$service->slug_url}} example">
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.phone-number')
@stop
