<x-layout>
    <h1>DETTAGLIO ARTICOLO {{$article->title}}</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <x-card-orizontal :article="$article" />
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    {{-- CAROSELLO --}}
                </div>
            </div>
        </div>
    </section>
</x-layout>