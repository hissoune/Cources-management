<x-home-layout>
  <x-slot name="slot">
    <section class="mb-5 mb-lg-10">
      <h3 class="fw-bold text-center mb-5 text-warning my-4">Pricing</h3>
      <div class="container">
      <div id="subscriptionCardsCarousel" class="g-5 ">
        <div id="subscriptionCards" class="row  overflow-hidden  ">
          @foreach($Abonnments as $key => $Abonnment)
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 my-3 subscription-card">
            <div class="card">
              <div class="card-header text-center pt-4">
                <p class="text-uppercase">
                  <strong>{{$Abonnment->type}}</strong>
                </p>
                <h3 class="mb-4">
                  <strong>$ {{$Abonnment->price}}</strong>
                  <small class="text-muted" style="font-size: 16px">/year</small>
                </h3>
                @if($Abonnment->Abonnment_resever($Abonnment->id))
                <button type="button" class="btn btn-secondary btn-rounded w-100 mb-3"><i class="fas fa-check fw-bold text-success me-3"></i></button>
                @else
                <a href="{{ route('checkout_abonnment', $Abonnment) }}" class="btn btn-warning btn-rounded shadow-0 w-100 text-white fw-bold"><i class="me-1 fa fa-shopping-basket"></i> Upgrade </a>
                @endif
              </div>
              <div class="card-body">
                <ol class="list-unstyled mb-0">
                  <li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i>
                    {{$Abonnment->number_cources}} Courses available
                  </li>
                  <li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i>for {{$Abonnment->number_days}} days
                  </li>
                </ol>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    </section>
  </x-slot>
</x-home-layout>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const subscriptionCards = document.querySelectorAll('.subscription-card');
  let currentIndex = 0;

  function rotateCards() {
    subscriptionCards.forEach(card => {
      card.style.display = 'none';
    });

    const indicesToShow = [
      currentIndex % subscriptionCards.length,
      (currentIndex + 1) % subscriptionCards.length,
      (currentIndex + 2) % subscriptionCards.length
    ];

    indicesToShow.forEach(index => {
      subscriptionCards[index].style.display = 'block';
    });

    currentIndex = (currentIndex + 1) % subscriptionCards.length;
  }

  rotateCards();

  setInterval(rotateCards, 3000);
});
</script>
