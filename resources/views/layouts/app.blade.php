<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fillrouge</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>

      <div class=" ">
        <div class=" min_nave bg-gradient-to-br from-gray-800 to-gray-900">
        <div class="">
          
      </div>
      <div >
        <button  class="text-white focus:outline-none" id="mobile-menu-toggle">
            <svg class=" w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
  </div>
        @include('layouts.navigation')

      </div>
  
    <div class="content   ">
                
       <h2 class="text-center my-6 p-6 logo"> <a class="  " href="{{ route('/') }}"><span>GRAD</span> SCHOOL</a></h2>

     
    <div class="content_tables">
            <div class=" border-b font-bold my-3 p-6">
             
                @if(@isset($title))
                <h1 class="text-center  mb-1 title">{{ $title }}</h1>
                
                @endif
             
              
            </div>
            <div class="w-full p-6  px-0 pt-0 pb-2">
              @if (session('success'))
                  <div id="session" class="session_success" >
                      <span class="">{{ session('success') }}</span>
                      <button  id="close_session" type="button" class="" data-dismiss="alert" aria-label="Close">
                        <svg class="fill-current h-12 w-12 text-white-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 0 1 .707.707L10.707 10l4.348 4.348a.5.5 0 0 1-.707.707L10 10.707l-4.348 4.348a.5.5 0 0 1-.707-.707L9.293 10 4.945 5.652a.5.5 0 0 1 .707-.707L10 9.293l4.348-4.348z"/></svg>
                    </button>
                  </div>
              @endif
              @if (session('error'))
              {{-- <script>
                windows.alert({{ session('error') }})
              </script> --}}
              <div id="session" class="session_error" >
                  <p class="">{{ session('error') }}</p>
                  <button  id="close_session" type="button" class="" data-dismiss="alert" aria-label="Close">
                      <svg class="fill-current h-12 w-12 text-white-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 0 1 .707.707L10.707 10l4.348 4.348a.5.5 0 0 1-.707.707L10 10.707l-4.348 4.348a.5.5 0 0 1-.707-.707L9.293 10 4.945 5.652a.5.5 0 0 1 .707-.707L10 9.293l4.348-4.348z"/></svg>
                  </button>
              </div>
          @endif

              <div class="p-6">{{ $slot }}</div>
            </div>
          </div>
      
      <div class="text-blue-gray-600 ">
        <footer class="py-2">
          <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">© 2024, made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="-mt-0.5 inline-block h-3.5 w-3.5">
                <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path>
              </svg> by <a href="https://github.com/hissoune" target="_blank" class="transition-colors hover:text-blue-500">Khalid Hissoune</a> for a better web. </p>
            <ul class="flex items-center gap-4">
              <li>
                <a href="https://github.com/hissoune" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Creative Tim</a>
              </li>
            </ul>
          </div>
        </footer>
      </div>
    </div>

  <script src="{{ asset('./js/dash.js') }}"></script>
  <script src="{{ asset('./js/close_session.js') }}"></script>
  <script src="{{ asset('./js/addresum.js') }}"></script>

 
</body>
</html>