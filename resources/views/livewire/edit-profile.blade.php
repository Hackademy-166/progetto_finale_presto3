<div>
    <form class="rounded p-5 shadow" wire:submit="editProfile">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model.live="name" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" wire:model.live="surname" value="{{old('surname')}}">
        </div>
        <div class="mb-3">
            <label for="brithdate" class="form-label">Data di nascita</label>
            <input type="date" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate" wire:model.live="birhtdate" value="{{old('birthdate')}}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" wire:model.live="address" value="{{old('address')}}">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">Citta</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" wire:model.live="city" value="{{old('city')}}">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Paese</label>
            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" wire:model.live="country" value="{{old('country')}}">
        </div>
        <div class="mb-3">
            <label for="postal_code" class="form-label">CAP</label>
            <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" wire:model.live="postal_code" value="{{old('postal_code')}}">
        </div>
        <button type="submit" class="btn card-button">Modifica</button>
    </form>
</div>
