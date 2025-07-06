<x-layout>
  <x-slot name="title">Categorie</x-slot>
  <h1 class="text-center font-gen p-5 display-1" >Articoli della categoria: {{$category->category_name}}</h1>
  <div class="container mb-5">
    <div class="row justify-content-center">
      <!-- SIDEBAR: elenco categorie  -->
      <nav class="col-12 col-md-3 sidebar list-group text-center navbar navbar-expand-md order-2">
        <!-- Bottone hamburger -->
        {{-- <div class="">
          <button class="d-flex justify-content-center navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div> --}}
      
      <div class="list-group mb-4">
        @foreach($categories as $cat)
        @if($cat->id === $category->id)
        <span>
          <h3 class="text-auto font-gen block text-decoration-underline"> {{ $cat->category_name }} </h3>
        </span>
        @else
        <a href="{{route('categories-index', $cat)}}" class="link-offset-2">
          <h3 class="font-gen">{{__("ui.$cat->category_name")}}</h3>
        </a>
        @endif
        @endforeach
        
      </div>
    </nav>
    
    <!-- MAIN CONTENT: articoli della categoria selezionata  -->
    <div class="col-12 col-md-9 order-md-2">
      <div class="row justify-content-center">
          @forelse($articles as $article)
          <div class="col-12 col-md-4 mb-4 mx-4">
            <x-card-vertical :article="$article" />
          </div>
          @empty
          <div class="col-12 text-center p-5">
            <h3 class="font-gen text-center display-4">
              Nessun articolo nella categoria di: {{ $category->category_name }}
            </h3>
            <a href="{{ route('homepage') }}" class="btn card-button2 mt-4">
              Torna alla home
            </a>
          </div>
          @endforelse 
          <div>
            {{$articles->links()}}                  
          </div> 
      </div>
    </div>
  </div>             
  </div>
</x-layout>