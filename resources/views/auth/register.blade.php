<x-layout>
    <x-slot name="title">Registrati</x-slot>
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center pt-5 display-1 font-title">Register Now</h1>
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
    <section class="container  mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="shadow p-5 rounded  bg-form" method="POST" action="{{route('register')}}">
                    @csrf
                     <div class="mb-3">
                        <label for="name" class="form-label">Nome utente</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror @success('email') is-valid @endsuccess" value="{{old('name')}}" id="name" name="name" required value="{{old('name')}}">
                        @error('name')
                            <span class="fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror " value="{{old('email')}}" id="email" name="email" aria-describedby="emailHelp" required value="{{old('email')}}">
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
                    <button type="submit" class="btn bg-button">Registrati</button>
                    <p class="mt-3">Sei già registrato? <hr> <a class="text-dark" href="{{route('login')}}">Vai al login</a></p>
                </form>
            </div>
        </div>
</section>
 <!-- FINE FORM -->
</x-layout>