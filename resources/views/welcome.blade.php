<x-layout>
    <x-slot name="title">Homepage</x-slot>
    <header >
        <div class="container-fluid c1">
            <div class="row d-flex justify-content-center  ">

                <div class="col-12 col-md-6 col-lg-4  ">
                    <img src="/img/Bianco_e_Nero_Minimalista_Life_Coach_Logo__3_-removebg-preview.png" alt="">
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
        <div class="alert alert-danger">
            {{session('success')}}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif
    <!-- FINE ALERT INVIO MAIL DI CONTATTO -->
    
    <section>
        <div class="container mt-5 ">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-8"> 
                    
                    
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">


                            @foreach ($articles as $article )
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}" aria-current="true" aria-label="Slide {{$loop->index}}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($articles as $article )
                                {{-- <div class="carousel-item  {{$loop->first ? 'active' : ''}}"  data-bs-interval="10000">
                                    <img src="https://picsum.photos/300/200" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-white">{{$article->title}}</h5>
                                        <p class="text-white">{{$article->price}}</p>
                                    </div>
                                </div> 
                            @endforeach
                        </div>      
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>




                </div>
            </div>
        </div>
    </section>  --}}

    <section>
        <h1 class="text-center font-title display-1 mt-5">Gli ultimi articoli</h1>
        <div class="container vh-auto p-1">
            <div class="row">
                @foreach ($articles as $article )
                <div class="col-12 col-md-4">
                    <x-card-vertical :article="$article" />
                </div>
                @endforeach
            </div>
        </div>
        
    </section>
   


</x-layout>

