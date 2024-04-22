<x-home-layout>
     <x-slot name="slot">

        <section class="py-5">
            <div class="container">
              <div class="row gx-5 cource_details">
                <aside class="col-lg-6">
                  <div class=" image_deatls ">
                      <img class="" src="/storage/{{ $cor->image }}" />
                   
                  </div>
                 
                  
                </aside>
                <main class="col-lg-6 d-flex flex-column justify-content-center">
                  <div class="ps-lg-3 ">
                    <h4 class="title text-light">
                     {{ $cor->name }}
                    </h4>
                    <div class="d-flex flex-row my-3 text-light">
                      <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>{{ $cor->Reservations->count() }} reservations</span>
                    </div>
          
                    <div class="mb-3 text-light">
                      <span class="h5">${{  $cor->price }}</span>
                      <span class="text-muted">/per box</span>
                    </div>
          
                    <p class="text-light">
                     {{ $cor->description }}
                    </p>
          
                    <div class="row text-light">
                      <dt class="col-3">fillier:</dt>
                      <dd class="col-9">{{ $cor->Fillier->name }}</dd>
          
                      <dt class="col-3">class</dt>
                      <dd class="col-9">{{ $cor->classe->name }}</dd>
                      <dt class="col-3">date</dt>
                      <dd class="col-9">{{ $cor->date }}</dd>

                      <dt class="col-3">start at :</dt>
                      <dd class="col-9">{{ $cor->start_time }}</dd>
          
                      <dt class="col-3">end at</dt>
                      <dd class="col-9">{{ $cor->end_time }}</dd>
                      <dt class="col-4">avalable seets</dt>
                      <dd class="col-8">{{ $cor->avalable_seetes }}</dd>
                    </div>
                    <div class="row ">
                    @auth
                    <div class="col-4">
                    @role('student')
                        <form action="{{ route('reserve_espec',$cor) }}" method="POST">
                            @csrf
                            <button class="btn btn-warning shadow-0">reserve espece</button>
                        </form>
                    </div>
                    <div class="col-5">
                         <a href="{{ route('checkout',$cor) }}" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> reserve online </a>
                    </div>
                    @endrole 
                        @else
                    <div class="col-4">
                         <a href="{{ route('login') }}" class="btn btn-warning shadow-0"> log in now </a>
                    </div>
                        @endauth
                </div>
                  </div>
                </main>
              </div>
            </div>
          </section>
         
    </x-slot>
</x-home-layout>