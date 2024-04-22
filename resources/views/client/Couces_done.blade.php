<x-home-layout>
    <x-slot name="slot">
       
<section id="filteredContent" class="lesson">
        
    <div class="container">
        <div style="margin-bottom: 3rem;">
           <h2 class="text-warning text-center my-4">Cources you got</h2>
        </div>
        
        <div class="teachers-grid">
            @foreach($Course as $cor)
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
                         @if ($cor->Resume)
                         <div class="button-group">
                            <form action="{{ route('Resume',$cor) }}" method="get">
                                
                                <button type="submit" class="btn btn-see-profile">See Resume</button>
                            </form>
                        </div> 
                        @else
                        <button  class="btn btn-see-profile">NO Resume</button>

                       
                         @endif
                        
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
</section>

</x-slot>
</x-home-layout>