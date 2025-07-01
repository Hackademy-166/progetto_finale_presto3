<article class="card-custom m-5">
  <img
    class="card__background"
    src="{{$article->images->isNotEmpty() ?  $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200'}}"
    alt="{{$article->title}}"
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