<x-guest-layout>
<x-slot name="slot">
    <section class="register">
                    <h1 class="">
                        <a class=" logo" href="{{ route('/') }}"><span>GRAD</span> SCHOOL</a>
                    </h1>
                <div class="form-container">
                  
                    {{-- <form class="register-form" action="{{ route('logedin') }}">
                        <div class="form-div">
                            <label for="email" class="register-text">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="form-div">
                            <label for="password" class="register-text">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        </div>
                       
                        <div class="form-div">
                            <button type="submit" class="btn">LOG IN</button>

                        </div>
                        
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        don't have an account? <a href="{{ route('register') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register now</a>
                        </p>
                    </form> --}}
                    {{-- <form action="{{ route('logedin') }}" method="POST" class="form-group fome_style">
                        @csrf
                    
                        <div class=" mb-3">
                            <div class="">
                                <label for="email" class="register-text">Your email</label>
                                <input type="email" class="form-control border "  placeholder="Email@gmail.com" name="email">
                            </div>
                            <div class="">
                                <label for="password" class="register-text">Password</label>
                                <input type="password" class="form-control border"  placeholder="••••••••" name="password">
                            </div>
                        </div>
                      
                        <div>
                            <a href="" >forgot password?</a>
                        </div>
                        <div class="form-div ">
                            <button type="submit" >LOG IN</button>
                          
                        </div>
                        
                    </form> --}}

                    <div class="login-box">
                        <h2>Login</h2>
                        <form action="{{ route('logedin') }}" method="POST">
                            @csrf
                          <div class="user-box">
                            <input type="email" name="email" required="">
                            <label>email</label>
                          </div>
                          <div class="user-box">
                            <input type="password" name="password" required="">
                            <label>Password</label>
                          </div>
                          <button type="submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            LOG IN
                          </button>
                          <a href="{{ route('forget.password') }}" >forgot password?</a>

                        </form>
                      </div>
                </div>
        
        
      </section>
</x-slot>


</x-guest-layout>