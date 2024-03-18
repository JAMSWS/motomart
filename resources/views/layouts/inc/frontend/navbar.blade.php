<div>
    <!-- Include login modal -->
    @if (Route::has('login') && !Auth::check())
    @include('auth.modal-login')
    @endif
</div>

<div><!-- Include register modal -->
    @if (Route::has('register') && !Auth::check())
         @include('auth.modal-register')
    @endif</div>

<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container-fluid  mx-lg-4  mx-sm-0">
        <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{asset('assets/images/newlogomotomart.png')}}" alt="Motomart Logo" class="img-fluid" width="150" height="25">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggle" aria-controls="navbar-toggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars border border-color-black p-2  rounded-2"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-toggle">
        <form class="d-flex me-lg-5 me-md-0" role="search">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn bg-danger" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a href="{{ url('/cart') }}" class="nav-link text-black">
                <i class="fa-solid fa-cart-shopping"></i> Cart (<livewire:frontend.cart.cart-count/>)
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-black" href="{{ url('/wishlist') }}">
                <i class="fa fa-heart"></i> Wishlist (<livewire:frontend.wishlist-count />)
            </a>
        </li
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#loginModal">{{ __('Sign In') }}</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" style="cursor: pointer" id="registerButton" data-bs-toggle="modal" data-bs-target="#registermodal">{{ __('Sign Up') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i> {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu  dropdown-menu-end mt-0 me-3">
                    <li><a class="dropdown-item" href="{{ url('/wishlist') }}"><i class="fa fa-heart"></i> My Wishlist</a></li>
                    <li><a class="dropdown-item" href="{{ url('/cart') }}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }} <i class="fa fa-sign-out"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </li>
        @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class=" navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ url('/collections') }}">All Categories</a>
                </li>
                
            </ul>
        </div>
    </div>
</div>







