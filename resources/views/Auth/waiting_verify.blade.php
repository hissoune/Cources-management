<x-guest-layout>
    <x-slot name="slot">
        <section class="register">
                        <h1 class="">
                            <a class=" logo" href="{{ route('/') }}"><span>GRAD</span> SCHOOL</a>
                        </h1>
                    <div class="form-container">
                      
                       
    
                        <div class="login-box">
                            <h2 class="text-success">verification sent</h2>
                            <form action="{{ route('rsend_Email',$user) }}" >
                                @csrf
                              <div class="user-box text-white">
                               <p>hello <strong>{{ $user->name }}</strong> </p>
                              </div>
                              <div class="user-box text-white">
                                <p>we sent verification to <strong>{{ $user->email }}</strong></p>
                               </div>
                              <button type="submit">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Resend Email
                              </button>
    
                            </form>
                          </div>
                    </div>
            
            
          </section>
    </x-slot>
    
    
    </x-guest-layout>