<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Titolo{{$article->title}}</h5>
        <p class="card-text">Descrizione{{$article->description}}</p>
        <p class="card-text">Prezzi{{$article->price}}</p>
        <a href="">Categoria:{{$article->category->category_name}}</a>
        
      </div>
</div>