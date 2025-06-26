<x-layout>
    <x-slot name="title">Ricerca {{$query}}</x-slot>
    <header>
        <div class="container-fluid c1">
            <div class="row d-flex justify-content-center  ">   
                <div class="col-12 col-md-6 col-lg-4  ">
                    <h1 class="text-center font-title display-1"> Risultati della ricerca {{$query}}</h1>
                </div>
            </div>
            <div class="row">
                @forelse ($articles as $article)
                    <div class="col-12 col-md-3">
                        <x-card-vertical :article="$article"/>
                    </div>
                @empty
                    <div class="col-12 col-md-12 col-lg-12">
                        <h3 class="text-center font-title display-1">Nessun articolo trovato</h3>
                    </div>
                @endforelse
            </div>
                <div class="d-flex justify-content-center">
                    <div>
                        {{$articles->links()}}
                    </div>
                </div>
        </div>
    </header>
</x-layout>