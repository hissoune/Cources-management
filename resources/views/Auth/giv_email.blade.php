<x-guest-layout>
    <x-slot name="slot">
        <section class="register">
                        <h1 class="">
                            <a class=" logo" href="{{ route('/') }}"><span>GRAD</span> SCHOOL</a>
                        </h1>
                    <div class="form-container">
                      
                       
    
                        <div class="login-box">
                            <h2>Enter your Email</h2>
                            <form action="{{ route('send_Email') }}" method="POST">
                                @csrf
                              <div class="user-box">
                                <input type="email" name="email" required="">
                                <label>email</label>
                              </div>
                              @error('email')
                              <span class="text-danger">{{ $message }}</span>
                           @enderror
                              <button type="submit">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Send Email
                              </button>
    
                            </form>
                          </div>
                    </div>
            
            
          </section>
    </x-slot>
    
    
    </x-guest-layout>