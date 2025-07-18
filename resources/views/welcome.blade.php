<x-layout>
    <x-slot name="title">Homepage</x-slot>
    <header >
        <div class="container">
            <div class="row ">
                <div class="col-12 ">
                    <img data-aos="fade-down" data-aos-duration="1500"  src="/img/erasebg-transformed.png" alt="Logo Presto.it"> 
                </div>
            </div>
        </div>
    </header>
    <!-- ALERT PER RIFIUTO ARTICOLO -->
    @if(session()->has('errorMessage'))
    <div class="alert alert-danger">
        {{session('errorMessage')}}
    </div>
    @endif
    <!-- FINE ALERT PER RIFIUTO ARTICOLO -->
    
    <!-- ALERT INVIO MAIL DI CONTATTO -->
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @elseif(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif
    <!-- FINE ALERT INVIO MAIL DI CONTATTO -->
    <!-- ALERT UTENTE CANCELLATO -->
    @if(session('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @endif
    <!-- FINE ALERT UTENTE CANCELLATO -->

  
    <!--inserisci articolo-->
    <section class="container mt-5 py-5 ">
        <div class="row align-items-center h-100 " data-aos="fade-up-right" 
            data-aos-duration="1000">
            <div class="col-12 col-md-7">
                <h2 class="text-center font-gen display-1" id="text"> {{ __('ui.insertArticle') }}</h2>
                <h3 class="text-center font-gen">{{ __('ui.insertArticleDesc') }}</h3>
                
                
            </div>
            <div class="col-12 col-md-5 ">
                <div class=" d-flex justify-content-center" data-aos="fade-up-left"
            data-aos-duration="1000">
                    <button class="text-center card-button2 p-5 mx-5">
                        <a href="{{route('articles.create')}}" class="text-decoration-none text-dark">
                            <h4 class="font-gen display-5 ">{{ __('ui.createArticle') }}</h4>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        
    </section>

<!--fine inserisci articolo-->

  <!--search bar-->

    <!--search bar-->
    
    <section>
        <h1 class="text-center font-gen display-1 mt-5">{{ __('ui.lastArticle') }}</h1>
        <div class="container vh-auto p-1">
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card-vertical :article="$article" />
                </div>
                @endforeach
            </div>
        </div>
        
    </section>
    
    
    
</x-layout>

