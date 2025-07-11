<x-layout>
    <x-slot name="title">{{$article->title}}</x-slot>
    
    <h1 class="text-dark text-center font-gen display-5 pt-3">{{ __('ui.cardDettaglio') }}: {{$article->title}}</h1>
    
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-evenly pt-3">
                <div class="col-12 col-md-4 mb-3">
                    @if ($article->images->count() >0 )
                    <div id="carouselExample" class="carousel slide"  data-aos="fade-right" data-aos-duration="1500">
                        <div class="carousel-inner">
                            @foreach ($article->images as $key=> $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{$image->getUrl(300, 300)}}" class="d-block w-100 rounded shadow" alt="Immagine {{$key +1 }} dell'articolo '{{$article->title}}">  
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
                    <img src="#" class="d-block w-100 rounded shadow" alt="Nessuna foto inserita dall'utente">
                    @endif
                </div>
                <div class="col-12 col-md-6">
                    <div class="card-show" data-aos="flip-right" data-aos-duration="500">
                            <span class="card__title text-center">{{$article->title}}</span>

                            <p class="card-content">
                              {{ __('ui.cardDescr') }}: {{$article->description}}
                            </p>
                            <p class="card-content">{{ __('ui.cardPrice') }}: {{$article->price}}</p>
                            <p class="card-content">{{ __('ui.cardCategory') }}: {{$article->category->category_name}}</p>
                            <p class="card-content">{{ __('ui.cardInsert') }}: {{$article->user->name}}</p>
                            <p class="card-content">{{ __('ui.cardInsertWhen') }}: {{$article->user->created_at->format('d/m/Y')}}</p>

                            @if(Auth::user() && Auth::user()->id == $article->user_id)
                                <div class="d-flex justify-content-evenly pt-3">
                                    <button type="button" class="btn card-button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('ui.cardDelete') }}</button>
                                    <a href="{{route('articles.edit', $article)}}"class="btn card-button">{{ __('ui.cardUpdate') }}</a>
                                </div>
                            @endif                         
                    </div>
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
                    <h1 class="modal-title font-gen fs-5" id="exampleModalLabel">Elimina articolo {{$article->title}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body font-gen">
                    Sei sicuro di voler eliminare l'articolo selezionato?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary font-gen" data-bs-dismiss="modal">Chiudi</button>
                    <form action="{{route('articles.destroy', $article)}}" method="POST">
                        @csrf
                        @method('DELETE')    
                        <button type="submit" class="btn btn-danger font-gen">Elimina</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>