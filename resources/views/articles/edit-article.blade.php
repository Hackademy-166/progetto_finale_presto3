<x-layout>
    <x-slot name="title">Modifica Articolo</x-slot>
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center pt-5 display-1 font-gen" id="prova-title">Modifica articolo {{$article->title}}</h1>
            </div>
        </div>
    </header>

    <div class="container vh-auto">
        <div class="row">
            <livewire:edit-article :article="$article"/>
        </div>
    </div>
    
</x-layout>