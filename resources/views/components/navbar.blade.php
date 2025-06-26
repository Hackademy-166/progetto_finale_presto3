 {{-- <nav class="navbar navbar-expand-lg bg-nav text-color font-text">
  <div class="container-fluid">
    <a class="navbar-brand font-title" href="{{route('homepage')}}">PRESTO.IT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li> 
      </ul>



        <li class="nav-item">
          <a class="nav-link" href="{{route('articles.index')}}">I nostri articoli</a>
        </li>
        <ul class="navbar-nav mx-3">
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle font-extra"   data-bs-toggle="dropdown" aria-expanded="false">
            Articoli
          </button>
          <ul class="dropdown-menu bg-drop">

            <li><a class="dropdown-item" href="{{route('articles.index')}}">I nostri Articoli</a></li>
             <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="{{route('articles.create')}}"></a>Inserisci un articolo</li>

            
              
            </ul>
          </li>
          

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articoli
          </a>
          <ul class="dropdown-menu bg-drop">
            <li><a class="dropdown-item" href="{{route('articles.index')}}">I nostri articoli</a></li>
            @auth
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('articles.create')}}">Inserisci Articolo</a></li>
            @endauth
          </ul>
        </li>




        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>



          <ul class="dropdown-menu bg-drop">
            @foreach($categories as $category)
            <li><a class="dropdown-item text-dark" href="{{route('categories-index', $category)}}">{{$category->category_name}}</a></li>
            @if($category->id !=12)
            <li><hr class="dropdown-divider"></li>
            @endif
            @endforeach
          </ul>
        </li>
        
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu bg-drop">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            @auth
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('articles.create')}}">Inserisci Articolo</a></li>
            @endauth
          </ul>
        </li>
        
     </ul>
      
      
      @auth
      
      <ul class="navbar-nav mx-3">
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle font-title fs-4" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}}
          </button>
          <ul class="dropdown-menu bg-drop">
            <li><a class="dropdown-item" href="#">Profilo</a></li>
            <li><a class=" btn dropdown-item " onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Log-Out</a>
              <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form></li>
              
            </ul>
          </li>
        </ul>
        
        
        @endauth
        
        
        @guest
        
        <div class="d-lg-flex col-lg-3 justify-content-lg-end align-items-lg-center">
          <a class="me-1 btn mx-3 bg-button" href="{{route('login')}}">Login</a>
          <a href="{{route('register')}}" class="ms-1 btn mx-3 bg-button">Registrati</a>
        </div>
        
        @endguest
        
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn bg-button" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav> 

  --}}


  <nav>
  <ul>
    <li>
      <a class="text-dark"  href="{{route('homepage')}}">Home</a>
    </li>
    <li class="">
          <a class="text-dark" href="{{route('articles.index')}}">I nostri articoli</a>
    </li>
    
    <li class="dropdown ">
          <a class="text-dark dropdown-toggle nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>

          <ul class="dropdown-menu dropdown-custom ">
            @foreach($categories as $category)
            <li><a class="text-dark dropdown-item" href="{{route('categories-index', $category)}}">{{$category->category_name}}</a></li>
            @if($category->id !=12)
            <li><hr class="dropdown-divider"></li>
            @endif
            @endforeach
          </ul>
        </li>
        
        
      @auth
      <li>
        <a class="text-dark" href="{{route('articles.create')}}">Inserisci un articolo</a>
      </li> 
      <li class="">
          <a class="text-dark" href="{{route('contact')}}">Lavora con noi</a>
        </li> 
          
      @endauth


      @auth
      
        <li class=" dropdown">
          <a href="" class="text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a> 
            
          <ul class="dropdown-menu">
            <li><a class="text-dark dropdown-item linker" href="#">Profilo</a></li>
            <hr class="dropdown-divider">
            
            <li><a class="text-dark dropdown-item linker" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Log-Out</a>
              <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form></li>
            </ul>
        
          </li>

          @if(Auth::user()->is_revisor)
            <li><a class="text-dark position-relative linker" href="{{route('revisor.dashboard')}}">Zona revisore <span class="position-absolute top-0 start-100 translate-middle rounded">{{\App\Models\Article::toBeRevisedCount()}}</span></a></li>
          @endif
    
        @endauth





      @guest    
    <li>
      <a class="me-1 mx-3 text-dark " href="{{route('login')}}">Login</a>
    </li>
    <li>
      <a href="{{route('register')}}" class="ms-1 mx-3 text-dark ">Registrati</a>
    </li>
    @endguest
  </ul>
</nav>