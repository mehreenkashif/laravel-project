<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    .text-grey {
        color: #cccccc; /* Light grey color */
      }


    body {
        margin: 0;
        padding: 0;
        background-color: #f0f0f0; /* Set background color or image for the body */
    }

    header {
        background-color: rgba(255, 255, 255, 0.0); /* Use RGBA for transparency (adjust the last value for transparency) */
        padding: 20px;
        /* position: fixed; */
        width: 100%;
        z-index: 1000; /* Set a high z-index to ensure the header is above other elements */
    }

    /* Additional styles for navigation links or logo can be added here */

    section {
        margin-top: 80px; /* Adjust this value to prevent content from being hidden behind the fixed header */
        padding: 20px;
    }
</style>
    @yield('css')
{{--  --}}

{{--  --}}

</head>
<body>

    {{-- <header>
        <!-- Your logo, navigation menu, or other header content goes here -->
        <h5>Management System</h5>
        <nav class="navbar navbar-expand-md">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item dropdown">
                    <a href="Students/show" class="nav-link">Students</a>
                   </li>

                   <li class="nav-item dropdown">
                    <a href="Classes/show" class="nav-link">Classes</a>
                   </li>
                   <li class="nav-item dropdown">
                    <a href="Teachers/show" class="nav-link">Teachers</a>
                   </li>
            </ul>
        </nav>
    </header> --}}

    <div id="app">
        <header>
        <nav class="navbar navbar-expand-md navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

                    <b class="text-grey">Management System</b>
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                           <li class="nav-item dropdown">
                            <a href="Students/show" class="nav-link">Students</a>
                           </li>

                           <li class="nav-item dropdown">
                            <a href="Classes/show" class="nav-link">Classes</a>
                           </li>
                           <li class="nav-item dropdown">
                            <a href="Teachers/show" class="nav-link">Teachers</a>
                           </li>


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
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>
       </header>

        <main >
            {{-- py-4 --}}
            @yield('content')
        </main>

    </div>
</body>
</html>


{{--  --}}


