<x-home-layout>
  <x-slot name="slot">
      <section class="teachers-section">
          <div class="container">
              <div class="teachers-grid">
                  @foreach($Teachers as $Teacher)
                      <div class="teacher-card">
                          <div class="img-container">
                              <img src="/storage/{{ $Teacher->image }}" alt="teacher image">
                          </div>
                          <div class="card-body">
                              <p>{{ $Teacher->name }}</p>
                              <hr>
                              <p>{{ $Teacher->email }}</p>
                              <hr>
                              <p>{{ $Teacher->Coureces->count() }} Courses</p>
                              <div class="button-group">
                                  <button type="button" class="btn btn-follow">+ Follow</button>
                                  <form action="{{ route('teacheres_profile', $Teacher) }}" method="get">
                                      <button type="submit" class="btn btn-see-profile">See Profile</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </section>
  </x-slot>
</x-home-layout>
