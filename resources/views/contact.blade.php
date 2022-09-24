@extends('layouts.main')
@section('title', 'Контакти детейлінг студії в Івано-Франківську: e-mail, телефон, адреса - CarStudio')
@section('meta_description', $seoDescription)
@section('content')
    @include('layouts.page-header',['title'=>'Наші Контакти','name'=>'Контакти'])
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Контакти //</h6>
                <h2 class="mb-5">Звертайтеся з будь-якими запитаннями</h2>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Адреса //</h5>
                                <p class="m-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$address}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Телефон //</h5>
                                <p class="m-0"><i class="fa fa-phone-alt text-primary me-2"></i>{{$phone}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Email //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>{{$email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p>Ви можете залишити своє повідомлення тут</p>
                        <form method="POST" action="{{route('contact-post')}}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Ваше Ім'я">
                                        <label for="name">Ваше Ім'я</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Ваш Email">
                                        <label for="email">Ваш Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="message" class="form-control" placeholder="Залиште повідомлення тут" id="message" style="height: 100px" required></textarea>
                                        <label for="message">Повідомлення</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Відправити Повідомлення</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
