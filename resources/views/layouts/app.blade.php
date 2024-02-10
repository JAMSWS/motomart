

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title> @yield('title') </title>

    <meta name="description" content="@yield('meta_description')" />
    <meta name="keyword" content="meta_keyword" />
    <meta name="author" content="Motomart" />


    <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- plugins:css -->
   <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
   <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css')}}">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
    <!-- responsive style -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">

    {{-- Login & register styles --}}

     <link rel="stylesheet" href="{{ asset('assets/css-login/style.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/css-login/css/demo.css') }}">



    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    @livewireStyles

</head>
<body style="background-color: #727272">
    <div id="app">




        @include('layouts.inc.frontend.navbar')

        


        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">


                <a class="navbar-brand" style="font-size: 30px" href="{{ url('/') }}">
                    <img style="width:200px" src="{{ asset('assets/images/motomart.png') }}" alt="">
                </a>





                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">



                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!-- Authentication Links -->

                        @guest

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link"  data-toggle="modal" data-target="#loginModal">{{ __('Login') }}</a>
                                </li>
                            @endif



                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" id="registerButton"  data-toggle="modal" data-target="#registermodal">{{ __('Register') }}</a>
                                </li>
                            @endif


                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif


                       <!-- Include login modal -->
                        @if (Route::has('login') && !Auth::check())
                             @include('auth.modal-login')
                        @endif

                        <!-- Include register modal -->
                        @if (Route::has('register') && !Auth::check())
                             @include('auth.modal-register')
                        @endif

                    </ul>

                </div>


            </div>
        </nav> --}}



        <main>
            @yield('content')



        </main>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Custom JavaScript for modal switching -->
<script>
    $(document).ready(function() {
        $('#switchToRegister').click(function() {
            $('#loginModal').modal('hide');
            $('#registermodal').modal('show');
        });

        $('#switchToLogin').click(function() {
            $('#registermodal').modal('hide');
            $('#loginModal').modal('show');
        });
    });
</script>

    <!-- Custom JavaScript for modal closing -->
<script>


    $(document).ready(function() {
        // Function to handle hiding the modal and resetting form fields
        function closeModal(modalId) {
            $(modalId).modal('hide'); // Hide the modal
            $(modalId).find('form')[0].reset(); // Reset form fields on close
        }

        // Click event handler for the close button in login modal
        $('#loginModal .close').click(function() {
            closeModal('#loginModal');
        });

        // Click event handler for the close button in register modal
        $('#registermodal .close').click(function() {
            closeModal('#registermodal');
        });

        // Click event handler for clicking outside the modal
        $('#loginModal, #registermodal').on('click', function(event) {
            if (event.target == this) {
                closeModal($(this));
            }
        });

        // Function to switch between login and register modals
        $('#switchToRegister').click(function() {
            closeModal('#loginModal');
            $('#registermodal').modal('show');
        });

        $('#switchToLogin').click(function() {
            closeModal('#registermodal');
            $('#loginModal').modal('show');
        });
    });
</script>


    {{-- Login & register script --}}
    <script  src="{{ asset('assets/js-login/script.js') }}"></script>

    <!-- Scripts -->
    {{-- @vite(['public/assets/js/jquery-3.7.1.min.js']) --}}
    {{-- @vite(['public/assets/js/bootstrap.bundle.min.js']) --}}
    @vite(['public/assets/js/bootstrap.js'])
    @vite(['public/assets/js/custom.js'])

    @livewireStyles





</body>

</html>
