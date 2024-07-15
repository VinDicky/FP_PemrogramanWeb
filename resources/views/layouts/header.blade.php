{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand ms-4" href="#"><img class="logo" src="asset/logo-black.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">  <a class="nav-link active" aria-current="page" href="/">Home</a>
          <a class="nav-link" href="{{ route('services') }}">Service</a>
          <a class="nav-link" href="{{ route('cars') }}">Cars</a>
          <a class="nav-link" href="{{ route('about') }}">About Us</a>
          <a class="nav-link" href="{{ route('team') }}">Team</a>
          <a class="nav-link" href="contact.php">Contact</a>

        </div>
      </div>
    </div>
  </nav> --}}


  <header class="header">
    <nav class="navbar navbar-default" id="sticker">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="" alt=""/>Sewain</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="/">Beranda</a>
            </li>
            <li class="dropdown">
              <a href="car-listing-grid.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                                                             aria-haspopup="true" aria-expanded="false">Mobil <span class="ion-chevron-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('cars') }}">Semua Mobil</a></li>
              </ul>
            </li>
            {{-- <li class="dropdown">
              <a href="blog-listing.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                                                         aria-haspopup="true" aria-expanded="false">Blog <span class="ion-chevron-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="blog-listing.html">Blog Listing</a></li>
                <li><a href="post-single.html">Blog Post</a></li>
              </ul>
            </li> --}}
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                                         aria-haspopup="true" aria-expanded="false">Halaman <span class="ion-chevron-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                <li><a href="{{ route('contact') }}">Kontak Kami</a></li>
                <li><a href="checkout.html">checkout</a></li>
                <li><a href="shopping-cart.html">shopping cart</a></li>
              </ul>
            </li>
            
            
            @if (Route::has('login'))
                    @auth
                    <li class="login-register-link right-side-link ">
                      <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="right-side-link last">
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                      <button class="rq-btn rq-btn-dashed btn-mini dashed-border border-radius-round" type="submit" >Logout</button>
                      </form>
                    </li>
                    @else
                    <li class="login-register-link right-side-link"><a href="{{ route('login') }}">
                      <i class="icon_lock-open_alt"></i>Masuk</a>
                    </li>

                        @if (Route::has('register'))
                            <li class="right-side-links last unique-class"><a href="{{ route('register') }}">Daftar</a></li>
                        @endif
                    @endauth
            @endif
            {{-- <li class="dropdown right-side-link">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                                         aria-haspopup="true" aria-expanded="false">ENG<span class="ion-chevron-down"></span></a>
              <ul class="dropdown-menu with-language">
                <li><a href="#">Fr</a></li>
                <li><a href="#">De</a></li>
              </ul>
            </li> --}}
            {{-- <li class="dropdown right-side-link last">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                                         aria-haspopup="true" aria-expanded="false">USD<span class="ion-chevron-down"></span></a>
              <ul class="dropdown-menu with-language">
                <li><a href="#">USD</a></li>
                <li><a href="#">Eur</a></li>
              </ul>
            </li> --}}
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header> <!-- end header -->