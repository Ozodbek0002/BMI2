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
                            <img class="img-fluid" src="{{ asset('asset/img/news1.png') }}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>07 May, 2023</small>
                            </div>
                            <h4 class="mb-3"> Xorazm viloyatida “Besh tashabbus olimpiadasi” doirasidagi musobaqalarning viloyat bosqichiga start berildi.  </h4>
                            <p>
                                “Besh tashabbus olimpiadasi” doirasidagi “Stol tennis” va “Shashka” musobaqalarning viloyat bosqichi tumanimizning Yoshlik sport majmuasida bo’lib o’tdi.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('asset/img/news2.png') }}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>08 May, 2023</small>
                            </div>
                            <h4 class="mb-3"> Gurlan tuman hokimligi majlislar zalida O‘zbekiston Respublikasi Vazirlar Mahkamasining 2023-yil 3-maydagi 183-son qarori .... </h4>
{{--                                bilan «Obod qishloq» va «Obod mahalla» dasturlarini jamoatchilik fikri asosida shakllantirish jarayonlarini tashkil etish yuzasidan seminar o‘tkazildi. </h4>--}}
                            <p>
                                Seminar tuman hokimi Umrbek Jumaniyazov, sektor rahbarlari, mutasaddi rahbarlar, raislari va hokim yordamchilari ishtirokida o‘tkazildi. Unda ushbu dasturga kiritilgan o‘zgarishlar batafsil tushuntirildi. Shuningdek, mavzu doirasida qatnashchilar berilgan savollarga  to‘liq javob oldilar.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('asset/img/img.png') }}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>28 May, 2023</small>
                            </div>
                            <h4 class="mb-3"> Gurlan tumani “Nurobod” mahallasida yashovchi, Ikkinchi jahon urushi qatnashchisi 104 yoshni qarshilagan Bobojon bobo Madaminov xonadonida bayram tadbiri bo‘lib o‘tdi </h4>
                            <p>
                                Bayram munosabati bilan Bobojon bobo xonadoniga viloyat hokimligi, tuman sektor rahbarlari, harbiylar, mehnat faxriylari va yoshlar tashrif buyurishdi.
                                <br>
                                Otaxonga Prezidentimizning Ikkinchi jahon urushida qozonilgan g‘alabaning 78 yilligi hamda Xotira va qadrlash kuni munosabati bilan urush faxriylariga yo‘llagan tabriknomasi, 18 million pul mukofoti hamda qimmatbaho sovg‘alar topshirildi.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Blog Start -->


@endsection
