@extends('layouts.base')
@section('title', "Formulaire d'ajout d'un membre")

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Qui sommes-nous ?</h1>
                <a href="" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Membres du club de DSI</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <h1>Create New Team Member</h1>

        <!-- Affichage des messages d'erreur -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <!-- Formulaire de création -->
        <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- User ID -->
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="number" name="user_id" id="user_id" class="form-control" required>
            </div>

            <!-- Nom -->
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" maxlength="20">
            </div>

            <!-- Prénom -->
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" maxlength="20">
            </div>

            <!-- Civilité -->
            <div class="form-group">
                <label for="civilite">Civilité</label>
                <input type="text" name="civilite" id="civilite" class="form-control" maxlength="20">
            </div>

            <!-- Date de naissance -->
            <div class="form-group">
                <label for="date_naissance">Date de Naissance</label>
                <input type="date" name="date_naissance" id="date_naissance" class="form-control">
            </div>

            <!-- Lieu de naissance -->
            <div class="form-group">
                <label for="lieu_naissance">Lieu de Naissance</label>
                <input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control" maxlength="20">
            </div>

            <!-- Structure -->
            <div class="form-group">
                <label for="structure">Structure</label>
                <input type="text" name="structure" id="structure" class="form-control" maxlength="20">
            </div>

            <!-- Adresse -->
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="form-control" maxlength="20">
            </div>

            <!-- Position -->
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" maxlength="20">
            </div>

            <!-- Téléphone -->
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" maxlength="20">
            </div>

            <!-- Ville -->
            <div class="form-group">
                <label for="ville">Ville</label>
                <input type="text" name="ville" id="ville" class="form-control" maxlength="20">
            </div>

            <!-- Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection

