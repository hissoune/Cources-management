<x-home-layout>
  <x-slot name="slot">
      <div class="container">
          <h1 class="text-center text-white"><strong class="text-warning">Filli</strong>ers</h1>
          <div class="row my-5">
              @foreach($filliers as $fillier)
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('fillter_fillier', $fillier) }}" >
                      <div class="card-fill mx-auto my-3">
                          <div class="card-body row">
                              <div class="col-sm-6">
                                  <h5 class="card-title">{{ $fillier->name }}</h5>
                                  <p class="card-text">{{ $fillier->description }}</p>
                                  <p class="card-text">{{ $fillier->Coureces->count() }} Courses</p>
                              </div>
                              <div class="col-sm-6">
                                  @foreach($fillier->Coureces as $course)
                                      <img width="50" src="/storage/{{ $course->image }}" alt="course image">
                                  @endforeach
                              </div>
                          </div>
                          </a>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </x-slot>
</x-home-layout>
