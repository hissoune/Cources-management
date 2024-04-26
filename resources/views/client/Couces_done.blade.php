<x-home-layout>
    <x-slot name="slot">
       
<section id="filteredContent" class="lesson">
        
    <div class="container">
        <div style="margin-bottom: 3rem;">
           <h2 class="text-warning text-center my-4">Cources you got</h2>
        </div>
        
        <div class="teachers-grid  corses_bord">
            @foreach($Course as $cor)
                <div class="cource-card">
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
                                <button type="submit" class="px-1 ">details</button>
                            </form>
                            @if ($cor->Resume)
                            <form action="{{ route('Resume',$cor) }}" method="get">
                                <button type="submit" class=" px-1">resume</button>
                            </form>
                            @else
                            <p class="text-white mt-2">wating resume ... </p>
                            @endif
                            
                            
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="pagination">
                {{ $Course->links() }}
            </div>
        </div>
        
    </div>
</section>

</x-slot>
</x-home-layout>