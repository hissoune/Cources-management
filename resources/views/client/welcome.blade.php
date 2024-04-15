<x-home-layout>
    <x-slot name="slot">
      
                <section>
                    <div class="container">
                    <div class=" latest_cources">
                        <h1 class="">latest Corces</h1>
                <div class="teachers-grid">
                    @foreach($cources as $cor)
                        <div class="teacher-card">
                            <div class="img-container">
                                <img src="/storage/{{ $cor->image }}" alt="teacher image">
                            </div>
                            <div class="card-body">
                                <p>{{ $cor->name }}</p>
                                <hr>
                                <p>{{ $cor->date }}</p>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <p><strong>S </strong>{{ $cor->start_time}}</p>
                                    <p><strong>E </strong>{{ $cor->end_time}}</p>
                                </div>
                            
                                <div class="button-group">
                                    <form action="{{ route('cource_details',$cor) }}" method="get">
                                        <button type="submit" class="btn btn-see-profile">See details</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
                </div>
                </section>
           <section>
            <div class="container">
            <div class=" latest_cources">
                <h1 class="mb-5">populer filliers</h1>
                <div class=" my-5">
                    @foreach($filliers as $fillier)
                        <div class="">
                          <a href="{{ route('fillter_fillier', $fillier) }}" >
                            <div class="card mx-auto my-3">
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
                            @endforeach
                        </div>
                         </div>
                 </section>
                 <section>
                           <div class="container">
                        <div class=" latest_cources">
                            <h1 class="mb-5">Famus teacheres</h1>
                        <div class="teachers-grid teach">
                            @foreach($Teachers as $Teacher)
                                
                                    <div class="famus_teachers">
                                        <img src="/storage/{{ $Teacher->image }}" alt="teacher image">
                                       <a href="{{ route('teacheres_profile', $Teacher) }}"><h4>{{ $Teacher->name }}</h4></a> 
                                       <h6>+{{ $Teacher->followers->count() }} follower</h6>
                                    </div>
                                    {{-- <div class="card-body">
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
                                --}}
                            @endforeach
                        </div>
                        </div>
                        </div>
                </section>


                              
    </x-slot>
</x-home-layout>