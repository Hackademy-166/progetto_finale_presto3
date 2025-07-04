<x-layout>
    <x-slot name="title">Articoli</x-slot>
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center font-gen p-5 display-1">{{ __('ui.navArticle') }}</h1>
            </div>
        </div>
    </header>
    
    {{-- Messaggio di riuscita cancellazione dell'articolo --}}
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif    
    
    
    <section>
        <div class="container vh-auto p-5">
            <div class="row">
                @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card-vertical :article="$article" />
                </div>
                
                @empty
                
                <h1 class="text-dark text-center font-gen p-5 display-1">Nessun articolo caricato</h1>
                
                @endforelse
            </div>
        </div>
        
    </section>
    <navbar class="paginate">
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
                {{$articles->links()}}
            </div>
        </div>
    </div>
    </navbar>
</x-layout>