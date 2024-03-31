<x-home-layout>
    <x-slot name="slot">

     
        <section class="vh-100" style="background-color: #060f30;">
         
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                @foreach($Teachers as $Teacher)
                    
               
                <div class="col col-md-9 col-lg-7 col-xl-5 ">
                  <div class="card " style="border-radius: 50px; background-color: #93e2bb; ">
                    <div class="card-body  text-black">
                     
                      <div class="d-flex  align-items-center ">
                        <div class="flex flex-column align-items-start  info-fo">
                          <img src="storage/Courses/NoiX7kxGKkUNvhfHfRlP0QA7Kh0deS5pPFZOVtBc.png"
                            alt="Generic placeholder image" class=" rounded-circle border border-dark border-3"
                            width="90">
                                    
                        </div>
                        
                        <div class="flex-grow-1 ms-3 ">
                          <div class="d-flex flex-row align-items-center mb-2">
                            <p class="mb-0 me-2">{{ $Teacher->email }}</p>
                            
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
                          <div class="d-flex "><p class="my-4">{{ $Teacher->Coureces->count() }} Cources</p></div>
                        </div>
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