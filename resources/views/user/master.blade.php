
    <!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}" />
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <title>Mahalla pasporti</title>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Favicon -->
    <link href="{{ asset('asset/img/favicon.ico') }} " rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }} " rel="stylesheet">
    <link href="{{ asset('asset/lib/animate/animate.min.css') }}" rel="stylesheet  ">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }} " rel="stylesheet ">

    <!-- Template Stylesheet -->
    <link href=" {{ asset('asset/css/style.css') }} " rel="stylesheet">

</head>

<body>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->




<!-- Navbar Start -->

@include('user.navbar');

<!-- Navbar End -->



@yield('content')


<!-- Footer Start -->
@include('user.footer')
<!-- Footer End -->



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('asset/lib/wow/wow.min.js') }} "></script>
<script src="{{ asset('asset/lib/easing/easing.min.js') }} "></script>
<script src="{{ asset('asset/lib/waypoints/waypoints.min.js') }} "></script>
<script src="{{ asset('asset/lib/counterup/counterup.min.js') }} "></script>
<script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }} "></script>

<!-- Template Javascript -->
<script src="{{ asset('asset/js/main.js') }} "></script>
</body>
</html>
