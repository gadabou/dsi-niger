@extends('layouts.base')
@section('title', "Détail de l'évènements")


@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Lire l'article</h1>
                <a href="" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Lire l'article</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{asset('img/blog1.jpeg')}}" alt="">
                        <h1 class="mb-4">Le Ministre de la Communication, des Postes et de L'Economie Numérique a reçu en audience les membres du bureau exécutif du Club des DSI du Niger</h1>
                        <p>Niger 🇳🇪,
                            Niamey, 21 juin 2024, le Ministre de la Communication, des Postes et de L'Economie Numérique a reçu en audience les membres du bureau exécutif du Club des Directeurs des Systèmes d'Information (DSI) du Niger; c'était en présence, de la Conseillère Technique, du Secrétaire Général Adjoint et du Directeur de la Législation dudit ministère.</p>
                    </div>
                    <!-- Blog Detail End -->

                    <!-- Comment List Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">1 Comments</h3>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="../static/img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">AMADOU Rachid</a> <small><i>21 Juin 2024</i></small></h6>
                                <p>Merci pour l'information</p>
                                <button class="btn btn-sm btn-light">Reponse</button>
                            </div>
                        </div>

                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Laisser un commentaire</h3>
                        </div>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Votre Nom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Site web" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5" placeholder="Commentaire"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>

                <!-- Sidebar Start -->

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Catégories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Forum</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Conférances</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Formations</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Assemblée général</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Autre</a>
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Récents activités</h3>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{asset('img/blog1.jpeg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="{{route('article1')}}" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Le Ministre de la Communication, des Postes et de L'Economie...
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{asset('img/forum2.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Séance de formation à l'usage de l'IA
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{asset('img/forum.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Assemblée générale du Club des DSI Niger
                            </a>
                        </div>

                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{asset('img/photo.jpg')}}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->

                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->@endsection
