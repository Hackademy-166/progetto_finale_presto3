<x-layout>
    <x-slot name="title">{{$article->title}}</x-slot>
    
    <h1 class="text-dark text-center font-title display-5 pt-3">DETTAGLIO ARTICOLO: {{$article->title}}</h1>
    
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
        

        <div class="container">
            <div class="row justify-content-center p-3">
                <div class="col-12 col-md-6">
                    <div class="card text-center bg-form">
                        <div class="card-header font-extra text-color">
                            {{$article->title}}
                        </div>
                        <div class="card-body text-color">
                            <h5 class=" font-extra">Titolo: {{$article->title}}</h5>
                            <p class="font-text">Descrizione: {{$article->description}}</p>
                            <p class=" font-extra">Prezzi: {{$article->price}}</p>
                            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-text">Categoria: {{$article->category->category_name}}</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p class=" font-extra text-color">Scritto da: {{$article->user->name}}</p>
                        </div>
                        <p class=" font-extra text-color">Inserito il: {{$article->user->created_at->format('d/m/Y')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>