<div class="card bg-card" style="width: 18rem;">
  <img src="https://picsum.photos/300/200" class="card-img-top img-fluid" alt="...">
  <div class="card-body">
    <div class="col-md-8">
      <div class="card-body ">
       <h5 class="card-title font-title">Titolo: <span class="font-text"> {{$article->title}}</span></h5>
         <p class="card-text font-title">Descrizione: <span class="font-text">{{$article->description}}</span> </p>
        <p class="card-text font-title">Prezzi: <span class="font-text">{{$article->price}}</span> </p>
        <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-title">Categoria: <span class="font-text">{{$article->category->category_name}}</span> </a>
      </div>
</div>