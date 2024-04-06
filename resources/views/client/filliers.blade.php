<x-home-layout>
        <x-slot name="slot">
           <div class="container">
                <H1 class="text-center text-white"><strong class="text-warning">Filli</strong>ers</H1>
                <div class="row my-5">
                  @foreach($filliers as $fillier )
                 <div class="col-sm-6">
                       <div class="card">
                        <div class="card-body row">
                        <div class="col-sm-6"> 
                         <h5 class="card-title">{{$fillier->name }}</h5>
                         <p class="card-text">{{$fillier->description  }}</p>
                         <p class="card-text">{{$fillier->Coureces->count()}} Cources</p>
                        </div> 
                        <div class="col-sm-6">
                         @foreach($fillier->Coureces as  $cource)
                         <img width="50" src="/storage/{{ $cource->image }}" alt="cource img">
                         @endforeach
                        </div>
                       </div>
                       <a href="#" class="btn btn-warning">Show cources</a>

                      </div>
                    </div>
                  @endforeach
                </div>
             </div>
        </x-slot>
</x-home-layout>