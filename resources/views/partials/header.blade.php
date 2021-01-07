<header>
  {{-- Header mobile-tablet  --}}
  <div class="header-mobile-tablet">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-small-wrapper d-flex justify-content-between align-items-center">
            <div class="burger-icon">
              <i class="fas fa-bars"></i>
            </div>
            <div class="logo">
              <a href="{{url('/')}}">
                <img src="{{asset('img/dc-logo.png')}}" alt="DC logo">
              </a>
            </div>
            <div class="search">
              <i class="fas fa-search"></i>
            </div>
          </div>
        </div>
      </div>
    </div>  {{-- Closing Container Header-mobile-tablet --}}
  </div>
  {{-- Header xl Desktop  --}}
  {{-- Header Top --}}
  <div id="header-top" class="header-xl-desktop">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="text-right">
            <li>
              <a class="text-uppercase" href="#">Dc power&#8480; visa<span>&reg;</span></a>
            </li>
            <li>
              <a class="text-uppercase" href="#">Additional dc sites</a>
            </li>
          </ul>
        </div>
      </div>
    </div>  {{-- Closing Container Header-top --}}
  </div>
  {{-- Navbar --}}
  <nav class="header-xl-desktop">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="nav-wrapper d-flex justify-content-between align-items-center">
            <div class="logo">
              <a href="{{url('/')}}">
                <img src="{{asset('img/dc-logo.png')}}" alt="DC logo">
              </a>
            </div>
            <div class="nav-menu">
              <ul>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'characters' ? 'active' : ''}}" href="{{route('characters')}}">Characters</a>
                </li>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'homepage' ? 'active' : ''}}" href="{{url('/')}}">Comics</a>
                </li>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Movies</a>
                </li>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'tv' ? 'active' : ''}}" href="{{route('tv')}}">Tv</a>
                </li>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'games' ? 'active' : ''}}" href="{{route('games')}}">Games</a>
                </li>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">Collectibles</a>
                </li>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'videos' ? 'active' : ''}}" href="{{route('videos')}}">Videos</a>
                </li>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'fans' ? 'active' : ''}}" href="{{route('fans')}}">Fans</a>
                </li>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'news' ? 'active' : ''}}" href="{{route('news')}}">News</a>
                </li>
                <li>
                  <a class="text-uppercase {{Request::route()->getName() === 'shop' ? 'active' : ''}}" href="{{route('shop')}}">Shop</a>
                </li>
              </ul>
            </div>
            <div class="search">
              <label class="d-none" for="search-product">Search</label>
              <input id="search-product" type="text" placeholder="Search">
              <i class="fas fa-search"></i>
            </div>
          </div>  {{-- Closing Nav Wrapper --}}
        </div>
      </div>
    </div>  {{-- Closing Container Navbar --}}
  </nav>
  {{-- Jumbotron --}}
  <div id="jumbotron">
    
  </div>
</header>
