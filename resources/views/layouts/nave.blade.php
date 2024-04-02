@if(request()->is('/'))
<header>
    <nav id="navbar-scroll-boo" class="navbar  fixed-top navbar-expand-lg navbar-dark nav-color text-uppercase">
        <div class="container">
            <a class="navbar-brand logo" href="{{ route('/') }}"><span>GRAD</span> SCHOOL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-position" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item list-style">
                        <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown list-style">
                        <a class="nav-link " href="{{ route('about') }}" >about us</a>
                    </li>
                    <li class="nav-item list-style">
                        <a class="nav-link" href="{{ route('courcess') }}">courses</a>
                    </li>
                    <li class="nav-item list-style">
                        <a class="nav-link" href="{{ route('teacheres') }}">Teachers</a>
                    </li>
                    <li class="nav-item list-style">
                        <a class="nav-link" href="{{ route('filliers') }}">Filliers</a>
                    </li>
                    
                    @if (Route::has('login'))
                    @auth
                        <div class="dropdown">
                            <button class="btn text-white dropdown-toggle " type="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu nav-color" aria-labelledby="navbarDropdownMenuLink">
                                @role('teacher')
                                <a class="dropdown-item dropdown-style" href="{{ route('teacher') }}">dasboard</a>
                                @endrole
                                @role('director')
                                <a class="dropdown-item dropdown-style" href="{{ route('dasboard') }}">dasboard</a>
                                @endrole
                                @role('student')
                                    <li class="nav-item list-style">
                                        <a class="nav-link" href="{{ route('profile') }}">profile</a>
                                    </li>
                                @endrole
                                <a class="dropdown-item dropdown-style" href="{{ route('logout') }}">logout</a>
                            </div>
                        </div>
                    @else
                        <li class="nav-item list-style">
                            <i class=""></i>
                            <a class="nav-link" href="{{ route('login') }}">login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item list-style">
                            <i class=""></i>
                            <a class="nav-link" href="{{ route('register') }}">register</a>
                        </li>
                        @endif
                    @endauth
                
            @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- vidéo -->
    <div id="home" class="overlay"></div>
    
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="./images/course-video.mp4" type="video/mp4">
    </video>
    <!-- Endvidéo -->

    <div class="container description text-uppercase">
        <p>
            GRADUATE SCHOOL OF MANAGEMENT
        </p>
        <h1>
            <span>YOUR</span> CLASSROOM
        </h1>
        <button>discover more</button>

</header>
@else
<div>
    <nav id="navbar-scroll-boo" class="navbar   navbar-expand-lg navbar-dark nav-color text-uppercase">
        <div class="container">
            <a class="navbar-brand logo" href="{{ route('/') }}"><span>GRAD</span> SCHOOL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-position" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item list-style">
                        <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown list-style">
                        <a class="nav-link " href="{{ route('about') }}" 
                            >
                            about us
                        </a>
                       
                    </li>
                    
                    <li class="nav-item list-style">
                        <a class="nav-link" href="{{ route('courcess') }}">courses</a>
                    </li>
                    <li class="nav-item list-style">
                        <a class="nav-link" href="{{ route('teacheres') }}">Teachers</a>
                    </li>
                    <li class="nav-item list-style">
                        <a class="nav-link" href="{{ route('filliers') }}">Filliers</a>
                    </li>
                    
                    @if (Route::has('login'))
                    @auth
                        <div class="dropdown">
                            <button class="btn text-white dropdown-toggle " type="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu nav-color" aria-labelledby="navbarDropdownMenuLink">
                                @role('teacher')
                                <a class="dropdown-item dropdown-style" href="{{ route('teacher') }}">dasboard</a>
                                @endrole
                                @role('director')
                                <a class="dropdown-item dropdown-style" href="{{ route('dasboard') }}">dasboard</a>
                                @endrole
                                @role('student')
                                <li class="nav-item list-style">
                                    <a class="nav-link" href="{{ route('profile') }}">profile</a>
                                </li>
                                @endrole
                                <a class="dropdown-item dropdown-style" href="{{ route('logout') }}">logout</a>
                            </div>
                        </div>
                    @else
                        <li class="nav-item list-style">
                            <i class=""></i>
                            <a class="nav-link" href="{{ route('login') }}">login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item list-style">
                            <i class=""></i>
                            <a class="nav-link" href="{{ route('register') }}">register</a>
                        </li>
                        @endif
                    @endauth
                
            @endif
                </ul>
            </div>
        </div>
    </nav>

   
</div>
@endif
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>