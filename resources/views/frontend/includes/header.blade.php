<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{$data['settings']->name}}</title>
    <meta name="description" content="{!! $data['settings']->description !!}">
    <meta name="keywords" content="{!! $data['settings']->keyword !!}">
    <!-- Favicons -->
    <link href="{{asset('images/settings/'.$data['settings']->fav_icon)}}" rel="icon">
    <link href="{{asset('assets/frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/vendor/aos/aos.css" rel="stylesheet')}}">
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/frontend/css/main.css')}}" rel="stylesheet">
</head>
<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="{{route('frontend.home')}}" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset('images/settings/'.$data['settings']->fav_icon)}}" style="border-radius:50%;" alt="">
            <h1>{{$data['settings']->name}}</h1>
            <span>.</span>
        </a>
        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{route('frontend.home')}}#hero" class="active">HOME</a></li>
                <li><a href="{{route('frontend.home')}}#about">ABOUT</a></li>
                <li><a href="{{route('frontend.home')}}#services">SERVICES</a></li>
                <li><a href="{{route('frontend.home')}}#portfolio">PORTFOLIO</a></li>
                <li><a href="{{route('frontend.home')}}#team">TEAM</a></li>
                <li><a href="{{route('frontend.home')}}#contact">CONTACT</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!-- End Nav Menu -->
        <div class="social">
            <a href="{{$data['social_medias']->twitter}}"><i class="bi bi-twitter"></i></a>
            <a href="{{$data['social_medias']->facebook}}"><i class="bi bi-facebook"></i></a>
            <a href="{{$data['social_medias']->instagram}}"><i class="bi bi-instagram"></i></a>
            <a href="{{$data['social_medias']->linked_in}}"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</header><!-- End Header -->
