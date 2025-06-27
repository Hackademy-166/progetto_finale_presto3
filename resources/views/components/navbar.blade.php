    <nav>
      <ul>
        <li>
          <a class="text-dark"  href="{{route('homepage')}}">Home</a>
        </li>
        <li class="text-dark">
          <a class="text-dark" href="{{route('articles.index')}}">I nostri articoli</a>
        </li>
        
        <li class="dropdown ">
          <a class=" dropdown-toggle  text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>          
          <ul class="dropdown-menu dropdown-custom">
            @foreach($categories as $category)
            <li><a class="dropdown-item text-dark" href="{{route('categories-index', $category)}}">{{$category->category_name}}</a></li>
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
        <li>
          <a class="text-dark" href="{{route('contact')}}">Lavora con noi</a>
        </li> 
        
        @endauth
        
        
        @auth
        
        <li class=" dropdown">
          <a href="" class="text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a> 
          
          <ul class="dropdown-menu dropdown-custom ">
            <li><a class="text-dark dropdown-item linker" href="{{route('dashboard', Auth::user())}}">Profilo</a></li>
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
          
          <li>
            <div class="container-Search">
              <form action="{{route('search')}}" method="GET" role="search">
                <input checked="" class="checkbox" type="checkbox"> 
                <div class="mainbox">
                  <div class="iconContainer">
                    <input class="search_input form-control" aria-label="search" name="query" placeholder="search" type="text">
                    <button type="submit" class="btn " id="basic-addon2">
                      <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="search_icon"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          {{-- <li>
          <div class="container-Search">
            <form action="{{route('search')}}" method="GET">
              <input checked="" class="checkbox" type="checkbox"> 
              <div class="mainbox">
                <div class="iconContainer">
                  <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="search_icon"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>
                </div>
                <input class="search_input" placeholder="search" type="text">
              </div>
            </form>
          </div>
        </li> --}}
          
          
        </ul>
      </nav>