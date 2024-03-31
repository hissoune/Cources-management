<nav class="bg-gradient-to-br from-gray-800 to-gray-900 p-4 ">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo and Title -->
        <div>
            <a href="#" class="text-2xl font-bold flex items-center text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-8 h-8 text-yellow-600 mr-2">
                    <path fill-rule="evenodd" d="M5 2h14a2 2 0 012 2v18a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2 0 012-2zm0 2a.5.5 0 00-.5.5v14a.5.5 0 00.5.5h14a.5.5 0 00.5-.5V4a.5.5 0 00-.5-.5H5zm1 2a1 1 0 00-1 1v2a1 1 0 002 0V7h10v2a1 1 0 002 0V7a1 1 0 00-1-1H6z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-yellow-600">Even</span><span class="text-blue-500">TO</span>
            </a>
        </div>
        
        

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-4">
          
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="md:hidden">
            <button id="mobile-menu-toggle" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu"
    class="md:hidden  inset-0 bg-gray-800 bg-opacity-75 z-50 hidden justify-center items-center">
    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-4 rounded-md">
        <ul class="mb-4 flex flex-col gap-1">
            <li>
              <a aria-current="page" class="active" href="{{ route('/') }}">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"></path>
                    <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"></path>
                  </svg>
                  <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Home</p>
                </button>
              </a>
            </li>
            @role('director')
            <li>
              <a class="" href="">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                  </svg>
                  <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Users</p>
                </button>
              </a>
            </li>
            <li>
              <a class="" href="">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd"></path>
                  </svg>
                  <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Categories</p>
                </button>
              </a>
            </li>
            <li>
              <a class="" href="">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                        <path fill-rule="evenodd" d="M5 2h14a2 2 0 012 2v18a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2 0 012-2zm0 2a.5.5 0 00-.5.5v14a.5.5 0 00.5.5h14a.5.5 0 00.5-.5V4a.5.5 0 00-.5-.5H5zm1 2a1 1 0 00-1 1v2a1 1 0 002 0V7h10v2a1 1 0 002 0V7a1 1 0 00-1-1H6z" clip-rule="evenodd"></path>
                    </svg>
                    
                  <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Events</p>
                </button>
              </a>
            </li>
            @endrole
          </ul>
        
          <ul class="mb-4 flex flex-col gap-1">
            
            <li>
              <a class="" href="">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                        <path d="M12 2a5 5 0 100 10 5 5 0 000-10zm0 8a3 3 0 110-6 3 3 0 010 6zm8.25 4.5a10.82 10.82 0 01-4.22.86 8 8 0 10-12.06 0 10.82 10.82 0 01-4.22-.86A7.93 7.93 0 000 18c0 2.2 1.8 4 4 4h16a4 4 0 004-4 7.93 7.93 0 00-3.75-6.75z"></path>
                    </svg>
                    
                    
                  <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">profile</p>
                </button>
              </a>
            </li>
            <li>
              <a class="" href="{{ route('logout') }}">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                        <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zM17.72 12.22a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                    </svg>
                    
                  <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">sign out</p>
                </button>
              </a>
            </li>
          </ul>
    </div>
</div>