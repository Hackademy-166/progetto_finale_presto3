{{-- <div class="card bg-card" style="width: 18rem;">
  <img src="https://picsum.photos/300/200" class="card-img-top img-fluid" alt="...">
  <div class="card-body">
    <div class="col-md-8">
      <div class="card-body bg-card">
        <h5 class="card-title font-extra">Titolo: {{$article->title}}</h5>
        <p class="card-text font-text">Descrizione: {{$article->description}}</p>
        <p class="card-text font-extra">Prezzi: {{$article->price}}</p>
        <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-text">Categoria: {{$article->category->category_name}}</a>
      <div class="card-body">
        <h5 class="card-title">Titolo{{$article->title}}</h5>
        <p class="card-text">Descrizione{{$article->description}}</p>
        <p class="card-text">Prezzi{{$article->price}}</p>
        <a href="{{route('categories-index', $article->category)}}">Categoria:{{$article->category->category_name}}</a>
        
      </div>
</div> --}}

<article class="card m-5">
  <img
    class="card__background"
    src="https://picsum.photos/300/200"
    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
    width="1920"
    height="2193"
  />
  <div class="card__content | flow">
    <div class="card__content--container | flow">
      <h2 class="card__title text-color fw-bold font-text ">{{$article->title}}</h2>
      <p class="card__description pt-2 text-color fw-bold font-text">
       Categoria: {{$article->category->category_name}}
      </p>
      <p class="text-color fw-bold font-text">
        Prezzo: {{$article->price}}
      </p>
    </div>
    <button class="card__button "><a href="{{route('articles.show', $article)}}" class="btn  link-offset-2 link-underline link-underline-opacity-0 text-color font-text">Vai al dettaglio</a></button>

  </div>
</article>