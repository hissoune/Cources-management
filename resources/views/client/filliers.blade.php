<x-home-layout>
    <x-slot name="slot">
        <div class="container">
            <h1 class="text-center text-white"><strong class="text-warning">Filliers</strong></h1>
            <div class="row my-5">
                @foreach($filliers as $fillier)
                <div class="col-lg-6 mx-auto my-3">
                    <a href="{{ route('fillter_fillier', $fillier) }}" class="text-decoration-none text-dark">
                        <div class="card card-fill py-3 bg-light">
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
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </x-slot>
</x-home-layout>
