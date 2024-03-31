<x-home-layout>
    <x-slot name="slot">
        <style>
            .card {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
}

.card-img-top {
    width: 100%;
    height: 300px; /* Adjust height as needed */
    background-size: cover;
    background-position: center;
    border-radius: 8px 8px 0 0; /* Rounded corners only at the top */
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

        </style>
<section id="courses" class="lesson">
        
    <div class="container">
        <div style="margin-bottom: 3rem;">
            <div class="ligne"></div>
            <div class="header">
                Choose Your Course
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($Course as $cor)
            <div class="item">
                <a href="{{ route('cource_details',$cor) }}" class="course-link">
                    <div class="card">
                        <div class="card-img-top" style="background-image: linear-gradient(rgba(32, 29, 29, 0.5), rgba(22, 16, 16, 0.5)), url('/storage/{{ $cor->image }}');">                            <div class="card-body">
                               <div class="card-head my-4">
                                <h4 class="card-title ">{{$cor->name}}</h4>
                               </div>
                                <p class="card-text">Date: {{$cor->date}}</p>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text">From: {{$cor->start_time}}</p>
                                    <p class="card-text">To: {{$cor->end_time}}</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="info-fo">
                                    <img src="./images/author-01.png" alt="">
                                    <a href="{{ route('teacheres_profile',['Teacher'=>$cor->user]) }}" class="pay">{{$cor->user->name}} <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        
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