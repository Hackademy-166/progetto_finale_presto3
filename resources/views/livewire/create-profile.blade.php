<div>
    <form class=" rounded bg-form p-5 shadow" wire:submit="createProfile">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" wire:model.live="name">
            @error ('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="surname" wire:model.live="surname">
            @error ('surname')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="brithdate" class="form-label">Data di nascita</label>
            <input type="date" class="form-control" id="birthdate" wire:model.live="birthdate">
            @error ('birhtdate')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Numero di telefono</label>
            <input type="text" class="form-control" id="phone_number" wire:model.live="phone_number" placeholder="+39 123456789">
            @error ('phone_number')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo</label>
            <input type="text" class="form-control" id="address" wire:model.live="address">
            @error ('address')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">Citta</label>
            <input type="text" class="form-control" id="city" wire:model.live="city">
            @error ('city')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Paese</label>
            <input type="text" class="form-control" id="country" wire:model.live="country">
            @error ('country')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="postal_code" class="form-label">Codice di Avviamento Postale</label>
            <input type="text" class="form-control" id="postal_code" wire:model.live="postal_code" placeholder="C.A.P. ES.00000">
            @error ('postal_code')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn bg-button">Crea</button>
    </form>
</div>
