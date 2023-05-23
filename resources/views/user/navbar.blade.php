

<div class="container-fluid position-relative p-0">

    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{url('/')}}" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-users me-2"></i> Mahallalar   </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('main')}}" class="nav-item nav-link {{ Route::is('main') ? 'active' : '' }} "> Bosh sahifa </a>
                <div class="nav-item dropdown">
                    <a href="{{route('mahallalar')}}" class="nav-link nav-link   {{ Route::is('mahallalar') ? 'active' : '' }} "> Mahallalarimiz </a>
                </div>
            </div>
        </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('asset/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn text-uppercase">  Tumanimizdagi barcha mahallar </h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('asset/img/carousel-2.jpg') }} " alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn text-uppercase">Mahallalar haqida to'liq malumot  </h1>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</div>
