<x-home-layout>
    <x-slot name="slot">
       <div class="container">
            <H1 class="text-center text-white"><strong class="text-warning">Filli</strong>ers</H1>
            <div class="row my-5">
              @foreach($Abonnments as $Abonnment )
             <div class="col-sm-6">
                   <div class="card">
                    <div class="card-body row">
                    <div class="col-sm-6"> 
                     <h5 class="card-title">{{$Abonnment->type }}</h5>
                     <p class="card-text">{{$Abonnment->number_cources  }} Cource avalable</p>
                     <p class="card-text">{{$Abonnment->price}} </p>
                    </div> 
                    <div class="col-sm-6">
                    
                    </div>
                   </div>
                   @if($Abonnment->Abonnment_resever($Abonnment->id))
                    <h4>you have this abonnment</h4>
                    @else
                    <a href="{{ route('checkout_abonnment',$Abonnment) }}" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> reserve online </a>

                   @endif

                  
                  </div>
                </div>
              @endforeach
            </div>
         </div>
    </x-slot>
</x-home-layout>