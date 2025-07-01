    <nav>
      <ul>
        <li class="dropdown ">
          <a class=" dropdown-toggle  text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid  fa-language"></i>
          </a>          
          <ul class="dropdown-menu dropdown-custom">
            
            <li class="dropdown-item m-0 p-0"><a class="m-0 p-1 text-dark text-center" href=""><x-_locale  lang="it"/></a></li>
            <hr class="m-0 p-0 dropdown-divider">
            <li class="dropdown-item m-0 p-0"><a class="m-0 p-1 text-dark text-center" href=""><x-_locale  lang="en"/></a></li>
            <hr class="m-0 p-0 dropdown-divider">
            <li class="dropdown-item m-0 p-0"><a class="m-0 p-1 text-dark text-center" href=""><x-_locale  lang="es"/></a></li>
          </ul>
        </li>
      </ul>
      
      
      <ul>
        
        
        <li>
          <a class="text-dark"  href="{{route('homepage')}}">Home</a>
        </li>
        <li class="text-dark">
          <a class="text-dark" href="{{route('articles.index')}}">{{ __('ui.navArticle') }}</a>
        </li>
        
        <li class="dropdown ">
          <a class=" dropdown-toggle  text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('ui.navCategorie') }}
          </a>          
          <ul class="dropdown-menu dropdown-custom">
            @foreach($categories as $category)
            <li class="dropdown-item m-0 p-0"><a class="m-0 p-3 text-dark" href="{{route('categories-index', $category)}}">{{__("ui.$category->category_name")}}</a></li>
            @if($category->id !=12)
            <hr class="m-0 p-0 dropdown-divider">
            
            @endif
            @endforeach
          </ul>
        </li>
        
        
        
        
        
        @auth
        <li>
          <a class="text-dark" href="{{route('articles.create')}}">{{ __('ui.navInsert') }}</a>
        </li> 
        <li>
          <a class="text-dark" href="{{route('contact')}}">{{ __('ui.navWork') }}</a>
        </li> 
        
        @endauth
        
        
        @auth
        
        <li class=" dropdown">
          <a href="" class="text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a> 
          
          <ul class="dropdown-menu dropdown-custom ">
            <li class="dropdown-item m-0 p-0" ><a class="text-dark m-0 p-3  " href="{{route('dashboard', Auth::user())}}">{{ __('ui.navProfilo') }}</a></li>
            <hr class="dropdown-divider">
            
            <li class="dropdown-item m-0 p-0"><a class="text-dark m-0 p-3" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Log-Out</a>
              <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form></li>
            </ul>
            
          </li>
          
          @if(Auth::user()->is_revisor)
          <li><a class="text-dark position-relative " href="{{route('revisor.dashboard')}}">{{ __('ui.navRevisor') }} <span class="position-absolute top-0 start-100 translate-middle rounded">{{\App\Models\Article::toBeRevisedCount()}}</span></a></li>
          @endif
          
          @endauth
          
          
          
          
          
          @guest    
          <li>
            <a class="me-1 mx-3 text-dark " href="{{route('login')}}">Login</a>
          </li>
          <li>
            <a href="{{route('register')}}" class="ms-1 mx-3 text-dark ">{{ __('ui.navRegister') }}</a>
          </li>
          @endguest
          
          <li>
            <div class="container-Search">
              <form action="{{route('search')}}" method="GET" role="search" >
                
                
                <input checked="" class="checkbox" type="checkbox"> 
                
                <div class="mainbox">
                  
                  <div class="prova">
                    
                    <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="search_icon"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>
                  </div>
                  
                  <div class="iconContainer">
                    <input class="search_input form-control-search" aria-label="search" name="query" placeholder="search" type="text">
                    <button type="submit" class="btn " id="basic-addon2"></button>
                  </div>
                  
                </div>
                
                
              </form>
            </div>
          </li>
          
          
          
          
          
          
          
        </ul>
      </nav>