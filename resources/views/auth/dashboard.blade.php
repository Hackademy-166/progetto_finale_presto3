<x-layout>
    <x-slot name="title">Dashboard {{Auth::user()->name}}</x-slot>
    <header class="vh-auto">
        <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-title text-center fw-bold display-1">Profilo Utente</h1>
            </div>
        </div>
    </div>
</header>
    <section class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src=""  class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{Auth::user()->name}}</h4>
                                <p>{{Auth::user()->email}}</p>
                                @if(Auth::user()->is_revisor)
                                    <a href="{{route('revisor.dashboard')}}" class="btn bg-button">Revisore</a>
                                @endif
                                <br>
                                <button class=" mt-5 me-1 btn bg-button">Elimina</button>
                                <button class=" mt-5 ms-1 btn bg-button">Modifica</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($profile) && $profile->user_id === auth()->id())
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-gorup list-group-flush">
                                           <li class="d-flex justify-content-between"><h6>Nome e Cognome: {{$profile->name}} {{$profile->surname}}</h6></li> 
                                            <hr>
                                            <li class="d-flex justify-content-between"><h6>Telefono: {{$profile->phone_number}}</h6></li> 
                                            <hr>
                                            <li class="d-flex justify-content-between"><h6>Indirizzo: {{$profile->address}}, {{$profile->city}}, {{$profile->country}}, {{$profile->postal_code}}</h6></li>
                                            <li class="list-unstyled"><a href="{{route('profile.edit', $profile)}}" class="btn bg-button"> Modifica Profilo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @else
                <div class="col-12 col-md-3 col-lg-3">
                    <h4 class="">Non hai ancora inserito il tuo profilo</h4>
                    <a href="{{route('profile.create')}}"><h8 class=" text-center ">Aggiungi il tuo profilo</h8></a>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 "></div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="mt-3">
                                <h4>Articoli Pubblicati: <strong id="article-count" data-final="{{ $user->articles_count }}">0</strong></h4>
                                <h4>Annunci Venduti: <span id="soldArticles">0</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <h2 class="font-title text-center display-1">I tuoi articoli</h2>
                @forelse ($articles as $article )
                <div class="col-12 col-md-4 col-lg-4">
                    <x-card-vertical :article="$article" />
                </div>
                @empty
                    <div class="col-12 col-md-12 col-lg-12">
                        <h3 class="text-center font-title display-1">Nessun articolo trovato</h3>
                        <a href="{{route('articles.create')}}" class="btn bg-button">Inserisci Articolo</a>
                    </div>
                @endforelse
            </div>
        </div>

    </section>

</x-layout>