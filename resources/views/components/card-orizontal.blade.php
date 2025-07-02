<article class="card-custom m-5">
  <img
    class="card__background"
    src="https://picsum.photos/300/200"
    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
    width="1920"
    height="2193"
  />
  <div class="card__content | flow">
    <div class="card__content--container | flow">
      <h2 class="card__title text-color fw-bold font-gen ">{{$article->title}}</h2>
      <p class="card__description pt-2 text-color fw-bold font-gen">
       Categoria: {{$article->category->category_name}}
      </p>
      <p class="text-color fw-bold font-gen">
        Prezzo: {{$article->price}}
      </p>
    </div>
    <div class="d-flex justify-content-evenly">
      <button class="card__button "><a href="{{route('articles.show', $article)}}" class="btn  link-offset-2 link-underline link-underline-opacity-0 text-color font-gen">Vai al dettaglio</a></button>
      <button class="card__button "><a href="{{route('articles.edit', $article)}}" class="btn  link-offset-2 link-underline link-underline-opacity-0 text-color font-gen">Modifica</a></button>
      {{-- <button class="card__button "><a href="{{route('articles.destroy', $article)}}" class="btn  link-offset-2 link-underline link-underline-opacity-0 text-color font-gen">Elimina</a></button> --}}

    </div>

  </div>
</article>