@extends('layouts.base')
@section('title', 'Accueil')

@section('carousel')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="display-1 text-white mb-md-4 animated zoomIn">Club des Directeurs des Systèmes d'Information du Niger</h3>
                        <a href="{{route('teams.create')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Inscrivez-vous</a>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('img/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Créativité et innovation</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Conférences</h1>
                        <a href="{{route('teams.create')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Inscrivez-vous</a>
                        <a href="{{route('contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('img/forum.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Veille technologique</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Formations</h1>
                        <a href="{{route('teams.create')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Inscrivez-vous</a>
                        <a href="{{route('contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('img/echange.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Table ronde</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Echanges</h1>
                        <a href="{{route('teams.create')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Inscrivez-vous</a>
                        <a href="{{route('contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
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

    <!-- Facts Start-->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Membres Fondateurs</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">30</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary text-white ">Membres actifs</h5>
                            <h1 class="mb-0" data-toggle="counter-up">2000</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Membres d’honneur</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">300</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Qui sommes-nous ?</h5>
                        <h1 class="mb-0">L’Association « Club DSI NIGER»</h1>
                    </div>
                    <p class="mb-4">Il est créé au NIGER, une Association dénommée « Club des Directeurs des Systèmes d’Information du Niger», en abrégé « Club DSI NIGER »,  conformément à l’ordonnance 84-06 du 1er mars 1984 portant régime des associations modifiée et complétée par la loi N° 91-006 du 20 mai 1991.
                        Cette Association regroupe les Responsables Informatiques (Directeurs des Systèmes d'Information,  chefs de division informatique, Chefs Services Informatiques, etc.) des entreprises publiques et privées ou d’organismes internationaux résidant au Niger, qui acceptent les présents statuts et qui s’engagent à apporter leur contribution pour une bonne marche de l’Association.</p>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Avez-vous des questions ?</h5>
                            <h4 class="text-primary mb-0">+227 97 87 45 89</h4>
                        </div>
                    </div>
                    <a href="{{route('apropos')}}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Plus d'informations</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('img/about.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="e">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-uppercase">Notre équipe</h5>
                <h1 class="mb-0">Les Membres du Bureau Exécutif</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/sg.jpeg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="" style="color: #E05206">WADATAOU MAMAN Lawal</h4>
                            <p class="text-uppercase m-0">Président</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/sg.jpeg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="" style="color: #E05206">WADATAOU MAMAN Lawal</h4>
                            <p class="text-uppercase m-0">Sécrétaire Général</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/sg.jpeg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="" style="color: #E05206">WADATAOU MAMAN Lawal</h4>
                            <p class="text-uppercase m-0">Trésorier Général</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/sg.jpeg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="" style="color: #E05206">WADATAOU MAMAN Lawal</h4>
                            <p class="text-uppercase m-0">Secrétaire à la Communication, et aux Relations Extérieures</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-uppercase">Activités Récentes</h5>
                <h1 class="mb-0">Suivez-nous à travers nos activités</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('img/forum.jpg')}}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user me-2"></i>GADO Abou</small>
                                <small><i class="far fa-calendar-alt me-2"></i>01 Juillet, 2024</small>
                            </div>
                            <h4 class="mb-3">Assemblée générale du Club des DSI Niger</h4>
                            <p>L’association « Club DSI-NIGER » est une association qui regroupe les Directeurs des Systèmes d’Information et Responsables Informatiques des entreprises...</p>
                            <a class="text-uppercase" href="">Lire <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('img/forum2.jpg')}}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user me-2"></i>GADO Abou</small>
                                <small><i class="far fa-calendar-alt me-2"></i>14 Mars, 2024</small>
                            </div>
                            <h4 class="mb-3">Séance de formation au bon usage des outils de l’intelligence artificielle (IA)</h4>
                            <p>Dans les mesures d’application des orientations stratégiques pour l’intégration de l’intelligence artificielle (IA)...</p>
                            <a class="text-uppercase" href="">Lire <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('img/about2.jpg')}}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user me-2"></i>GADO Abou</small>
                                <small><i class="far fa-calendar-alt me-2"></i>11 Janvier, 2024</small>
                            </div>
                            <h4 class="mb-3">Lancement Officiel du Club des DSI Niger</h4>
                            <p>Il est créé au NIGER, une Association dénommée « Club des Directeurs des Systèmes d’Information du Niger», en abrégé « Club DSI NIGER »...</p>
                            <a class="text-uppercase" href="">Lire <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->


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
