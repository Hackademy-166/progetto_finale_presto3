<x-layout>
    <x-slot name="title">Dashboard {{Auth::user()->name}}</x-slot>
    <header class="container vh-auto">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center fw-bold display-1">Profilo Utente</h1>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true">Dati Utente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Dati Profilo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Articoli dell'utente</a>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
            </div>
        </div>
    </section>
</x-layout>