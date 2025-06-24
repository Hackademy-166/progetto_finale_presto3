<div class="card mb-3 bg-card  d-flex card-p" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 auto-fit">
      <img src="https://picsum.photos/200/600" class=" rounded-start img-fluid" alt="...">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-card">
        <h5 class="card-title font-title">Titolo: <span class="font-text">{{$article->title}}</span></h5>
        <p class="card-text font-title">Descrizione: <span class="font-text">{{$article->description}}</span> </p>
        <p class="card-text font-title">Prezzi: <span class="font-text">{{$article->price}}</span> </p>
       <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-title">Categoria: <span class="font-text">{{$article->category->category_name}}</span> </a>
        <a href="{{route('articles.show', $article)}}" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-text">Vai al dettaglio</a>
      </div>
    </div>
  </div>
</div>