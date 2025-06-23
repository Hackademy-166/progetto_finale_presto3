<x-layout>
    <x-slot name="title">Registrati</x-slot>
    <header class="container vh-100">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center fw-bold display-1">Register Now</h1>
            </div>
        </div>
    </header>
 <!-- Alert per Form -->
    @if (session('success') )
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
 <!-- Fine Alert per Form -->
     
 <!-- INIZIO FORM -->
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="shadow p-5 rounded" method="POST" action="{{route('register')}}">
                    @csrf
                     <div class="mb-3">
                        <label for="name" class="form-label">Nome utente</label>
                        <input type="text" class="form-control " value="{{old('name')}}" id="name" name="name" required value="{{old('name')}}">
                        @error('name')
                            <span class="fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control " value="{{old('email')}}" id="email" name="email" aria-describedby="emailHelp" required value="{{old('email')}}">
                        @error('email')
                           <span class="fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control " id="password" name="password" required>
                        @error('password')
                           <span class="fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="confirmation_password" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="confirmation_password" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-outline-danger">Registrati</button>
                    <p>Sei già registrato? <hr> <a class="text-dark" href="{{route('login')}}">Vai al login</a></p>
                </form>
            </div>
        </div>
</section>
 <!-- FINE FORM -->
</x-layout>