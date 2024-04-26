<x-home-layout>
  <x-slot name="slot">
    <section class="mb-5 mb-lg-10 pricing_section">
      <h3 class="fw-bold text-center mb-5 text-warning my-4">Pricing</h3>
      
    </section>
    <section class="pricing-plans">
      @foreach($Abonnments as $Abonnment)

      <div class="pricing-card basic">
        <div class="heading">
          <h4>{{ $Abonnment->type }}</h4>
        </div>
        <p class="price">
          ${{ $Abonnment->price }}
          <sub>/month</sub>
        </p>
        <ul class="features">
          <li>
            <i class="fa-solid fa-check"></i>
            <strong> {{$Abonnment->number_cources}} </strong> Courses available
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>{{$Abonnment->number_days}}</strong>days
          </li>
         
        </ul>
        @if($Abonnment->Abonnment_resever($Abonnment->id))
         <button class="btn btn-success">got</button>
        @else 
        <a href="{{ route('checkout_abonnment', $Abonnment) }}" class="cta-btn">SELECT</a>
       
        @endif
      </div>
      @endforeach
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
