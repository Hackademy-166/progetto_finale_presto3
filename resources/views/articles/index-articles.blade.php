<x-layout>
    <x-slot name="title">Articoli</x-slot>
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center font-title p-5 display-1">Articoli</h1>
            </div>
        </div>
    </header>

            <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                <img src="https://picsum.photos/300/200" class="d-block w-100 img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://picsum.photos/301/200"  class="d-block w-100 img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://picsum.photos/302/200"  class="d-block w-100 img-fluid" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <section>
        <div class="container vh-100 p-5">
            <div class="row">
                @foreach ($articles as $article )
                <div class="col-12 col-md-3">
                    <x-card-orizontal :article="$article" />
                </div>
                @endforeach
            </div>
        </div>
        
    </section>
</x-layout>