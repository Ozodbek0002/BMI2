@extends('user.master')
@section('content')

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Yangiliklar</h5>
                <h1 class="mb-0"> Tumanimizda olib borilayotgan ishlar </h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('asset/img/blog-1.jpg') }}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2023</small>
                            </div>
                            <h4 class="mb-3">Oilaviy MTT foydalanishga topshirildi</h4>
                            <p>Oilaviy nodavlat maktabgacha ta'lim muassasalarining tashkil etilishi ma'lum ma'noda bolalarni tarbiya maskanlariga qamrash ko'lamini oshiradi.</p>
{{--                            <a class="text-uppercase" href="">Ko'proq o'qish <i class="bi bi-arrow-right"></i></a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('asset/img/blog-2.jpg') }}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>04 Jan, 2023</small>
                            </div>
                            <h4 class="mb-3">Xalqni rozi qilish asosiy maqsaddir</h4>
                            <p>So'nggi yillarda muhtaram Prezidentimizning tashabbuslari bilan mahallalar faoliyatini tashkil etishning mutlaqo yangi tizimi shakllandi. Har bir mahallaning “o'sish nuqtalari”...</p>
{{--                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('asset/img/blog-3.jpg') }}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>08 Jan, 2023</small>
                            </div>
                            <h4 class="mb-3">Oliy Majlis Qonunchilik palatasi deputati bilan uchrashuv </h4>
                            <p>Oliy Majlis Qonunchilik Palatasi deputati Nigora Qutlimuratova bugun Hazorasp tumanida bo'lib, tuman hokimligida O'zbekiston Respublikasi ...</p>
{{--                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->


@endsection
