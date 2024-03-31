
<div class="container-xxl relative p-0">
    <nav x-data="{ open: false }" class="bg-gradient-to-br from-gray-800 to-gray-900 text-white px-4 py-3">
        <div class="flex items-center justify-between">
            <div>
                <a href="#" class="text-2xl font-bold flex items-center text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-8 h-8 text-yellow-600 mr-2">
                        <path fill-rule="evenodd" d="M5 2h14a2 2 0 012 2v18a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2 0 012-2zm0 2a.5.5 0 00-.5.5v14a.5.5 0 00.5.5h14a.5.5 0 00.5-.5V4a.5.5 0 00-.5-.5H5zm1 2a1 1 0 00-1 1v2a1 1 0 002 0V7h10v2a1 1 0 002 0V7a1 1 0 00-1-1H6z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-yellow-600">Even</span><span class="text-blue-500">TO</span>
                </a>
            </div>
           
            

            <div class="hidden lg:flex space-x-4">
                {{-- <a href="{{ route('/') }}" class="hover:text-gray-300">Home</a> --}}
              
                <a aria-current="page" class="active" href="">
                    <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg  text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"></path>
                        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"></path>
                      </svg>
                      <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Home</p>
                    </button>
                  </a>

              
              
           
               <div class="group">
                <a class="" href="">
                   
                  </a>
                <div class="hidden group-hover:block absolute  bg-gray-800 text-white p-2 space-y-2">
                    <a class="" href="">
                        <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path d="M12 2a5 5 0 100 10 5 5 0 000-10zm0 8a3 3 0 110-6 3 3 0 010 6zm8.25 4.5a10.82 10.82 0 01-4.22.86 8 8 0 10-12.06 0 10.82 10.82 0 01-4.22-.86A7.93 7.93 0 000 18c0 2.2 1.8 4 4 4h16a4 4 0 004-4 7.93 7.93 0 00-3.75-6.75z"></path>
                            </svg>
                            
                            
                          <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">profile</p>
                        </button>
                      </a>
                      <form method="POST" action="">
                       
        
                        <a class="hover:text-gray-300 block" href=""
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                           <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zM17.72 12.22a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                            </svg>
                            
                          <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">sign out</p>
                        </button>
                        </a>
                    </form> 
                   
                </div>
            </div>
              
                <a class="" href="">
                    <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 15.08V10a1 1 0 012 0v5.08a2.997 2.997 0 11-2 0z"></path>
                        </svg>
                          <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Log in</p>
                    </button>
                  </a>
                
                <a class="" href="">
                    <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM12 15a4 4 0 110-8 4 4 0 010 8zm6 0a6 6 0 01-12 0h12z"></path>
                        </svg>
                        
                          <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Register</p>
                    </button>
                  </a>
               
               
               
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>


    </nav>

        </div>
    </div>
</div>
