<x-guest-layout>
    <x-slot name="slot">
        <section class="register">    
            <h1 class="">
                <a class=" logo" href="{{ route('/') }}"><span>GRAD</span> SCHOOL</a>
            </h1>            
                    <div class="form-container">
{{--                         
                        <form class="register-form" action="{{ route('registred') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="form-div">
                                <label for="name" class="register-text">Your name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
                            </div>
                            <div class="form-div">
                                <label for="email" class="register-text">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" >
                            </div>
                            <div class="form-div">
                                <label for="image" class="register-text">image</label>
                                <input type="file" name="image" id="image"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            </div>
                            <div class="form-div">
                                <label for="password" class="register-text">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            </div>
                            <div class="form-div">
                                <label for="password_confirmation" class="register-text">Confirm password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="form-div">
                                <label for="role" class="register-text">how do you want to register</label>
                                <select name="role" id="role"  class="">                              
                                <option class="option" value="student">student</option> 
                                <option value="teacher">teacher</option>
                                </select>
                                </div>
                            
                           
                                <div class="form-div">
                                    <button type="submit" class="btn">REGISTER</button>
        
                                </div>                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Already have an account? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                            </p>
                        </form> --}}

                        {{-- <form action="{{ route('registred') }}" method="POST" class="form-group fome_style" enctype="multipart/form-data">
                            @csrf
                        
                         
                                <div class="form-div">
                                    <label for="name" class="register-text">your name</label>
                                    <input type="text" class="form-control border "  placeholder="name" name="name">
                                </div>
                                <div class="form-div">
                                    <label for="email" class="register-text">Your email</label>
                                    <input type="email" class="form-control border "  placeholder="Email@gmail.com" name="email">
                                </div>
                                <div class="form-div">
                                    <label for="password" class="register-text">Password</label>
                                    <input type="password" class="form-control border"  placeholder="••••••••" name="password">
                                </div>
                                <div class="form-div">
                                    <label for="password_confirmation" class="register-text">password confirmation</label>
                                    <input type="password" class="form-control border"  placeholder="••••••••" name="password_confirmation">
                                </div>
                                <div class="form-div">
                                    <label for="image" class="register-text">image</label>
                                    <input type="file" class="form-control border"  placeholder="••••••••" name="image">
                                </div>
                                <div class="form-div">
                                <label for="role" class="register-text">student/teacher</label>
                                <select name="role" class="form-control border" id="role">
                                    <option  value="student">student</option> 
                                <option value="teacher">teacher</option>
                                </select>
                                </div>
                           
                          
                               
                            <div class="form-div">
                                <button type="submit" >Register</button>
    
                            </div>
                        </form> --}}

                        <div class="register-box ">
                            <h2>Register</h2>
                            <form action="{{ route('registred') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="user-box">
                                    <input type="text" name="name" required="">
                                    <label>username</label>
                                  </div>
                              <div class="user-box">
                                <input type="email" name="email" required="">
                                <label>email</label>
                              </div>
                              
                              <div class="user-box">
                                <input type="password" name="password" required="">
                                <label>Password</label>
                              </div>
                              <div class="user-box">
                                <label for="imageInput" class="custom-file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-upload mb-2" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                                      </svg> Choose Image
                                </label>
                                <input type="file" id="imageInput" name="image" accept="image/*" required>
                            </div>
                              <div class="user-box">
                                    <select name="role" id="">
                                        <option disabled selected>register as</option>
                                        <option  value="student">student</option> 
                                        <option value="teacher">teacher</option>  
                                    </select>   
                              </div>
                              <button type="submit">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Register
                              </button>
                              <a href="{{ route('login') }}" >allredy registred?</a>

                            </form>
                          </div>
                    </div>
                    </div>
               
          </section>
    </x-slot>
    </x-home-layout>