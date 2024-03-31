<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
        <!-- Styles -->
       
    </head>
    <body class="antialiased">
       <div>@include('layouts.nave')</div>
       <main>
        @if (session('success'))
          <div class="alert alert-success w-50 alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger d-flex justify-content-center align-items-center w-50 mx-auto alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span class="text-white px-1 bg-danger border-0" aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    

        {{ $slot }}
       </main>

    
    <footer class="text-white text-center text-lg-start " style="background-color: #080d2c;">
              <!-- Grid container -->
              <div class="container p-4">
                <!--Grid row-->
                <div class="row mt-4">
                  <!--Grid column-->
                  
                  <!--Grid column-->
          
                  <!--Grid column-->
                  <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                   
          
                    <div class="form-outline form-white mb-4">
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 48.8px;"></div><div class="form-notch-trailing"></div></div></div>
          
                    <ul class="fa-ul" style="margin-left: 1.65em;">
                      <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">New York, NY 10012, US</span>
                      </li>
                      <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">info@example.com</span>
                      </li>
                      <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 01 234 567 88</span>
                      </li>
                      <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 01 234 567 89</span>
                      </li>
                    </ul>
                  </div>
                  <!--Grid column-->
          
                  <!--Grid column-->
                  <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Opening hours</h5>
          
                    <table class="table text-center text-white">
                      <tbody class="font-weight-normal">
                        <tr>
                          <td>Mon - Thu:</td>
                          <td>8am - 9pm</td>
                        </tr>
                        <tr>
                          <td>Fri - Sat:</td>
                          <td>8am - 1am</td>
                        </tr>
                        <tr>
                          <td>Sunday:</td>
                          <td>9am - 10pm</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="mt-4">
                        <!-- Facebook -->
                        <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-facebook-f"></i></a>
                        <!-- Dribbble -->
                        <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-dribbble"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-google-plus-g"></i></a>
                        <!-- Linkedin -->
                      </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Grid container -->
          
              <!-- Copyright -->
              <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
              </div>
              <!-- Copyright -->
            </footer>
            
                       
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="./js/js.js"></script>

    </body>
</html> 