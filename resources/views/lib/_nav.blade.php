<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="{{route('index')}}" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{route('index')}}" class="nav-item nav-link active">Accueil</a>
            <a href="about.html" class="nav-item nav-link">A propos</a>
            <a href="service.html" class="nav-item nav-link">Vision</a>
            <a href="{{route('articles.index')}}" class="nav-item nav-link" >Actualités</a>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Nous réjoindre</a>
    </div>
</nav>
