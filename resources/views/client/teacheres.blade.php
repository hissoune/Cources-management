<x-home-layout>
  <x-slot name="slot">
      <section class="teachers-section">
        <div class="title">
            <h3 class=" ">Our Teachers</h3>
         </div>
          <div id="subscriptionCardsCarousel" class="container">
              <div id="subscriptionCards"  class="row">
                @foreach($Teachers as $Teacher)
                <div class="col-lg-4 d-md subscription-card">
                  <a href="{{ route('teacheres_profile', $Teacher) }}" class="teacher-card">
                    <div class="img">
                      <img src="/storage/{{ $Teacher->image }}" alt="teacher image">
                    </div>
                    <div class="teacher-body">
                      <h6>{{ $Teacher->name }}</h6>
                      <p>{{ $Teacher->email }}</p>
                      <div class="d-flex justify-content-between">
                        <p>{{ $Teacher->Coureces->count() }} Courses</p>
                        <p>{{ $Teacher->followers->count() }} Followers</p>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
                
              </div>
          </div>
      </section>
  </x-slot>
</x-home-layout>
