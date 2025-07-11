<x-layout>

    <section>
        <x-slot name="title">Inserisci Articolo</x-slot>
        <header class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h1 class="text-dark text-center pt-5 display-1 font-gen" id="prova-title">{{ __('ui.insertArt') }}</h1>
                </div>
            </div>
        </header>
        
        <div class="container vh-auto">
            <div class="row">
                <livewire:create-article />
            </div>
        </div>
    </section>
    
</x-layout>