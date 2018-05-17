<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark" id="ftco-navbar">
     <div class="container">
       <a class="navbar-brand" href="{{route('welcome')}}">Taste</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="oi oi-menu"></span> Menu
       </button>

       <div class="collapse navbar-collapse" id="ftco-nav">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item active"><a href="{{route('admin')}}" class="nav-link">ADMIN</a></li>
           <li class="nav-item">
             <a href="{{route('show.cart')}}" class="nav-link">
             <i class="fas fa-shopping-cart"></i><span id="total" class="caret">
             @if(Session::has('cart'))
               {{Session::get('cart')->totalQty}}

             @endif
             </span></li></a>
             <li class="nav-item"><a href="{{route('carts.cart')}}" class="nav-link">Cart
              @auth<span id="jquery" class="caret">{{$totalItems}}</span></a></li>@endauth
           <li class="nav-item"><a href="{{route('dish')}}" class="nav-link">Dishes</a></li>
@auth
           <li class="nav-item"><a href="{{route('reservation.index')}}" class="nav-link">RESERVATIONS</a></li>
@endauth
           @guest
           <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
           {{-- <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" data-toggle="modal" data-target="#registrationModal">{{ __('Register') }}</a></li> --}}

    @else
        <li class="nav-item">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
              <a class="dropdown-item" href="{{route('users.profile')}}">Profile</a>
            </div>
        </li>
    @endguest
         </ul>
       </div>
     </div>

   </nav>
