<x-layout>
    <x-slot name="title">Dashboard {{Auth::user()->name}}</x-slot>
    <header class="vh-auto">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h1 class="text-dark text-title text-center font-gen display-1">{{ __('ui.dashProf') }}</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="container mt-4 ">
        <div class="row justify-content-between">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card bg-form" data-aos="fade-right"  data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src=""  class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4 class="font-gen">{{Auth::user()->name}}</h4>
                                <p class="font-gen">{{Auth::user()->email}}</p>
                                @if(Auth::user()->is_revisor)
                                <a href="{{route('revisor.dashboard')}}" class="btn card-button font-gen">{{ __('ui.dashRev') }}</a>
                                @endif
                                <br>
                                <button type="button" class="btn card-button mt-5 ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('ui.dashDelete') }}</button>
                                <button class="d-none mt-5 ms-1 btn card-button">{{ __('ui.dashEdit') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($profile) && $profile->user_id === auth()->id())
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card bg-form"  data-aos="fade-left"  data-aos-duration="1000">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <ul class="list-gorup font-gen list-group-flush">
                                    <li class="d-flex justify-content-between"><h6>{{ __('ui.dashNameSur') }}: {{$profile->name}} {{$profile->surname}}</h6></li> 
                                    <hr>
                                    <li class="d-flex justify-content-between"><h6>{{ __('ui.dashPhone') }}: {{$profile->phone_number}}</h6></li> 
                                    <hr>
                                    <li class="d-flex justify-content-between"><h6>{{ __('ui.dashAddress') }}: {{$profile->address}}, {{$profile->city}}, {{$profile->country}}, {{$profile->postal_code}}</h6></li>
                                    {{-- <li class="list-unstyled"></li> --}}
                                </ul>
                                <a href="{{route('profile.edit', $profile)}}" class="btn card-button ms-4 mt-1"> {{ __('ui.dashEdit') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            
            
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card bg-form bg-profile" data-aos="fade-left" data-aos-duration="1000">
                    <div class="card-body mt-5" >
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h4 class="font-gen text-center">{{ __('ui.dashMiss') }}</h4>
                                <div class="d-flex justify-content-center">
                                    <a class="text-dark btn card-button mt-4" href="{{route('profile.create')}}"><h7 class="font-gen">{{ __('ui.dashAdd') }}</h7></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 "></div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card bg-form mt-4" data-aos="fade-up"  data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="">
                                <h4 class="font-gen">{{ __('ui.dashArticle') }}: <strong id="article-count" data-final="{{ $user->articles_count }}">0</strong></h4>
                                <h4 class="font-gen">{{ __('ui.dashSold') }}: <span id="soldArticles">0</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container mt-3">
        <div class="row">
            <h2 class="font-gen text-center display-1">{{ __('ui.dashYour') }}</h2>
            @forelse ($articles as $article )
            <div class="col-12 col-md-4 col-lg-4">
                <x-card-orizontal :article="$article" />
            </div>
            @empty
            <div class="col-12 col-md-12 col-lg-12">
                <h3 class="text-center font-gen display-1">{{ __('ui.dashNot') }}</h3>
                <div class="d-flex justify-content-center ">
                    <a href="{{route('articles.create')}}" class=" mb-5  btn card-button2">{{ __('ui.insertArticle') }}</a>
                    
                </div>
            </div>
            @endforelse
        </div>
    </section>
    
    @if(Auth::user()->is_revisor)
    <section class="container-fluid mt-3">
        @if($not_accepted_articles->count() > 0)
        <h2 class="font-gen text-center display-1">Articoli da revisionare</h2>
        <div class="row justify-content-around">
            @foreach($not_accepted_articles as $article)
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
        @else    
        <div class="col-12 col-md-12 col-lg-12">
            <h3 class="text-center font-gen display-1">Nessun articolo da revisionare trovato</h3>
        </div>
        @endif
        
    </section>
    @endif
    
    
    {{-- Modale per l'eliminazione --}}
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{$user->name}} sei sicuro di voler eliminare il tuo account?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <form action="{{route('user.destroy', $user)}}" method="POST">
                        @csrf
                        @method('DELETE')    
                        <button type="submit" class="btn btn-danger">Elimina</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>