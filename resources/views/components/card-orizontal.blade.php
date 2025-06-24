<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title font-title">Titolo{{$article->title}}</h5>
        <p class="card-text font-text">Descrizione{{$article->description}}</p>
        <p class="card-text font-title">Prezzi{{$article->price}}</p>
        <a href="" class="">Categoria:{{$article->category->category_name}}</a>
        <a href="{{route('articles.show', $article)}}">Vai al dettaglio</a>
      </div>
    </div>
  </div>
</div>