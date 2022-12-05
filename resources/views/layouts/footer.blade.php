<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Адреса</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$address}}</p>
                @foreach($phones as $phone)
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$phone}}</p>
                @endforeach
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$email}}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/car_studio_renaissance" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Години роботи</h4>
                <h6 class="text-light">Понеділок - П'ятниця:</h6>
                <p class="mb-4">09.00 - 18.00</p>
                <h6 class="text-light">Субота - Неділя:</h6>
                <p class="mb-0">11.00 - 16.00</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Послуги</h4>
                @foreach($services as $service)
                    <a class="btn btn-link" href="{{route('service',$service->slug_url)}}">{{$service->name}}</a>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Розсилка</h4>
                <p>Будьте першими, хто дізнається про новинки, переваги та акції.</p>
                <form method="POST" action="{{route('newsletter')}}" class="position-relative mx-auto" style="max-width: 400px;">
                    @csrf
                    <input type="email" name="email" class="form-control border-0 w-100 py-3 ps-4 pe-5" placeholder="Ваш email" required>
                    <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"><i class="fa fa-arrow-right ms-3"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy;2022 <a class="border-bottom" href="{{route('index')}}">CarStudio</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{route('index')}}">Головна</a>
                        <a href="{{route('contact')}}">Допомога</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
