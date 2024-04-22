<x-home-layout>
    <x-slot name="slot">
      
                <section>
                    <div class="nta-container">
                    
                    <div class=" latest_cources">
                        <h1 class="">latest Corces</h1>
                <div class="teachers-grid">
                    @foreach($cources as $cor)
                        <div class="cource-card">
                            <div class="img-container">
                                <img src="/storage/{{ $cor->image }}" alt="teacher image">
                            </div>
                            <div class="card-body">
                                <h5>{{ $cor->name }}</h5>
                                <hr>
                                <h5>{{ $cor->date }}</h5>
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
                    <div class="nta-container">
                        <div class="pouler_fillier">
                            <h1 class="mb-5">Popular filliers</h1>
                            <div class="fillier-grid">
                                @foreach($filliers as $fillier)
                                <div class="fillier-card">
                                    <a href="{{ route('fillter_fillier', $fillier) }}">
                                        <div class="card-body">
                                            <div class="card-info">
                                                <h4 class="title">{{ $fillier->name }}</h4>
                                                <p class="card-text">{{ $fillier->description }}</p>
                                                <p class="card-text">{{ $fillier->Coureces->count() }} Courses</p>
                                            </div>
                                            <div class="card-images">
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
                    </div>
                </section>
                
                 <section>
                           <div class="nta-container">
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