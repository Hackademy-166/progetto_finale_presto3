<x-layout>
    <x-slot name="title">Creazione Profilo</x-slot> 
    <div class="container vh-50 my-5">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center fw-bold display-1">Creazione Profilo</h1>
            </div>
        </div>
    </div>
    <!-- ALERT PROFILO CREATO CON SUCCESSO -->
    @if (session('success') )
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <!-- FINE ALERT PROFILO CREATO CON SUCCESSO -->
    <section>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <livewire:create-profile />
                </div>
            </div>
        </div>
    </section>
</x-layout>