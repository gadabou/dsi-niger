@extends('layouts.base')
@section('title', 'Vision')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Notre Vision</h1>
                <a href="" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Vision</a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Vision Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px; color: #0DB02B">
                <h5 class="fw-bold text-uppercase">Notre vision</h5>
                <h1 class="mb-0">Promouvoir l'usage des systèmes d'information</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Promotion le partage d'expériences</h4>
                        <p class="m-0">Promouvoir le partage d’expériences entre les DSI</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{route('vision')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Colaboration entre DSI</h4>
                        <p class="m-0">Le développement d’une synergie entre les Directeurs des Systèmes d’Information, les Responsables Informatiques du NIGER</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{route('vision')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Formations</h4>
                        <p class="m-0">L’ouverture vers le monde de l’éducation et de la recherche scientifique en étant une force de proposition dans les programmes informatiques des grandes écoles, instituts et universités</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{route('vision')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Echange</h4>
                        <p class="m-0">L’échange de points de vue sur les grandes orientations dans le domaine des Technologies de l’Information et de la Communication (TIC) au NIGER</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{route('vision')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{asset('img/vendor-1.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-2.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-3.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-4.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-5.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-6.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-7.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-8.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-9.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

@endsection
