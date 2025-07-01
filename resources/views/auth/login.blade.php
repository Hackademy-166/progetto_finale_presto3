<x-layout>
    <x-slot name="title">Login</x-slot>
    
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-center pt-5 display-1 font-title">{{ __('ui.loginTitle') }}</h1>
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
                        <label for="email" class="form-label">{{ __('ui.loginMail') }}</label>
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
                        <label class="form-check-label" for="exampleCheck1" >{{ __('ui.loginRicordami') }}</label>
                    </div>
                    <button type="submit" class="btn bg-button ">Log-In</button>
                    <p class="mt-3">{{ __('ui.loginQuestion') }}<hr> <a class="text-dark" href="{{route('register')}}">{{ __('ui.loginRegister') }}</a></p>
                </form>
                
                
            </div>
        </div>
    </section>
    <!-- FINE FORM -->
    
</x-layout>