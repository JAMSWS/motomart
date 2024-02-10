
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


<div class="main-navbar shadow-sm sticky-top">



    <div class="top-navbar bg-white">
        <div class="container-fluid"  >
            <div class="row">
                <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block" >
                    <a class="navbar-brand" style="font-size: 30px" href="{{ url('/') }}">
                        <img style="width:150px; margin-left: 10rem;" src="{{ asset('assets/images/newlogomotomart.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-5 my-auto">
                    <form role="search">
                        <div class="input-group" style="margin-left: 15rem;">
                            <input type="search" placeholder="Search your parts now!" class="form-control"  />
                            <button class="btn bg-danger" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 my-auto">
                    <ul class="nav justify-content-end">

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-shopping-cart"></i> Cart (0)
                            </a>
                        </li>


                    @guest

                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link"  data-bs-toggle="modal" data-bs-target="#loginModal">{{ __('Login') }}</a>
                            </li>
                        @endif




                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" id="registerButton" data-bs-toggle="modal" data-bs-target="#registermodal">{{ __('Register') }}</a>
                            </li>
                        @endif




                    @else







                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} <i class="fa fa-sign-out"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a></li>
                            </ul>
                        </li>


                    @endguest






                    </ul>




                </div>


            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                Funda Ecom
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/collections') }}">All Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/mew-arrivals') }}">New Arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Featured Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Fashions</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


</div>





