
<x-home-layout>
    <x-slot name="slot">
<section  style="background-color: #060f30;"  >

    <div class="container py-5 h-100">
   
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="/storage/{{ $user->image }}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{ $user->name }}</h5>
              @role('teacher')
              <p class="text-muted mb-2">{{ ($user->description)?$user->description:'no description'  }}</p>
             @endrole
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
                  <p class="text-muted mb-0">{{ $user->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $user->email }}</p>
                </div>
              </div>
              <hr>
              @role('teacher')
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Followers</p>
                </div>

                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $user->followers->count() }}</p>
                </div>
              </div>
              @endrole
            </div>
          </div>
          
          <div class="row">
            @role('teacher')
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">courcess</span>
                  </p>
                 
                  
                 @foreach ($user->Coureces as $item)
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
                @foreach ($user->Coureces as $item)
                  <p class="mt-4 mb-1 p-3 border" style="font-size: .77rem;">{{ $item->Fillier->name }}</p>
                  
                  @endforeach 
                </div>
              </div>
              
            </div>
            
            <div class="col-md-6 my-3">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">description</span>
                  </p>
                  <form action="{{ route('add_description',['Teacher'=>$user]) }}" method="POST">
                    @csrf
                    @method('put')
                    <textarea name="description"  cols="30" rows="5">{{ ($user->description)?$user->description:'add your description' }}</textarea>
                    <button type="submit" class="btn btn-warning shadow-0">{{ ($user->description)?'update':'add'}}</button>

                  </form>
                </div>
              </div>
              
            </div>
            @endrole
            
            @role('student')
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">farorite courcess</span>
                  </p>
                 
                  <div class="border px-3">
                 @foreach ($user->reservations as $item)
                 <p class="mt-4 mb-1" style="font-size: .77rem;">{{ $item->Coureces->name }}</p>
                 <a href="{{ route('cource_details',['cor'=>$item]) }}"> view more</a>
                 @endforeach 
                </div>
                </div>
              </div>
            </div>
          
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">filliers</span>
                  </p>
                @foreach ($user->Coureces as $item)
                  <p class="mt-4 mb-1 p-3 border" style="font-size: .77rem;">{{ $item->Fillier->name }}</p>
                  
                  @endforeach 
                </div>
              </div>
              
            </div>
            @endrole
            
          </div>
        </div>
      </div>
    </div>
  </section>

</x-slot>
</x-home-layout>