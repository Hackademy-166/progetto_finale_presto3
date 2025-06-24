<div>
    <form wire:submit="store" class="shadow rounded p-5">
        
       <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control " id="title" required wire:model.live="title">
            @error('title')
            <span class="fst-italic text-danger">{{$message}}</span>
            @enderror
        </div>
       <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control " id="description" required wire:model.live="description"></textarea>
            @error('description')
            <span class="fst-italic text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control " id="price" required wire:model.blur="price">
            @error('price')
            <span class="fst-italic text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <select class="form-select" id="category" required wire:model="category_id">
                @foreach ($categories as $category )
              <option value="{{$category->id}}">{{$category->category_name}}</option>
              @endforeach
            </select>
        </div>
          <button type="submit" class="btn ">Aggiungi articolo</button>

    </form>
</div>
