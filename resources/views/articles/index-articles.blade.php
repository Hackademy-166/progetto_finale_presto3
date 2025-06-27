<x-layout>
    <x-slot name="title">Articoli</x-slot>
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center font-title p-5 display-1">Articoli</h1>
            </div>
        </div>
    </header>

    
    <section>
        <div class="container vh-auto p-5">
            <div class="row">
                @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card-vertical :article="$article" />
                </div>
                {{$articles->links()}}
                @empty

                <h1 class="text-dark text-center font-title p-5 display-1">nessun articolo caricato</h1>
               
                @endforelse
            </div>
        </div>
        
    </section>
</x-layout>