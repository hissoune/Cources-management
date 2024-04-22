
<x-home-layout>
    <x-slot name="slot">
<section  style="background-color: #060f30;"  >

    <div class="container py-5 h-100">
   
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <div class="image">
              <img src="/storage/{{ $Teacher->image }}" alt="avatar"
                >
              <h5 class="my-3">{{ $Teacher->name }}</h5>
              <p class="text-muted mb-2">{{ ($Teacher->description)?$Teacher->description:'no description'  }}</p>
            </div>
              @if($Teacher->id !== Auth::id())
              
           
              <div class="d-flex justify-content-center mb-2">
                @if($follow)
                <form action="{{ route('unfollow') }}" method="post">
                  @csrf
                  <input type="text" name="teacher_id" hidden value="{{ $Teacher->id }}">
                  <button type="submit" class="btn btn-outline-danger shadow-0">unFollow</button>
                </form>
                @else
                <form action="{{ route('follow') }}" method="post">
                  @csrf
                  <input type="text" name="teacher_id" hidden value="{{ $Teacher->id }}">
                  <button type="submit" class="btn btn-warning shadow-0">+ Follow</button>
                </form>
                @endif
                
                {{-- <button type="button" class="btn btn-outline-primary ms-1">ra</button> --}}
                          <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-warning ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Rate
                    </button>

                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog ">
                        <div class="modal-content " style="background-color: #ccd0df;">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">rate {{$Teacher->name  }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form class="p-4 md:p-5" method="POST" action="{{ route('evaluate_T') }}">
                              @csrf
                              <div class="row g-4 mb-4">
                                  <input type="hidden" name="teacher_id" value="{{ $Teacher->id }}">
                                  <div class="col-12">
                                      <label for="note" class="form-label">Your comment</label>
                                      <input type="text" name="note" id="note" class="w-100 p-1 rounded border-0 border-outline-warning" placeholder="Type " required="">
                                      @error('note')
                                      <p class="text-danger">{{ $message }}</p>
                                      @enderror
                                  </div>
                                  <div class="col-12">
                                      <label for="mark" class="form-label">rate</label>
                                      <input id="mark" type="number" name="mark" class="w-100 p-1 rounded border-0 " placeholder="00">                    
                                      @error('mark')
                                      <p class="text-danger">{{ $message }}</p>
                                      @enderror
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success">Save</button>
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>

                              </div>
                              
                            </form>
                          
                          </div>
                          
                        </div>
                      </div>
                    </div>

              </div>
              @endif
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">no account</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">no account</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">no account</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">no account</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">no account</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $Teacher->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $Teacher->email }}</p>
                </div>
              </div>
              <hr>
              
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Followers</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $Teacher->followers->count() }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">courcess</span>
                  </p>
                 
                  
                 @foreach ($Teacher->Coureces as $item)
                 <p class="mt-4 mb-1" style="font-size: .77rem;">{{ $item->name }}</p>
                 <div class="progress rounded mb-2" style="height: 5px;">
                   <div class="progress-bar" role="progressbar" style="width: {{$item->avalable_seetes-$item->Reservations->count()}}%" aria-valuenow="{{$item->avalable_seetes}}"
                     aria-valuemin="0" aria-valuemax="{{ $item->classe->capacity }}"></div>
                    
                 </div>
                 <a href="{{ route('cource_details',['cor'=>$item]) }}"> view more</a>
                 @endforeach
                 
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">filliers</span>
                  </p>
                  @php
    $uniqueFilliers =array();

    foreach ($Teacher->Coureces as $item) {
        $currentFillierName = optional($item->Fillier)->name;
        
        if ($currentFillierName && !in_array($currentFillierName, $uniqueFilliers)) {
            $uniqueFilliers[] = $currentFillierName;
        }
    }  
@endphp
@foreach ($uniqueFilliers as $fillierName)
<p class="mt-4 mb-1 p-3 border" style="font-size: .77rem;">{{ $fillierName }}</p>
@endforeach


              
                </div>
              </div>
              
            </div>
            @auth
            @role('teacher')
            <div class="col-md-6 my-3">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">description</span>
                  </p>
                  <form action="{{ route('add_description',$Teacher) }}" method="POST">
                    @csrf
                    @method('put')
                    <textarea name="description"  cols="30" rows="5">{{ ($Teacher->description)?$Teacher->description:'add your description' }}</textarea>
                    <button type="submit" class="btn btn-warning shadow-0">{{ ($Teacher->description)?'update':'add'}}</button>

                  </form>
                </div>
              </div>
              
            </div>
            @endrole
            @endauth
          </div>
        </div>
      </div>
    </div>
  </section>

</x-slot>
</x-home-layout>