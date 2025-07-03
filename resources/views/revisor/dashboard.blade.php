<x-layout>
    <header>
        <h1 class="font-gen text-center display-1">Dashboard Revisore</h1>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                        @forelse($articles as $article)                
                            @if($article->is_accepted === null)
                                <div class="accordion" id="accordionExample">   
                                    <div class="accordion-item bg-form">
                                        <h2 class="accordion-header rounded">
                                            <button class="font-taglia accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$article->id}}" aria-expanded="false" aria-controls="collapse{{$article->id}}">
                                                {{$article->title}}
                                            </button>
                                        </h2>
                                        <div id="collapse{{$article->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body rounded">
                                                <p class="font-taglia">{{$article->description}}</p>
                                                <p class="font-taglia"><small>Inserito il: {{$article->created_at->format('d/m/Y')}}</small></p>
                                                <p class="font-taglia"><small>Inserito da: {{$article->user->name}}</small></p>
                                                <a href="{{route('revisor.show', $article)}}" class="btn card-button">Dettaglio</a>
                                                {{-- <a href="{{route('revisor.show', $article_to_check)}}" class="btn card-button">Dettaglio</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif               
                        @empty
                                <div class="vh-auto justify-content-center align-items-center">
                                    <h4 class="text-center font-gen">Non ci sono articoli da revisionare</h4>
                                </div>
                        @endforelse              
                    </div>
                </div>
            </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <h2 class="text-dark text-title text-center font-gen display-1">Articoli Accettati</h2>
                @foreach($accepted_articles as $accepted_article)
                    <div class="col-12 col-md-5 col-lg-5">
                        <a class="text-decoration-none" href="{{route('revisor.show', $article)}}">
                            <div class="card-show my-4">
                                <span class="card__title text-center">{{$article->title}}</span>
                                <p class="card-content">{{ __('ui.cardDescr') }}: {{$article->description}}</p>
                                <p class="card-content">{{ __('ui.cardPrice') }}: {{$article->price}}</p>
                                <p class="card-content">{{ __('ui.cardCategory') }}: {{$article->category->category_name}}</p>
                                <p class="card-content">{{ __('ui.cardInsert') }}: {{$article->user->name}}</p>
                                <p class="card-content">{{ __('ui.cardInsertWhen') }}: {{$article->user->created_at->format('d/m/Y')}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <h2 class="text-dark text-title text-center font-gen display-1">Articoli Rifiutati</h2>
                @foreach($rejected_articles as $rejected_article)
                    <div class="col-12 col-md-5 col-lg-5">
                        <a class="text-decoration-none" href="{{route('revisor.show', $article)}}">
                            <div class="card-show my-4">
                                <span class="card__title text-center">{{$article->title}}</span>
                                <p class="card-content">{{ __('ui.cardDescr') }}: {{$article->description}}</p>
                                <p class="card-content">{{ __('ui.cardPrice') }}: {{$article->price}}</p>
                                <p class="card-content">{{ __('ui.cardCategory') }}: {{$article->category->category_name}}</p>
                                <p class="card-content">{{ __('ui.cardInsert') }}: {{$article->user->name}}</p>
                                <p class="card-content">{{ __('ui.cardInsertWhen') }}: {{$article->user->created_at->format('d/m/Y')}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>    