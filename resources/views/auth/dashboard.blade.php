<x-layout>
    <x-slot name="title">Dashboard {{Auth::user()->name}}</x-slot>
    <header class="container vh-auto">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center fw-bold display-1">Profilo Utente</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="container-dashboard">
            <div class="card-header">
                <ul class="nav nav-pills card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Dati utente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dati utente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title mt-3">{{Auth::user()->name}}</h5>
                <p class="card-text">Email: {{Auth::user()->email}}</p>
                <p class="card-text"><small>Utente dal: {{Auth::user()->created_at->format('d/m/Y')}}</small></p>
                <a class="text-dark btn bg-button linker " onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Log-Out</a>
                <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form>
            </div>
        </div>
    </section>
</x-layout>