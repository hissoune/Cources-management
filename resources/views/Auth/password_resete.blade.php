<x-guest-layout>
    <x-slot name="slot">
        <section class="register">
                        <h1 class="">
                            <a class=" logo" href="{{ route('/') }}"><span>GRAD</span> SCHOOL</a>
                        </h1>
                    <div class="form-container">
                      
                       
    
                        <div class="login-box">
                            <h2>Resete password</h2>
                            <form action="{{ route('reste_pass') }}" method="POST">
                                @csrf
                                <input type="text" hidden name="token" value="{{ $token }}" required="">
                                <input type="text" hidden name="email" value="{{ $email }}" required="">

                                <div class="user-box">
                                    <input type="password" name="password" required="">
                                    <label>Password</label>
                                  </div>
                              @error('password')
                              <span class="text-danger">{{ $message }}</span>
                           @enderror
                           <div class="user-box">
                            <input type="password" name="confrime_password" required="">
                            <label>confrime password</label>
                          </div>
                      @error('confrime_password')
                      <span class="text-danger">{{ $message }}</span>
                   @enderror
                              <button type="submit">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Resete
                              </button>
    
                            </form>
                          </div>
                    </div>
            
            
          </section>
    </x-slot>
    
    
    </x-guest-layout>