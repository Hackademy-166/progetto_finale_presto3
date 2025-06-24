<x-layout>
    <h1>Articoli della categoria {{$category->category_name}}</h1>
    <div class="container">
        <div class="row justify-content-center">
            @forelse ($category->articles as $article  )
                <div class="col-12 col-md-3">
                    <x-card-orizontal :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3>Nessun articolo nella categoria di {{$category->category_name}}</h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>