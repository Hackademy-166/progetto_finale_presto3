<x-layout>
    <x-slot name="title">Categorie</x-slot>
    <h1 class="text-center font-gen p-5 display-1" >Articoli della categoria: {{$category->category_name}}</h1>
    <div class="container">
        <div class="row justify-content-center">
            @forelse ($category->articles as $article)
                <div class="col-12 col-md-4">
                    <x-card-vertical :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="font-gen text-center p-5 display-4" >Nessun articolo nella categoria di: {{$category->category_name}}</h3>
                </div>

                <div class="col-12 col-md-3 col-lg-2">
                    <a class="btn card-button2 font-gen p-3 fs-4" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"  data-aos-duration="1000" href="{{route('homepage')}}">Torna alla home</a>
    
                </div>
            @endforelse
        </div>
    </div>
</x-layout>