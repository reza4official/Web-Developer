<!-- Navigation Bar -->
<div class="container">
    <!-- Container -->
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <!-- Logo -->
    <a href="{{route('home')}}" class="navbar-brand">
        <img
        src="{{url('frontend/images/logo-pengembara.png')}}"
        alt="logo-pengembara"
        />
    </a>

    <!-- Button Collapse -->
    <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Responsive Display -->
    <div class="collapse navbar-collapse" id="navb">
        <!-- Item Navigasi -->
        <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-2">
            <a href="#" class="nav-link active">Home</a>
        </li>
        <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Paket Travel</a>
        </li>
        <li class="nav-item dropdown">
            <a
            href="#"
            class="nav-link dropdown-toggle"
            id="navbardrop"
            data-toggle="dropdown"
            >
            Services
            </a>
            <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Link 1</a>
            <a href="#" class="dropdown-item">Link 2</a>
            <a href="#" class="dropdown-item">Link 3</a>
            </div>
        </li>
        <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Testimonial</a>
        </li>
        </ul>

        @guest
            <!-- Mobile button -->
            <form class="form-inline d-sm-block d-md-none">
                @csrf
                <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href= '{{ url('login') }}';">
                    Masuk
                </button>
            </form>
    
            <!-- Desktop button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href= '{{ url('login') }}';">
                    Masuk
                </button>
            </form>
        @endguest

        @auth
            <!-- Mobile button -->
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">
                    Keluar
                </button>
            </form>
    
            <!-- Desktop button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                    Keluar
                </button>
            </form>
        @endauth

        
    </div>
    </nav>
</div>