<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>your school</title>

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/card.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fillier.css') }}">
        
       
    </head>
    <body class="">
       <div>@include('layouts.nave')</div>
       <main>
        <div id="popupModal" class="popup-modal">
          <div class="popup-content">
            <span id="popupClose" class="popup-close">&times;</span>
            <p id="popupMessage" class="popup-message"></p>
          </div>
        </div>
        @if (session('success'))
          <div id="successAlert" class="alert alert-success w-50 alert-dismissible fade show" role="alert">
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

    
   
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul>
            <li><a href="#">watch</a></li>
            <li><a href="#">bag</a></li>
            <li><a href="#">shoes</a></li>
            <li><a href="#">dress</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
 </footer>

    
    
            <script src="{{ asset('./js/ff.js') }}"></script>          
    <script src="{{ asset('./js/scrole.js') }}"></script>          
    <script src="{{ asset('./js/js.js') }}"></script>
    <script src="{{ asset('./js/pdf.js') }}"></script>
    <script src="{{ asset('./js/serch_mobile.js') }}"></script>
    <script src="{{ asset('./js/smoth.js') }}"></script>
    

    </body>
</html> 