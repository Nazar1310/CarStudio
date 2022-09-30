<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Наші Послуги //</h6>
            <h2 class="mb-5">Ознайомтеся з нашими послугами</h2>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    @foreach($services as $key=>$service)
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 {{$key == 0?'active':''}}" data-bs-toggle="pill" data-bs-target="#tab-pane-{{$key}}" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">{{$service->name}}</h4>
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    @foreach($services as $key=>$service)
                        <div class="tab-pane fade {{$key == 0?'show active':''}}" id="tab-pane-{{$key}}">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="/img/{{$service->slug_url}}/{{$service->prev}}" style="object-fit: cover;" alt="{{$service->slug_url}} preview">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">{{$service->title}}</h3>
                                    <p class="mb-4">{!!mb_substr($service->desc,0,350)!!}...</p>
                                    <a href="{{route('service',$service->slug_url)}}" class="btn btn-primary py-3 px-5 mt-3">Детільніше<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
