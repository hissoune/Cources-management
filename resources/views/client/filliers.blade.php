<x-home-layout>
    <x-slot name="slot">
        <style>
            .filers_mrgn{
margin-top: 10%;
            }   
        </style>
        <div class="container filers_mrgn">
            <h1 class="text-center text-white my-5"><strong class="text-warning">Filliers</strong></h1>
            <div class="row ">
                @foreach($filliers as $fillier)
                <div class="col-lg-4  my-3">
                    <a href="{{ route('fillter_fillier', $fillier) }}" class="text-decoration-none text-dark">
                        <div class=" card-fill py-3 ">
                            <div class="card-body ">
                             
                                    <h5 class="card-title text-center text-white">{{ $fillier->name }}</h5>
                                    <p class="card-text text-center">
                                        {{ Str::limit($fillier->description, 100) }}
                                    </p>                                   
                                     <p class="card-text text-center">{{ $fillier->Coureces->count() }} Courses</p>
                               
                               
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                
                
            </div>
            <div class="paginate">
                {{ $filliers->links() }}
            </div>
        </div>
    </x-slot>
</x-home-layout>
