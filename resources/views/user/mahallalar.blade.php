@extends('user.master')
@section('content')

    <!--Pages start-->
    <div class="container">
        <div class="row">
            <span class="ml1 col">
                <span class="text-wrapper">
                  <h3 class="letters"> Tumanimzdagi barcha Mahallalar ! </h3>
                </span>
            </span>

            {{--            --}}
            {{--            <button type="button" class="bi bi-box-arrow-in-right btn btn-danger col-4"><a--}}
            {{--                    class="text-light text-uppercase" href="admin.php"> Mahalla pasporti yig'ma jadvali</a>--}}
            {{--            </button>--}}

            <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

            <script>// Wrap every letter in a span
                var textWrapper = document.querySelector('.ml1 .letters');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                anime.timeline({loop: true})
                    .add({
                        targets: '.ml1 .letter',
                        scale: [0.3, 1],
                        opacity: [0, 1],
                        translateZ: 0,
                        easing: "easeOutExpo",
                        duration: 600,
                        delay: (el, i) => 70 * (i + 1)
                    }).add({
                    targets: '.ml1 .line',
                    scaleX: [0, 1],
                    opacity: [0.5, 1],
                    easing: "easeOutExpo",
                    duration: 700,
                    offset: '-=875',
                    delay: (el, i, l) => 80 * (l - i)
                }).add({
                    targets: '.ml1',
                    opacity: 0,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1000
                });
            </script>

        </div>
    </div>
    <!--pages end-->




    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Ma'lumot</h5>
                        <h1 class="mb-0"> Tumandagi Mahallalar </h1>
                    </div>
                    <div class="row g-0 mb-3">
                        <div class="col-md-12" data-wow-delay="0.2s">
                            @foreach($mahallas as $mahalla)
                                <a href="{{ route('passport',$mahalla->id) }}">
                                    <h4 class="mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                  d="M0 21V10l7.5-5l7.5 5v11h-5v-7H5v7H0M24 2v19h-7V8.93l-1-.66V6h-2v.93l-4-2.66V2h14m-3 12h-2v2h2v-2m0-4h-2v2h2v-2m0-4h-2v2h2V6Z"/>
                                        </svg>
                                        {{ $mahalla->name }}
                                    </h4>
                                </a>
                                <br>
                            @endforeach
                        </div>
                    </div>
                    {{--                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">--}}
                    {{--                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"--}}
                    {{--                             style="width: 60px; height: 60px;">--}}
                    {{--                            <i class="fa fa-phone-alt text-white"></i>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="ps-4">--}}
                    {{--                            <h5 class="mb-2">Mahalla raisi: <b>Bekchanova Shaxnoza Baxodirovna</b></h5>--}}
                    {{--                            <h4 class="text-primary mb-0">+998 99 121 71 71</h4>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>

                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                             src="{{ asset('asset/img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection

@section('script')

@endsection
