<x-layout>
    <x-slot name="title">Dashboard Revisore</x-slot>
    <header class="container vh-auto">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark font-gen text-center display-2
                p-3">Revisione dell'articolo: {{$article_to_check->title}}</h1>
            </div>
        </div>
    </header>
    
    <div class="container justify-content-center">
        <div class="row" style="flex-direction:row">
            
            @if($article_to_check)
                @if($article_to_check->images->count())
            
            
                @foreach ($article_to_check->images as $key=> $image)
                    <div class="col-12 col-md-4">        
                        <article class="cta body-img mb-5" data-aos="flip-left" data-aos-duration="500">
                                <img src="{{$image->getUrl(300, 300)}}" class="img-card img-fluid rounded shadow" alt="Immagine {{$key +1 }} dell'articolo '{{$article_to_check->title}}">
                                <div class="cta__text-column">
                                    <h5 class="font-taglia fw-bold">Labels</h5>
                                    @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                    <span class="font-taglia">#{{ $label }},</span>
                                    @endforeach
                                    @else
                                    <p>Nessuna etichetta</p>
                                    @endif    
                                    <h5 class="font-taglia fw-bold">Ratings</h5>
                                    <div class="row justify-content-start">
                                        <div class="col-2">
                                            <div class="mx-auto {{ $image->adult }}"></div>
                                        </div>
                                        <div class="col-10 font-taglia">adult</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="mx-auto {{ $image->violence }}"></div>
                                        </div>
                                        <div class="col-10 font-taglia">violence</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="mx-auto {{ $image->spoof }}"> </div>
                                        </div>
                                        <div class="col-10 font-taglia">spoof</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="mx-auto {{ $image->racy }}"> </div>
                                        </div>
                                        <div class="col-10 font-taglia">racy</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="  mx-auto {{ $image->medical }}"> </div>
                                        </div>
                                        <div class="col-10 font-taglia">medical</div>
                                    </div>
                                </div>
                            </article>
                        </div>
            @endforeach
            @else
            @for ($i = 0; $i < 6; $i++)
            <div class="col-12 col-md-3 col-lg-3 mb-4 text-center">
                <img src="https://picsum.photos/300" alt="immagine segnaposto" class="img-card img-fluid rounded shadow">
            </div>
            @endfor
            @endif
            
            @else
            <div class="col-12">
                <h2 class="text-center">Non ci sono articoli da revisionare</h2>
            </div>
            @endif    
        </div>
        
        
        <div class="col-12 col-md-4">
            <div class="card-show mb-4" data-aos="flip-right" data-aos-duration="500">
                <span class="cardtitle text-center">{{$article_to_check->title}}</span>
                
                <p class="card-content">
                    {{ __('ui.cardDescr') }}: {{$article_to_check->description}}
                </p>
                <p class="card-content">{{ __('ui.cardPrice') }}: {{$article_to_check->price}}</p>
                <p class="card-content">{{ __('ui.cardCategory') }}: {{$article_to_check->category->category_name}}</p>
                <p class="card-content">{{ __('ui.cardInsert') }}: {{$article_to_check->user->name}}</p>
                <p class="card-content">{{ __('ui.cardInsertWhen') }}: {{$article_to_check->user->created_at->format('d/m/Y')}}</p>
                
                @auth
                <div class="d-flex justify-content-evenly pt-3">
                    
                    <form action="{{route('reject', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn card-button py-2 px-5 fw-bold">Rifiuta</button>
                    </form>
                    <form action="{{route('accept', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn card-button py-2 px-5 fw-bold">Accetta</button>
                    </form>
                   <div class="modal-footer justify-content-between">
                        <span class="stato-badge {{ $article->is_accepted ? 'stato-accettato' : 'stato-rifiutato' }}">Stato: {{ $article->is_accepted ? 'Accettato' : 'Rifiutato' }}</span>
                        <form action="{{ route('change', $article) }}" method="POST">
                        @csrf
                        @method('PATCH')
                            <button type="submit" class="btn-modifica">Cambia stato</button>
                        </form>
                    </div>
                    
                </div>
                @endauth
            </div>  
        </div>
    </div>
</div>

</section>


</x-layout>