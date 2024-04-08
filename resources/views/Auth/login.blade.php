<x-home-layout>
<x-slot name="slot">
    <section class="register">
                    <h1 class="">
                        LOG IN
                    </h1>
                <div class="form-container">
                  
                    <form class="register-form" action="{{ route('logedin') }}">
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
                    </form>
                </div>
        
        
      </section>
</x-slot>


</x-home-layout>