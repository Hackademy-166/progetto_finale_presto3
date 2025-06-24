<x-layout>
    <header>
        <x-slot name="title">Homepage</x-slot>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h1 class="text-dark text-center pt-5 display-1 font-title">PRESTO.IT</h1>
                    
                </div>
            </div>
        </div>
    </header>
    
    
    <section>
        <div class="container mt-5 ">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-3 col-lg-3">  
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        @foreach ($articles as $article )
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                <div class="col-12 col-md-3">
                                        <x-card-vertical :article="$article" />
                                    </div>
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
    </section>
    
    
    <section class="container  mt-5 min-vh-100 py-5 bg-standard">
        <div class="row align-items-center h-100">
            <div class="col-12 col-md-7">
                <h2 class="text-center font-title display-1" id="text">INSERISCI ARTICOLO</h2>
                <h3 class="text-center font-text">Tramite questo pulsante, accederai alla pagina per l'inserimento di un articolo a tua scelta</h3>
                
                
            </div>
            <div class="col-12 col-md-5 ">
                <div class=" d-flex justify-content-center">
                    <button class="rounded text-center bg-button p-5 mx-5">
                        <a href="{{route('articles.create')}}" class="text-decoration-none text-dark">
                            <h4 class="font-title display-5 ">Crea Articolo</h4>
                        </a>
                    </button>
                </div>  
            </div>
        </div>
        
    </section>
    
</x-layout>