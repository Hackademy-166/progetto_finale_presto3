<div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
                <form wire:submit="store" class="shadow p-5 bg-form">
                    <div class="mb-3">
                        <label for="title" class="form-label font-taglia font-gen">{{ __('ui.insertTitle') }}</label>
                        <input type="text" class="form-control " id="title" required wire:model.live="title">
                        @error('title')
                        <span class="fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label font-taglia font-gen">{{ __('ui.insertDescr') }}</label>
                        <textarea type="text" class="form-control " id="description" required wire:model.live="description"></textarea>
                        @error('description')
                        <span class="fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label font-taglia font-gen">{{ __('ui.insertPrice') }}</label>
                        <input type="text" class="form-control " id="price" required wire:model.blur="price">
                        @error('price')
                        <span class="fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="temporary_images" class="form-label font-taglia font-gen">{{ __('ui.insertImage') }}</label>
                        <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error ('temporary_images.*') is-invalid @enderror" placeholder="Img/">
                        @error ('temporary_images.*')
                        <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                        @error ('temporary_images.*')
                        <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    @if (!empty($images))
                    <p>Photo preview:</p>
                    <div class="row border border-4 border-dark rounded shadow py-4">
                        @foreach ($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded" style="background-image: url({{ $image->temporaryUrl() }});"></div>
                            <button type="button" wire:click="removeImage({{ $key }})" class="btn btn-danger mt-2">{{ __('ui.insertRem') }}</button>
                        </div>
                        @endforeach
                    </div>
                    @endif     
                    <div class="mb-3">
                        <label for="category" class="form-label font-taglia font-gen">{{ __('ui.insertCategory') }}</label>
                        <select class="form-select" id="category" required wire:model="category">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{__("ui.$category->category_name")}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" id="btn_trigger" class="btn card-button">{{ __('ui.insertButton') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>