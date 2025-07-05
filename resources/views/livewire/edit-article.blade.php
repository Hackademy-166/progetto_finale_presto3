<div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="bg-form p-5 shadow" wire:submit="editArticle">
                    <div class="mb-3">
                        <label for="title" class="form-label font-taglia font-gen">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.live="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label font-taglia font-gen">Descrizione</label>
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model.live="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label font-taglia font-gen">Prezzo</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.live="price">
                    </div>
        
        <div class="mb-3">
            <label for="temporary_images" class="form-label font-taglia font-gen">{{ __('ui.insertImage') }}</label>
            <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error ('temporary_images.*') is-invalid @enderror" placeholder="Img/">
            @error ('temporary_images.*')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
            @error ('temporary_images.*')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        @if (!empty($images))
        <p>Photo preview:</p>
        <div class="row border border-4 border-dark rounded shadow py-4">
            @foreach ($article->images as $key => $image)
            <div class="col d-flex flex-column align-items-center my-3">
                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{ $image }});"></div>
                <button type="button" wire:click="removeImage({{ $key }})" class="btn btn-danger mt-2">{{ __('ui.insertRem') }}</button>
            </div>
            @endforeach
        </div>
        @endif
        
                    <div class="mb-3">
                        <label for="category" class="form-label font-taglia font-gen">Categoria</label>
                        <select class="form-select" id="category" required wire:model.live="category">
                            @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn card-button font-gen">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</div>
