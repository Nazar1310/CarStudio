<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>{{$address}}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Пн - Пт : 09.00 - 18.00</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                @foreach($phones as $phone)
                    <small>{{$phone}}</small>
                @endforeach
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/car.studio.renaissance" target="_blank"><i class="fab fa-facebook-f"></i></a>
{{--                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-youtube"></i></a>--}}
                <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/car_studio_renaissance" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
