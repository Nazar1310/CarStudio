<div class="container-fluid {{$bg?'bg-secondary booking':''}} my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h2 class="{{$bg?'text-white':''}} mb-4">Надання послуг від наших найкращих спеціалістів</h2>
                    <p class="{{$bg?'text-white':''}} mb-0">Заповніть дану форму та відправте заявку, впродовж декількох годин наш спеціаліст зв'яжеться з вами, для узгодження зручної, для вас, дати та часу прийому.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h2 class="text-white mb-4">Відправити заявку</h2>
                    <form method="POST" action="{{route('advice-post')}}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input name="name" type="text" class="form-control border-0" placeholder="Ваше Ім'я" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input name="phone" type="text" class="form-control border-0" placeholder="Телефон" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <select name="service" class="form-select border-0" style="height: 55px;" required>
                                    <option selected>Виберіть послугу</option>
                                    @foreach($services as $key=>$service)
                                        <option value="{{$service->id}}">{{$service->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control border-0" placeholder="Додатковий коментар"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Відправити</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
