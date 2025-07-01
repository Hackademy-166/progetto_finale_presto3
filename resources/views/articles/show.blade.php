<x-layout>
    <x-slot name="title">{{$article->title}}</x-slot>
    
    <h1 class="text-dark text-center font-title display-5 pt-3">DETTAGLIO ARTICOLO: {{$article->title}}</h1>
    
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-evenly pt-3">
                <div class="col-12 col-md-4 mb-3">
                    @if ($article->images->count() >0 )
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            @foreach ($article->images as $key=> $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{ Storage::url($image->path)}}" class="d-block w-100 rounded shadow" alt="Immagine {($key +1 }} dell'articolo '{{$article->title}}">  
                            </div>
                            @endforeach
                        </div>
                        @if($article->images->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        @endif
                    </div>
                    @else
                    <img src="https://picsum.photos/300" class="d-block w-100 rounded shadow" alt="Nessuna foto inserita dall'utente">
                    @endif
                </div>
                <div class="col-12 col-md-6">
                    <div class="card-show">
                            <span class="card__title text-center">{{$article->title}}</span>
                             @auth
                                <div class="d-flex justify-content-evenly pt-3">
                                    <button type="button" class="btn card-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
                                    <a href="{{route('articles.edit', $article)}}"class="btn card-button mb-3"> Modifica</a>
                                </div>
                            @endauth    
                            <p class="card-content">
                               Descrizione: {{$article->description}}
                            </p>
                            <p class="card-content">Prezzo: {{$article->price}}</p>
                            <p class="card-content">Categoria: {{$article->category->category_name}}</p>
                            <p class="card-content">Inserito da: {{$article->user->name}}</p>
                            <p class="card-content">Inserito il: {{$article->user->created_at->format('d/m/Y')}}</p>



                            
                    
                    </div>
                    {{-- <div class="card text-center bg-form">
                        <div class="card-header font-extra text-color">
                            {{$article->title}}
                        </div>
                        <div class="card-body text-color">
                            <h5 class=" font-extra">Titolo: {{$article->title}}</h5>
                            <p class="font-text">Descrizione: {{$article->description}}</p>
                            <p class=" font-extra">Prezzi: {{$article->price}}</p>
                            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-text">Categoria: {{$article->category->category_name}}</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p class=" font-extra text-color">Scritto da: {{$article->user->name}}</p>
                        </div>
                        <p class=" font-extra text-color">Inserito il: {{$article->user->created_at->format('d/m/Y')}}</p>
                                    --}}
                    </div>                    
                    
                </div>
            </div>
        </div>
    </div>
    
    
</section>


<div class="container">
    
    
    {{-- Modale per l'eliminazione --}}
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina articolo {{$article->title}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare l'articolo selezionato?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <form action="{{route('articles.destroy', $article)}}" method="POST">
                        @csrf
                        @method('DELETE')    
                        <button type="submit" class="btn btn-danger">Elimina</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>