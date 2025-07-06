<x-layout>


    <!-- FINE ALERT PER ACCETTAZIONE, RIFIUTO E CAMBIO DI STATO ARTICOLO -->
    <header>
        <h1 class="font-gen text-center display-1">{{ __('ui.workDash') }}</h1>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="font-gent text-center">Nuovi articoli da revisionare</h2>
                        
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
                                                <p class="font-taglia"><small>{{ __('ui.workInsert') }} {{$article->created_at->format('d/m/Y')}}</small></p>
                                                <p class="font-taglia"><small>{{ __('ui.workBy') }} {{$article->user->name}}</small></p>
                                                <a href="{{route('revisor.show', $article)}}" class="btn card-button">{{ __('ui.workDetail') }}</a>
                                                {{-- <a href="{{route('revisor.show', $article_to_check)}}" class="btn card-button">Dettaglio</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif               
                        @empty
                                <div class="vh-auto justify-content-center align-items-center">
                                    <h4 class="text-center font-gen">{{ __('ui.workNone') }}</h4>
                                </div>
                        @endforelse              
                    </div>
                </div>
            </div>
    </header>

    <section>
        <div class="container mt-2">
            <div class="row justify-content-between">
                <h2 class="text-dark text-title text-center font-gen display-1">{{ __('ui.workArticle') }}</h2>
                @forelse($accepted_articles as $article)
                    <div class="col-12 col-md-5 col-lg-5">
                        <a class="text-decoration-none" href="{{route('revisor.show', $article)}}">
                            <div class="card-show my-4">
                                <span class="card__title text-center">{{$article->title}}</span>
                                <p class="card-content">{{ __('ui.cardDescr') }}: {{$article->description}}</p>
                                <p class="card-content">{{ __('ui.cardPrice') }}: {{$article->price}}</p>
                                <p class="card-content">{{ __('ui.cardCategory') }}: {{$article->category->category_name}}</p>
                                <p class="card-content">{{ __('ui.cardInsert') }}: {{$article->user->name}}</p>
                                <p class="card-content">{{ __('ui.cardInsertWhen') }}: {{$article->created_at->format('d/m/Y')}}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="vh-auto justify-content-center align-items-center">
                        <h4 class="text-center font-gen">{{ __('ui.workNone') }}</h4>
                    </div>
                @endforelse
                
            </div>
            <div class="row justify-content-between">
                <h2 class="text-dark text-title text-center font-gen display-1">{{ __('ui.workNot') }}</h2>
                @forelse($rejected_articles as $article)
                    <div class="col-12 col-md-5 col-lg-5">
                        <a class="text-decoration-none" href="{{route('revisor.show', $article)}}">
                            <div class="card-show mb-5">
                                <span class="card__title text-center">{{$article->title}}</span>
                                <p class="card-content">{{ __('ui.cardDescr') }}: {{$article->description}}</p>
                                <p class="card-content">{{ __('ui.cardPrice') }}: {{$article->price}}</p>
                                <p class="card-content">{{ __('ui.cardCategory') }}: {{$article->category->category_name}}</p>
                                <p class="card-content">{{ __('ui.cardInsert') }}: {{$article->user->name}}</p>
                                <p class="card-content">{{ __('ui.cardInsertWhen') }}: {{$article->created_at->format('d/m/Y')}}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="vh-auto justify-content-center align-items-center">
                        <h4 class="text-center font-gen">{{ __('ui.workNone') }}</h4>
                    </div>
                @endforelse
                
            </div>
                {{ $accepted_articles->links() }}
        </div>
    </section>

</x-layout>    