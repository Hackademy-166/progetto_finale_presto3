<nav class="navbar navbar-expand-lg bg-nav ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
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
        <div class="d-lg-col-lg-3 justify-content-lg-end align-items-lg-center">
          <a href="" class="btn bg-button mx-3">{{Auth::user()->name}}</a>
          <a class="mx-3 btn bg-button" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Log-Out</a>
          <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form>
        </div>
      @endauth

      @guest
        <div class="d-lg-flex col-lg-3 justify-content-lg-end align-items-lg-center">
          <a class="me-1 btn mx-3 bg-button" href="{{route('login')}}">Login</a>
          <a href="{{route('register')}}" class=" ms-1 btn mx-3 bg-button">Registrati</a>
        </div>
      @endguest  
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn bg-button" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>