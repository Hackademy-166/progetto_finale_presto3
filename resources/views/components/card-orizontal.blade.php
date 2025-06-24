<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Titolo{{$articles->title}}</h5>
        <p class="card-text">Descrizione{{$articles->description}}</p>
        <p class="card-text">Prezzi{{$articles->price}}</p>
        <a href="">Categoria:{{$articles->category->category_name}}</a>
        
      </div>
    </div>
  </div>
</div>