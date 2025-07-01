<div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if(session('message'))
                    <div id="timer_alert" class="alert alert-success">
                        {{session('message')}}
                        
                        <script>
                            let btn_trigger=document.querySelector('#btn_trigger');
                            let timer_alert=document.querySelector('#timer_alert');

                            btn_trigger.addEventListener('click', function() {
                                timer_alert.classList.add('sparisci');
                            });                        
                        </script>                
                        
                    </div> 
                @endif
                
                <form wire:submit="store" class="shadow rounded p-5 bg-form">
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
                        <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error ('temporary_images.*') is-invalid @enderror" placeholder="Img/">
                        @error ('temporary_images.*')
                        <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                        @error ('temporary_images')
                        <p class="fst-italic text-danger">({ $message })</p>
                        @enderror
                    </div>
                    @if (!empty($images))
                    
                    <p>Photo preview:</p>
                    <div class="row border border-4 border-success rounded shadow py-4">
                        @foreach ($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded" style="background-image: url({{ $image->temporaryUrl() }});"></div>
                            <button type="button" wire:click="removeImage({{ $key }})" class="btn btn-danger mt-2">Rimuovi</button>
                        </div>
                        @endforeach
                    </div>
                    @endif     
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select class="form-select" id="category" required wire:model="category">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" id="btn_trigger" class="btn bg-button ">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
</div>