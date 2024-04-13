<x-home-layout>
    <x-slot name="slot">
       
        <section>
            <div class="container">
                <div class="Resume">
                    <div class="title">
                        <h4>RESUME FOR <strong>{{$Resum->Course->name  }}</strong> </h4>
                    </div>
                    <div class="cor_info">
                        <img src="/storage/{{$Resum->Course->image}}"  alt="cource image">
                        <h5>{{$Resum->Course->name  }}</h5>
                        <div class="d-flex justify-content-between">
                            <p>FILLIER : {{ $Resum->Course->Fillier->name }}</p>
                            <p>CLASS : {{ $Resum->Course->classe->name }}</p>
                        </div>
                    </div>
                    <div >
                        <h6>{{ $Resum->part1 }}</h6>
                        <p class="desc">{{ $Resum->desc1 }}</p>
                    </div>
                    <div >
                        <h6>{{ $Resum->part2 }}</h6>
                        <p class="desc">{{ $Resum->desc2}}</p>
                    </div>
                    <div>
                        <h6>{{ $Resum->part3 }}</h6>
                        <p class="desc">{{ $Resum->desc3 }}</p>
                    </div>
                </div>
                <button class="download">download</button>
            </div>
        </section>
    </x-slot>
</x-home-layout>