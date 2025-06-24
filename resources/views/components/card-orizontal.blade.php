  <div class="card mb-3 bg-card  d-flex card-p">
    <div class="row g-0">
      <div class="col-md-4 auto-fit">
        <img src="https://picsum.photos/500/700" class=" rounded-start img-fluid" alt="...">
      </div>
      <div class="col-md-8 ">
        <div class="card-body bg-card">
          <h5 class="card-title font-title">Titolo: <span class="font-text">{{Str::limit($article->title, 18)}}</span></h5>
          <p class="card-text font-title">Prezzi: <span class="font-text">{{$article->price}}</span></p>
          <a href="{{route('articles.show', $article)}}" class="btn bg-button link-offset-2 link-underline link-underline-opacity-0 text-color font-text">Vai al dettaglio</a>
        </div>
      </div>
    </div>
  </div>