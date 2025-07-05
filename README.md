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





<!-- <div class="card-body ">
       <h5 class="card-title font-title">Titolo: <span class="font-text"> {{$article->title}}</span></h5>
         <p class="card-text font-title">Descrizione: <span class="font-text">{{$article->description}}</span> </p>
        <p class="card-text font-title">Prezzi: <span class="font-text">{{$article->price}}</span> </p>
        <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-color font-title">Categoria: <span class="font-text">{{$article->category->category_name}}</span> </a> -->





DA FARE:
- rivedere search
- funzione extra user story 3
- counter un po’ più lento
- gestire footer inserendo rotte e nomi sezioni, icone dei social e perché non si vede il primo span
- gestire pagina categorie con una parte laterale con tutte le categorie per swithchare più facilmente



EXTR:
- fare form per newsletter con mail
- form per assistenza su pubblicazione annuncio con mail
- gestire error
- divisione articoli per zona
- modifica nome utente ed email



/* colori */
:root{
    --color-p: rgb(246, 254, 219); /*primary-sfondo */
    --color-s: rgb(16, 11, 0); /*secondary-testo */
    --color-a: #E6D3A3; /*accent-verdino */
    --color-a2: #D8D174; /*accent-verdino-giallino */
    --color-a3: rgb(181, 196, 84); /*accent-verdino-più */
}


/* font */

.font-title{
    font-family: "Sansita", sans-serif;
}

.font-text{
    font-family: "Open Sans";
}

.font-extra{
    font-family: "Savate", sans-serif;
}

/* colori */

.bg-standard{
    background-color:var(--color-p) ;
}

.bg-header{
    background-image: url(../../public/img/CoverPage2.png);
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: center;
    
}

.bg-button{
    background-color:rgba(92, 116, 87, 0.781) ;
    border: 2px solid var(--color-s);
   
}

.bg-drop{
    background-color: rgba(246, 254, 219, 0.468);
}

.bg-form{
    background: linear-gradient(rgba(16, 11, 0, 0.301), rgba(181, 196, 84, 0.405));
}

.text-color{
    color: var(--color-s);
}

.bg-card{
    background-color:  rgba(246, 254, 219, 0.468);
}

/* hover */

.bg-button:hover{
    background-color: rgba(181, 196, 84, 0.577);
    border: 2px solid var(--color-s);
    
    transition: 1000ms;

}


/*card*/

.card {
  /* width: 300px; */
  /* margin: 10px; */
  border: 1px solid black;
  align-items: stretch; 
  
}

.card-p {
  overflow: auto; 
}

/*navbar*/


/* html {
  height:100%;
  background-image: linear-gradient(to right top, #8e44ad 0%, #3498db 100%);
} */

nav {
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 40px;
  /* mask-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #ffffff 25%, #ffffff 75%, rgba(255, 255, 255, 0) 100%); */
  /* padding-bottom: 20vh;  */
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
}

nav ul {
  text-align: center;
  
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  margin-top: 15px;
  padding: 18px;
  font-family: "Open Sans";
  text-transform: uppercase;
  color: rgba(0, 35, 122, 0.5);
  font-size: 18px;
  text-decoration: none;
  display: block;
}

nav ul li a:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
  background: rgba(255, 255, 255, 0.1);
  color: rgba(0, 35, 122, 0.7);
}

.dropdown-custom{
  z-index: 10;
  background-color: rgba(181, 196, 84, 0.812);
 
}





/*immagine*/

img{
    max-width: 100%;
    height: auto;
    
}

h1{
  z-index: 0;
  background-color: transparent;
}

.container-dashboard {
  background: linear-gradient(rgba(16, 11, 0, 0.301), rgba(181, 196, 84, 0.405));
  height: 70vh;
  width: 80vh;
  justify-self: center;
  padding: 15px;
  border-radius: 5%;
  margin-top: 7vh;
}




.sparisci {
  animation-name: prova;
  animation-duration: 3s;
}

@keyframes prova {
  0% {translate: 0px;}
  50% {translate: 50px;}
  100% {translate: 150px;}
}



/* CARD NUOVA ----------------------------------------------------------*/

@import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap");

:root {
 
  /* --brand-color: hsl(46, 100%, 50%);
  --black: hsl(0, 0%, 0%);
  --white: hsl(0, 0%, 100%); */
  
  --font-title: "Montserrat", sans-serif;
  --font-text: "Lato", sans-serif;
}

/* RESET */

/* Box sizing rules */
*,
*::before,
*::after {
  box-sizing: border-box;
}



/* h2 {
  font-size: 2.25rem;
  font-family: var(--font-title);
  color: var(--white);
  line-height: 1.1;
}

p {
  font-family: var(--font-text);
  font-size: 1rem;
  line-height: 1.5;
  color: var(--white);
} */

/* .flow > * + * {
  margin-top: var(--flow-space, 1em);
} */

/* CARD COMPONENT */

.card-custom {
  display: grid;
  place-items: center;
  width: 80vw;
  max-width: 21.875rem;
  height: 28.125rem;
  overflow: hidden;
  border-radius: 0.625rem;
  /* box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25); */
}

.card-custom > * {
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}

.card__background {
  object-fit: cover;
  max-width: 100%;
  height: 100%;
}

.card__content {
  --flow-space: 0.9375rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-self: flex-end;
  height: 55%;
  width: 100%;
  padding: 12% 1.25rem 1.875rem;
  /* background: linear-gradient(
    180deg,
    hsla(0, 0%, 0%, 0) 0%,
    hsla(0, 0%, 0%, 0.3) 10%,
    hsla(0, 0%, 0%, 0.101) 100%
  ); */
  background: linear-gradient(
    180deg,
   #d8d17411 0%,
    rgba(246, 254, 219, 0.097) 10%,
    rgba(246, 254, 219, 0.096) 100%
  )
}

.card__content--container {
  --flow-space: 1.25rem;
}

.card__title {
  position: relative;
  width: 100%;
  width: -moz-fit-content; /* Prefijo necesario para Firefox  */
}

.card__title::after {
  content: "";
  position: absolute;
  height: 0.3125rem;
  width: calc(100% + 1.25rem);
  bottom: calc((1.25rem - 0.5rem) * -1);
  left: -1.25rem;
  background-color: var(--color-a3);
}

.card__button {
  padding: 0.75em 1.6em;
  display: flex;
  justify-content: center;   
  align-items: center;
  width: fit-content;
  width: -moz-fit-content; 
  font-variant: small-caps;
  font-weight: bold;
  border-radius: 0.45em;
  border: none;
  background-color: #d8d174da;
  font-family: var(--font-title);
  font-size: 1.125rem;
  color: var(--black);
}

.card__button:focus {
  outline: 2px solid black;
  outline-offset: -5px;
}

@media (any-hover: hover) and (any-pointer: fine) {
  .card__content {
    transform: translateY(62%);
    transition: transform 500ms ease-out;
    transition-delay: 500ms;
  }

  .card__title::after {
    opacity: 0;
    transform: scaleX(0);
    transition: opacity 1000ms ease-in, transform 500ms ease-out;
    transition-delay: 500ms;
    transform-origin: right;
  }

  .card__background {
    transition: transform 500ms ease-in;
  }

  .card__content--container > :not(.card__title),
  .card__button {
    opacity: 0;
    transition: transform 500ms ease-out, opacity 500ms ease-out;
  }

  .card-custom:hover,
  .card-custom:focus-within {
    transform: scale(1.05);
    transition: transform 500ms ease-in;
  }

  .card-custom:hover .card__content,
  .card-custom:focus-within .card__content {
    transform: translateY(0);
    transition: transform 500ms ease-in;
  }

  .card-custom:focus-within .card__content {
    transition-duration: 0ms;
  }

  .card-custom:hover .card__background,
  .card-custom:focus-within .card__background {
    transform: scale(1.3);
  }

  .card-custom:hover .card__content--container > :not(.card__title),
  .card-custom:hover .card__button,
  .card-custom:focus-within .card__content--container > :not(.card__title),
  .card-custom:focus-within .card__button {
    opacity: 1;
    transition: opacity 500ms ease-in;
    transition-delay: 1000ms;
  }

  .card-custom:hover .card__title::after,
  .card-custom:focus-within .card__title::after {
    opacity: 1;
    transform: scaleX(1);
    transform-origin: left;
    transition: opacity 500ms ease-in, transform 500ms ease-in;
    transition-delay: 500ms;
  }
}


/* search */

/* From Uiverse.io by vnuny */ 

.container-Search{
  position: relative;
  box-sizing: border-box;
  width: fit-content;
}

.mainbox {
  box-sizing: border-box;
  position: relative;
  width: 230px;
  height: 50px;
  display: flex;
  flex-direction: row-reverse;
  align-items: center;
  justify-content: center;
  border-radius: 160px;
  background-color: #a4977662;
  transition: all 0.3s ease;
}

/* .prova{
  position: absolute;

} */

/* .prova:checked{
  right: 50px;
  position: absolute;
} */

.checkbox:focus {
  border: none;
  outline: none;
}

/* .checkbox:checked {
  right: 10px;
} */

.checkbox:checked ~ .mainbox {
  width: 50px;
}

.checkbox:checked ~ .mainbox .search_input {
  width: 0;
  height: 0px;
}

.checkbox:checked ~ .mainbox .iconContainer {
  padding-right: 8px;
}

.checkbox {
  box-sizing: border-box;
  width: 30px;
  height: 30px;
  position: absolute;
  right: 17px;
  top: 10px;
  z-index: 9;
  cursor: pointer;
  appearance: none;
}

.search_input {
  box-sizing: border-box;
  height: 90%;
  width: 170px;
  background-color: transparent;
  border: none;
  outline: none;
  padding-bottom: 8px;
  padding-left: 10px;
  font-size: 1em;
  color: white;
  transition: all 0.3s ease;
  
}

.search_input::placeholder {
  color: rgba(255, 255, 255, 0.776);
}

.iconContainer {
  box-sizing: border-box;
  padding-top: 25px;
  width: fit-content;
  transition: all 0.3s ease;
}

.search_icon {
  box-sizing: border-box;
  fill: white;
  font-size: 1em;
  margin-right: 30px;
  /* padding-left: 5px; */
}

.form-control-search:focus{
  background-color: transparent;
  border: none;
  box-shadow: none;
  color: white;
}





git fetch



{{-- <section class="container">
        @if ($article_to_check)
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="col-6 col-md-4 mb-4 text-center">
                        <img src="https://picsum.photos/300"
                        class="img-fluid rounded shadow " alt="immagine segnaposto">
                    </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                <div>
                    <h1>{{ $article_to_check->title }}</h1>
                    <h3>Autore: {{ $article_to_check->user->name }} </h3> <h4>{{ $article_to_check->price }}€</h4>
                
                   <h4 class="fst-italic text-muted">{{ $article_to_check->category->category_name }}</h4>
                    <p class="h6">{{ $article_to_check->description }}</p>
                </div>
                <div class="d-flex pb-4 justify-content-around">
                    <form action="{{route('reject', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn card-button py-2 px-5 fw-bold">Rifiuta</button>
                    </form>
                    <form action="{{route('accept', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn card-button py-2 px-5 fw-bold">Accetta</button>
                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="row justify-content-center align-items-center height-custom text-center">
            <div class="col-12">
                <h1 class="fst-italic display-4">Nessun articolo da revisionare</h1>
            </div>
        </div>
        @endif
        <a href="{{ route('homepage') }}" class="mt-5 btn btn-success"> Torna </a>
    </section> --}}




        <div class="row justify-content-center">
            @forelse ($category->articles as $article)
                <div class="col-12 col-md-4">
                    <x-card-vertical :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="font-gen text-center p-5 display-4" >Nessun articolo nella categoria di: {{$category->category_name}}</h3>
                </div>

                <div class="col-12 col-md-3 col-lg-2">
                    <a class="btn card-button2 font-gen p-3 fs-4" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"  data-aos-duration="1000" href="{{route('homepage')}}">Torna alla home</a>
    
                </div>
            @endforelse
        </div>
    </div>