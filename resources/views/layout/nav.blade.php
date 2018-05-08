<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
     <div class="container">
       <a class="navbar-brand" href="index.html">Taste</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="oi oi-menu"></span> Menu
       </button>

       <div class="collapse navbar-collapse" id="ftco-nav">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item active"><a href="{{route('admin')}}" class="nav-link">ADMIN</a></li>
           <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
           <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
           <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
           <li class="nav-item"><a href="#section-news" class="nav-link">News</a></li>
           <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
           <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
           <li class="nav-item"><a href="{{route('dish')}}" class="nav-link">Dishes</a></li>

           @guest
           <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
           {{-- <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" data-toggle="modal" data-target="#registrationModal">{{ __('Register') }}</a></li> --}}

    @else
        <li class="nav-item">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
                </form>
            </div>
        </li>
    @endguest
         </ul>
       </div>
     </div>
   </nav>
