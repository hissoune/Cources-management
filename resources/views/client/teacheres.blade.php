<x-home-layout>
    <x-slot name="slot">

     
        <section class="" style="background-color: #060f30;">
         
            <div class="container py-5 ">
              <div class="row ">
                @foreach($Teachers as $Teacher)
                  <div class="card teachers col-lg-4 " >
                    <div class="img_cont w-100"><img src="/storage/{{ $Teacher->image }}"
                      alt="teacher image" class=""></div>
                    <div class="card-body  text-black">
                      
                          
                          <div class="  mb-2">
                            <p class="">{{ $Teacher->name }}</p>
                            <hr>
                            <p class="mb-0 me-2">{{ $Teacher->email }}</p>
                            <hr>
                            <p class="my-4">{{ $Teacher->Coureces->count() }} Cources</p>
                          </div>
                          <div class="d-flex ">
                            <div class="mx-3">
                            <button type="button" class="btn btn-outline-dark btn-rounded btn-sm"
                              data-mdb-ripple-color="dark">+ Follow</button>
                            </div>
                              <div>
                              <form action="{{ route('teacheres_profile',$Teacher) }}" methode="get">
                                <button type="submit" class="btn btn-outline-dark btn-rounded btn-sm"
                              data-mdb-ripple-color="dark">See profile</button>
                              </form>
                            </div>
                        
                        </div>
                      </div>
                     
                      
                    </div>
                  
                @endforeach
              </div>
            </div>
          </section>
    </x-slot>
</x-home-layout>