<x-layout>
    <x-slot name="title">Dashboard {{Auth::user()->name}}</x-slot>
    <header class="vh-auto">
        <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h1 class="text-dark text-title text-center fw-bold display-1">Profilo Utente</h1>
            </div>
        </div>
    </div>
</header>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                @if ($profile && $profile->user_id === $user->id)
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <form action="" method="POST">
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
                {{-- @else
                    <div class="col-12 col-md-3 col-lg-3">
                        <h4 class="">Non hai ancora inserito il tuo profilo</h4>
                        <a href=""><h8 class=" text-center ">Aggiungi il tuo profilo></h8></a>
                    </div> --}}
                @endif  
        </div>
    </section>
</x-layout>