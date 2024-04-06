<x-home-layout>
    <x-slot name="slot">
       {{-- <div class="container">
         
            <div class="owl-carousel owl-theme">
              @foreach($Abonnments as $Abonnment )
             <div class="item">
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
                    <h6>you have this abonnment</h6>
                    @else
                    <a href="{{ route('checkout_abonnment',$Abonnment) }}" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> reserve online </a>

                   @endif

                  
                  </div>
                </div>
              @endforeach
            </div>
         </div> --}}


         <!-- Section: Pricing -->
<section class="mb-5 mb-lg-10">

  <h3 class="fw-bold text-center mb-5 text-warning my-4">Pricing</h3>
  <div class="row gx-xl-5 container">
    @foreach($Abonnments as $Abonnment )
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 my-3">
      <div class="card">
        <div class="card-header text-center pt-4">
          <p class="text-uppercase">
            <strong>{{$Abonnment->type }}</strong>
          </p>

          <h3 class="mb-4">
            <strong>$ {{$Abonnment->price}}</strong>
            <small class="text-muted" style="font-size: 16px">/year</small>
          </h3>
          @if($Abonnment->Abonnment_resever($Abonnment->id))
          <button type="button" class="btn btn-secondary btn-rounded w-100 mb-3"><i class="fas fa-check fw-bold text-success me-3"></i></button>
          @else
          <a href="{{ route('checkout_abonnment',$Abonnment) }}" class="btn btn-warning btn-rounded shadow-0 w-100 text-white fw-bold"> <i class="me-1 fa fa-shopping-basket"></i>  Upgrade </a>

         
          @endif
        </div>
        <div class="card-body">
          <ol class="list-unstyled mb-0">
            <li class="mb-3">
              <i class="fas fa-check text-success me-3"></i>
              updates
            </li>
            <li class="mb-3 ">
              <i class="fas fa-check text-success me-3"></i>Git repository
            </li>
            <li class="mb-3">
              <i class="fas fa-check text-success me-3"></i>npm
              installation
            </li>
          </ol>

        </div>
      </div>

    </div>
    @endforeach
  </div>

</section>
<!-- Section: Pricing -->
    </x-slot>
</x-home-layout>