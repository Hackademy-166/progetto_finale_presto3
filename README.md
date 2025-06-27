PRESTO GRUPPO 3 Adriano-Emiliano-Luca DG-Lorezo-Sabrina

PALETTE:
--smoky-black: #100b00ff; --secondary-text
--mountbatten-pink: #a288a6ff;
--light-blue: #c3dfe0ff;
--reseda-green: #5c7457ff; --accent
--honeydew: #ecfee8ff; --primary

FONT:
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=LXGW+Marker+Gothic&family=Savate:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

.lxgw-marker-gothic-regular {
  font-family: "LXGW Marker Gothic", sans-serif;
  font-weight: 400;
  font-style: normal;
} --testo

.savate-<uniquifier> {
  font-family: "Savate", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}

.abril-fatface-regular {
  font-family: "Abril Fatface", serif;
  font-weight: 400;
  font-style: normal;
 } --titolo

PREFERENZE DI LAVORO:

back-end: Lorenzo, Luca, Adriano
front-end: Sabrina, Emiliano

*all'esigenza tutti facciamo tutto

pasta al pesto
 
prova (sab)
prova lorenzooooo 




<!-- <div class="card-body ">
       <h5 class="card-title font-title">Titolo: <span class="font-text"> {{$article->title}}</span></h5>
         <p class="card-text font-title">Descrizione: <span class="font-text">{{$article->description}}</span> </p>
        <p class="card-text font-title">Prezzi: <span class="font-text">{{$article->price}}</span> </p>
        <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-title">Categoria: <span class="font-text">{{$article->category->category_name}}</span> </a> -->






        <x-layout>
    <x-slot name="title">Homepage</x-slot>
    <header >
        <div class="container-fluid c1">
            <div class="row d-flex justify-content-center  ">

                <div class="col-12 col-md-6 col-lg-4  ">
                    <img src="/img/Bianco_e_Nero_Minimalista_Life_Coach_Logo__3_-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- ALERT PER RIFIUTO ARTICOLO -->
    @if(session()->has('errorMessage'))
        <div class="alert alert-danger">
            {{session('errorMessage')}}
        </div>
    @endif
    
    <section>
        <div class="container mt-5 ">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-8"> 
                    
                    
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">


                            @foreach ($articles as $article )
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}" aria-current="true" aria-label="Slide {{$loop->index}}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($articles as $article )
                                {{-- <div class="carousel-item  {{$loop->first ? 'active' : ''}}"  data-bs-interval="10000">
                                    <img src="https://picsum.photos/300/200" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-white">{{$article->title}}</h5>
                                        <p class="text-white">{{$article->price}}</p>
                                    </div>
                                </div> 
                            @endforeach
                        </div>      
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>




                </div>
            </div>
        </div>
    </section>  --}}

    <section>
        <h1 class="text-center font-title display-1 mt-5">Gli ultimi articoli</h1>
        <div class="container vh-auto p-1">
            <div class="row">
                @foreach ($articles as $article )
                <div class="col-12 col-md-4">
                    <x-card-vertical :article="$article" />
                </div>
                @endforeach
            </div>
        </div>
        
    </section>
   


</x-layout>




















<!-- DASHBOARD UTENTE -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                @if ($profile && $profile->user_id === $user->id)
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <form action="{{route('user.destroy')}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn bg-button" >Elimina</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        </div>
   
    <section class="container-fluid">
        <div class="row  justify-content-center align-items-center pt-3">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card-dash">
                    <div class="ds-top"></div>
                    <div class="avatar-holder">
                        <img src="" alt="">
                    </div>
                    <div class="name">
                        <!-- <a href="" target="_blank">{{Auth::user()->name}}</a> -->
                        <!-- <h6 title="Followers"><i class="fas fa-users"></i> <span class="followers">90</span></h6> -->
                        <h8 class="text-color">{{Auth::user()->name}} <br> {{Auth::user()->email}}</h8>
                    </div>
                    <div class="button">
                        <a href="route('revisor.dashboard')" class="btn btn-custom">Ruolo <i class="fas fa-user-plus"></i></a>
                    </div>
                    <div class="ds-info">
                        <div class="ds pens">
                            <h6 class="text-color">Articoli Pubblicati<i class="fas fa-edit"></i></h6>
                            <p>29</p>
                        </div>
                        <div class="ds projects">
                            <h6  class="text-color">Articoli Veduti<i class="fas fa-project-diagram"></i></h6>
                            <p>0</p>
                        </div>
                        <div class="ds posts">
                            <h6 class="text-color">Articoli Acquistati<i class="fas fa-comments"></i></h6>
                            <p>0</p>
                        </div>
                    </div>
                    <div class="ds-skill">
                        <h6 class="text-color"> Valutazione Utente<i class="fa fa-code" aria-hidden="true"></i></h6>
                        <div class="skill html">
                            <h6><i class="fab fa-html5 text-color"></i>Affidabilità da venditore</h6>
                            <div class="bar bar-html">
                                <!--  <p>95%</p> inserire un contatore della percentuale in base ai feedback ricevuti -->
                            </div>
                        </div>
                        <div class="skill css">
                            <h6><i class="fab fa-css3-alt text-color"></i> Affidabilità da compratore </h6>
                            <div class="bar bar-css">
                                <p>90%</p>
                            </div>
                        </div>
                        @if(Auth::user()->is_revisor)
                            <div class="skill javascript text-color">
                                <h6><i class="fab fa-js"></i> Progressi Revisore </h6>
                                <div class="bar bar-js">
                                    <p>75%</p>
                                </div>
                            </div>
                        @endif
                </div>


                <!--seconda card-->
                @if($profile && $profile->user_id === $user->id)
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="ds-top"></div>
                            <div class="avatar-holder">
                                <img src="" alt="">
                            </div>
                            <div class="name">
                                <!-- <a href="" target="_blank">{{Auth::user()->name}}</a> -->
                                <!-- <h6 title="Followers"><i class="fas fa-users"></i> <span class="followers">90</span></h6> -->
                                <h8 class="text-color">{{$profile->name}} <br> {{$profile->surname}}</h8>
                            </div>
                            <div class="button">
                                <h6>{{$profile->birthdate}} <i class="fas fa-user-plus"></i></h6>
                            </div>
                            <div class="ds-info">
                                <div class="ds pens">
                                    <h6 class="text-color">Articoli Pubblicati<i class="fas fa-edit"></i></h6>
                                    <p>29</p>
                                </div>
                                <div class="ds projects">
                                    <h6  class="text-color">Articoli Veduti<i class="fas fa-project-diagram"></i></h6>
                                    <p>0</p>
                                </div>
                                <div class="ds posts">
                                    <h6 class="text-color">Articoli Acquistati<i class="fas fa-comments"></i></h6>
                                    <p>0</p>
                                </div>
                            </div>
                            <div class="ds-skill">
                                <h6> Valutazione Utente<i class="fa fa-code" aria-hidden="true"></i></h6>
                                <div class="skill html">
                                    <h6><i class="fab fa-html5"></i>Affidabilità da venditore</h6>
                                    <div class="bar bar-html">
                                        <!--  <p>95%</p> inserire un contatore della percentuale in base ai feedback ricevuti -->
                                    </div>
                                </div>
                                <div class="skill css">
                                    <h6><i class="fab fa-css3-alt"></i> Affidabilità da compratore </h6>
                                    <div class="bar bar-css">
                                        <p>90%</p>
                                    </div>
                                </div>
                                <div class="skill javascript">
                                    <h6><i class="fab fa-js"></i> Progressi Revisore </h6>
                                    <div class="bar bar-js">
                                        <p>75%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-12 col-md-3 col-lg-3">
                        <h4 class="">Non hai ancora inserito il tuo profilo</h4>
                        <a href=""><h8 class=" text-center ">Aggiungi il tuo profilo></h8></a>
                    </div>
                @endif  
                </div>
                </section>