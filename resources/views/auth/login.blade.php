<x-layout>
    <x-slot name="title">Login</x-slot>
    
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center pt-5 display-1 font-gen">Log-In</h1>
            </div>
        </div>
    </header>
    
    <!-- INIZIO FORM -->
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 ">



                <form class="shadow p-5 rounded mt-5 bg-form" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label font-gen">Email address</label>
                        <input type="email" class="form-control " id="email" name="email" aria-describedby="emailHelp" required value="{{old('email')}}">
                        @error('email')
                        <span class="fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label font-gen">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @error('password')
                        <span class="fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                        <label class="form-check-label font-gen" for="exampleCheck1" >Remember me</label>
                    </div>
                    <button type="submit" class="btn card-button font-gen">Log-In</button>
                    <p class="mt-3 font-gen"> Non sei ancora registrato? <hr> <a class="text-dark" href="{{route('register')}}">Registrati</a></p>
                </form>
                
                
            </div>
        </div>
    </section>
    <!-- FINE FORM -->
    
</x-layout>