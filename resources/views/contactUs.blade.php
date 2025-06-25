<x-layout>
    <x-slot name="title">Lavora Con Noi</x-slot>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h1 class="text-dark text-center pt-5 display-1 font-title">Lavora Con Noi</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form class="p-5 shadow" method="POST" action="{{route('submit')}}">
                        @csr
                        <div class="mb-3">
                            <label for="name" class="form-label text-center w-100 text-white">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="surname" class="form-label text-center w-100 text-white">Cognome</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Cognome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-center w-100 text-white">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label text-center w-100 text-white">Lascia il tuo messaggio</label>
                            <textarea class="form-control" name="user_message" id="message" cols="30" rows="10" placeholder="Raccontaci perché vuoi lavorare con noi." required></textarea>
                        </div>
                        <div class="d-flex justify-content-center">   
                            <button type="submit" class="btn bg-button">Invia</button>
                        </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>