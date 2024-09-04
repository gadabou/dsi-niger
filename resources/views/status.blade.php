@extends('layouts.base')
@section('title', 'Status')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">STATUTS CLUB DSI NIGER</h1>
                <a href="" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Statuts</a>
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

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px; color: #0DB02B">
                <h5 class="fw-bold text-uppercase">CHAPITRE I :</h5>
                <h1 class="mb-0">L’ASSEMBLEE GENERALE</h1>
            </div>
            <div class="">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="p-4">
                            <h4 class="mb-3">Article 12. Attributions</h4>
                            L’Assemblée Générale est l'instance suprême de l’Association. A ce titre, elle :
                            <ul>

                                <li>fixe les orientations Générales de l’Association;</li>
                                <li>élit les membres du Bureau Exécutif et les Commissaires aux Comptes, et met fin à leurs mandats en cas de faute jugée grave;</li>
                                <li>se prononce sur les demandes de démission des membres du Bureau Exécutif;</li>
                                <li>entend les explications des membres proposés à l’exclusion avant de statuer sur leurs cas;</li>
                                <li>fixe les cotisations des membres;</li>
                                <li>entend les rapports (moral et financier) sur la gestion du Bureau Exécutif et statue sur leur approbation;</li>
                                <li>entend les rapports des Commissaires aux Comptes;</li>
                                <li>approuve les comptes de l'exercice clos et se prononce sur l'affectation des résultats;</li>
                                <li>adopte le programme d’activités de l’année;</li>
                                <li>vote le budget prévisionnel de l’année;</li>
                                <li>procède à la relecture des textes de l’Association;</li>
                                <li>se prononce sur l’affiliation ou la fusion de l’Association « Club DSI NIGER» avec d’autres organisations;</li>
                                <li>délibère sur les questions inscrites à l’ordre du jour.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="p-4">
                            <h4 class="mb-3">Article 13. Composition</h4>
                            L'Assemblée Générale est composée de tous les membres de l’Association à jour de leurs cotisations au jour de la convocation.
                            Les membres d’honneur sont libres d’assister à l’AG sans droit de vote.
                            Cependant, peut être invitée à l'Assemblée Générale toute personne physique ou morale non membre de l’Association, dont la présence est jugée utile.
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="p-4">
                            <h4 class="mb-3">Article 14. Types de session</h4>
                            <p>L’Assemblée Générale se réunit selon deux (02) types de session :</p>

                            <p><strong>Les sessions ordinaires :</strong></p>
                            <li>L’Assemblée Générale se réunit en session ordinaire au moins une fois par an sur convocation faite par le Président du Bureau Exécutif ou son intérimaire adressée au moins quinze (15) jours à l’avance aux membres de l’Association à jour dans leur cotisation et mentionnant l’ordre du jour;</li>
                            <li>Pour délibérer valablement, l’Assemblée Générale doit être au moins composée de la moitié des membres et les décisions doivent être prises à la majorité des membres présents.</li>
                            <li>Ne peuvent être abordés que les points inscrits à l’ordre du jour;</li>

                            <p><strong>Les sessions extraordinaires :</strong></p>
                            <li>L’Assemblée Générale se réunit en session extraordinaire sur convocation faite par le Président du Bureau Exécutif ou son intérimaire, ou la majorité des membres du bureau exécutifs adressée au moins quinze (15) jours à l’avance aux membres de l’Association à jour dans leur cotisation et mentionnant l’ordre du jour.</li>
                            <li>Le quorum de l’Assemblée Générale Extraordinaire est fixé aux trois quart (3/4) des membres et les décisions sont valablement prises lorsqu’elles sont adoptées à la majorité des membres présents.</li>
                            <p><strong>L’Assemblée Générale extraordinaire est compétente pour :</strong></p>
                            <li>décider de la fusion ou de l’affiliation du « Club DSI NIGER» avec toute autre Association poursuivant les mêmes objectifs;</li>
                            <li>modifier les statuts.</li>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection
