<x-layout>
    <x-slot name="title">Lavora Con Noi</x-slot>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h1 class="text-dark text-center pt-5 display-1 font-gen">Lavora Con Noi</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-6">
                <form class="p-5 bg-form shadow" method="POST" action="{{route('submit')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label w-100 text-dark font-taglia font-gen">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required value="{{Auth::user()->profile->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="surname" class="form-label w-100 text-dark font-taglia font-gen">Cognome</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Cognome" required value="{{Auth::user()->profile->surname}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label w-100 text-dark font-taglia font-gen">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required value="{{Auth::user()->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label w-100 text-dark font-taglia font-gen">Lascia il tuo messaggio</label>
                            <textarea class="form-control" name="user_message" id="message" cols="30" rows="10" placeholder="Raccontaci perché vuoi lavorare con noi." required></textarea>
                        </div>
                        <div class="d-flex justify-content-center">   
                            <button type="submit" class="btn card-button">Invia</button>
                        </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>