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
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                               <x-card-vertical/>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                               <x-card-vertical/>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                               <x-card-vertical/>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                                
                            </div>
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

    {{-- <section>
        <div class="container-fluid mt-5 min-vh-100">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <h2>Aggiungi Articolo</h2>
                    <p>Tramite questo pulsante potrai inserire un articolo in base alle vategorie elencate</p>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <button></button>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="container  mt-5 min-vh-100 py-5">
    <div class="row align-items-center h-100">
      <div class="col-12 col-md-7">
        <h2 class="text-center font-title display-1" id="text">INSERISCI ARTICOLO</h2>
        <h3 class="text-center">Tramite questo pulsante, accederai alla pagina per l'inserimento di un articolo a tua scelta</h3>
        
        
    </div>
    <div class="col-12 col-md-5 ">
        <div class=" d-flex justify-content-center">
          <button class="rounded text-center bg-button p-5 mx-5">
            <h4 class="font-title display-5 ">Crea Articolo</h4>
          </button>
        </div>
        
      </div>
    </div>
  </section>

</x-layout>