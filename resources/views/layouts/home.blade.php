<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>your school</title>
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css') }}" rel="stylesheet">

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/card.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fillier.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
        
       
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
        <div id="session" class="session_success" >
            <span class="">{{ session('success') }}</span>
            <button  id="close_session" type="button" class="border-0 text-white " style="background: transparent" data-dismiss="alert" aria-label="Close">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <title>Close</title>
                <path d="M.646 1.646a.5.5 0 0 1 .708 0L8 7.293 15.354.646a.5.5 0 0 1 .708.708L8.707 8l7.354 7.354a.5.5 0 0 1-.708.708L8 8.707l-7.354 7.353a.5.5 0 1 1-.708-.708L7.293 8 .646 1.646a.5.5 0 0 1 0-.708z"/>
            </svg>
                    </button>
        </div>
    @endif
    @if (session('error'))
    {{-- <script>
      windows.alert({{ session('error') }})
    </script> --}}
    <div id="session" class="session_error" >
        <p class="">{{ session('error') }}</p>
        <button  id="close_session" type="button"class="border-0 text-white " style="background: transparent" data-dismiss="alert" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <title>Close</title>
            <path d="M.646 1.646a.5.5 0 0 1 .708 0L8 7.293 15.354.646a.5.5 0 0 1 .708.708L8.707 8l7.354 7.354a.5.5 0 0 1-.708.708L8 8.707l-7.354 7.353a.5.5 0 1 1-.708-.708L7.293 8 .646 1.646a.5.5 0 0 1 0-.708z"/>
        </svg>        </button>
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
            <a href="#"><i class="bi bi-facebook"></i></a>
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
    <script src="{{ asset('./js/filter_by_price.js') }}"></script>
    <script src="{{ asset('./js/rate.js') }}"></script>
    
    <script src="{{ asset('./js/close_session.js') }}"></script>

    </body>
</html> 