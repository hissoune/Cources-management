<x-home-layout>
    <x-slot name="slot">
        {{-- <style>
            .card {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(199, 194, 194, 0.1);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
}

.card-img-top {
    width: 100%;
    height: 300px; 
    background-size: cover;
    background-position: center;
    border-radius: 8px 8px 0 0; 
}

.card-body {
    padding: 1.25rem;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #9dc840;
}

.card-text {
    margin-bottom: 0.25rem;
    color: #f8f9fa;
}

.card-footer {
    padding: 0.75rem 1.25rem;
    background-color: #f8f9fa;
}

.btn {
    cursor: pointer;
}

.info-fo {
    margin-top: 0.75rem;
    display: flex;
    align-items: center;
}



.pay {
    text-decoration: none;
    color: #333;
}

.pay:hover {
    text-decoration: underline;
}

        </style> --}}
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