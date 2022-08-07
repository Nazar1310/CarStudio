<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('index')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarStudio</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('index')}}" class="nav-item nav-link active">Головна</a>
            <a href="{{route('about')}}" class="nav-item nav-link">Про нас</a>
            <a href="{{route('services')}}" class="nav-item nav-link">Послуги</a>
            <a href="{{route('contact')}}" class="nav-item nav-link">Контакти</a>
        </div>
        <a href="{{route('advice')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Консультація<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
