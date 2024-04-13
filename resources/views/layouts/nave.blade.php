
<div>
    <nav id="navbar-scroll-boo" class="navbar   navbar-expand-lg navbar-dark nav-color text-uppercase">
        <div class="container">
            
            <a class="navbar-brand logo" href="{{ route('/') }}"><span>GRAD</span> SCHOOL</a>
            <button class="navbar-toggler " id="burger-menu" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" navbare" id="navbarNavDropdown">
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
                </ul>
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                    @auth
                        <div class="dropdown">
                            <button class="btn text-white dropdown-toggle " type="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu nav-color" aria-labelledby="navbarDropdownMenuLink">
                                @role('teacher')
                                <a class="dropdown-item dropdown-style" href="{{ route('teacher') }}">dasboard</a>
                                <a class="dropdown-item" href="{{ route('Abonnments_teacher') }}">Abonnments</a>

                                @endrole
                                @role('director')
                                <a class="dropdown-item dropdown-style" href="{{ route('dasboard') }}">dasboard</a>
                                @endrole
                                @role('student')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('profile') }}">profile</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('cources_for_student') }}">Your Cources</a>
                                </li>
                                @endrole
                                <a class="dropdown-item dropdown-style" href="{{ route('logout') }}">logout</a>
                            </div>
                        </div>
                    
                    @else
                    
                    <li class="nav-item">
                        <i class=""></i>
                        <a id="loginLink" class="nav-link" href="{{ route('login') }}" title="login">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                        </a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item ">
                            <i class=""></i>
                            <a id="loginLink" class="nav-link" href="{{ route('register') }}" title="Register"><i class="bi bi-person-add" ></i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                              </svg></a>
                        </li>

                        @endif
                    </ul>
                    @endauth
                
            @endif
                
            </div>
        </div>
    </nav>
    @if(request()->is('/'))
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
@endif
    
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>