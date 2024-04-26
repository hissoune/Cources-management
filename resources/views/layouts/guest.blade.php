<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fillrouge</title>
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fillier.css') }}">

        
</head>
<body class="bg-gray-204">
    <main>
        @if (session('success'))
                  <div id="session" class="session_success" >
                      <span class="">{{ session('success') }}</span>
                      <button  id="close_session" type="button"class="border-0 text-white " style="background: transparent" data-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <title>Close</title>
                            <path d="M.646 1.646a.5.5 0 0 1 .708 0L8 7.293 15.354.646a.5.5 0 0 1 .708.708L8.707 8l7.354 7.354a.5.5 0 0 1-.708.708L8 8.707l-7.354 7.353a.5.5 0 1 1-.708-.708L7.293 8 .646 1.646a.5.5 0 0 1 0-.708z"/>
                        </svg>                    </button>
                  </div>
              @endif
              @if (session('error'))
             
              <div id="session" class="session_error" >
                  <p class="">{{ session('error') }}</p>
                <button  id="close_session" type="button" class="border-0 text-white " style="background: transparent" data-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="" viewBox="0 0 16 16">
                        <title>Close</title>
                        <path d="M.646 1.646a.5.5 0 0 1 .708 0L8 7.293 15.354.646a.5.5 0 0 1 .708.708L8.707 8l7.354 7.354a.5.5 0 0 1-.708.708L8 8.707l-7.354 7.353a.5.5 0 1 1-.708-.708L7.293 8 .646 1.646a.5.5 0 0 1 0-.708z"/>
                    </svg>                  
                </button>
              </div>
          @endif
        {{ $slot }}
    </main>
    
    <script src="{{ asset('./js/close_session.js') }}"></script>

</body>
</html>