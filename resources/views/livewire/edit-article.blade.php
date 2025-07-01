<div>
    <form class="rounded bg-form p-5 shadow" wire:submit="editArticle">
        <div class="mb-3">
            <label for="title" class="form-label font-gen">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.live="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label font-gen">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model.live="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label font-gen">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.live="price">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label font-gen">Categoria</label>
            <select class="form-select" id="category" required wire:model.live="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn card-button font-gen">Modifica</button>
    </form>
</div>
