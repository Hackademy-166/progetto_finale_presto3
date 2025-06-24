<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <div class="col-md-8">
      <div class="card-body bg-card">
        <h5 class="card-title font-extra">Titolo: {{$article->title}}</h5>
        <p class="card-text font-text">Descrizione: {{$article->description}}</p>
        <p class="card-text font-extra">Prezzi: {{$article->price}}</p>
        <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-text">Categoria: {{$article->category->category_name}}</a>
        
      </div>
</div>