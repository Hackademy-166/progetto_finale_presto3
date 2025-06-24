<x-layout>

    <h1 class="text-dark text-center font-title display-3 pt-3">DETTAGLIO ARTICOLO: {{$article->title}}</h1>

        {{-- <div class="container bg-form shadow shadow-2 p-5">
            <div class="row justify-content-center align-items-center ">
                <div class="col-12 col-md-4">
                    <h5 class=" font-extra">Titolo: {{$article->title}}</h5>
            <p class="font-text">Descrizione: {{$article->description}}</p>
            <p class=" font-extra">Prezzi: {{$article->price}}</p>
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-text">Categoria: {{$article->category->category_name}}</a>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-12 col-md 4">

                    <div class="card text-center bg-form">
                        <div class="card-header font-extra text-color display-5">
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
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        {{-- CAROSELLO --}}
                    </div>
                </div>
            </div>
        </section>
</x-layout>