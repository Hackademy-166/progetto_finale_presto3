<x-layout>
    <x-slot name="title">Modifica Profilo {{$profile->name}}</x-slot>
    <div class="container vh-auto">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center font-gen fw-bold display-1">Modifica Dati Profilo</h1>
            </div>
        </div>
    </div>

{{-- Messaggio di avvenuta modifica del profilo --}}
    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif    


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-6">
                <livewire:edit-profile :profile="$profile" />
            </div>
        </div>
    </div>
</x-layout>