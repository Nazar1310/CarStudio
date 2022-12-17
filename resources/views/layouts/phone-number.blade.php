<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-6">
                <h6 class="text-primary text-uppercase">// Гаряча лінія //</h6>
                <h2 class="mb-4">Маєте питання?</h2>
                <p class="mb-0">Якщо у вас виникли питання, або потрібна консультація, телефонуйте на нашу гарячу лінію, якщо ви не можете до нас дозвонитись ви можете заповнити <a href="{{route('advice')}}">дану форму</a> і впродовж декількох годин наш спеціаліст з вами зв'яжеться.</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                    @foreach($phones as $phone)
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i><a style="color: white" href="tel:{{$phone}}">{{$phone}}</a></h3>
                    @endforeach
                    <a href="{{route('contact')}}" class="btn btn-secondary py-3 px-5">Контакти<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
