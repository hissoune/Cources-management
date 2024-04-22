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
        <div class="title">
           <h2 class="text-warning ">Cources</h2>
        </div>
           
         
      
        <div class="FILLS">
            <div class="btn-container" id="buttonContainer">
                @foreach ($filliers as $item)
                <button class="carousel-button" onclick="filterFillier('{{ route('fillter_fillier', $item) }}')">{{ $item->name }}</button>
                @endforeach
            </div>
            <button class="carousel-btn prev-btn" onclick="scrollCarousel(-1)">❮</button>
            <button class="carousel-btn next-btn" onclick="scrollCarousel(1)">❯</button>
        </div>
        <div class="row">
            <div class="col-lg-2 mt-5">
                ggg
            </div>
            <div class="col-lg-10">
        <div class="teachers-grid   border">
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
                                <button type="submit" class="btn btn-see-profile">See details</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
</section>

</x-slot>
</x-home-layout>