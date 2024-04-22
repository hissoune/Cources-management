document.addEventListener("DOMContentLoaded", function() {
    const subscriptionCards = document.querySelectorAll('.subscription-card');
    let currentIndex = 0;
  
    function showCard(indexToShow) {
      subscriptionCards.forEach((card, index) => {
        if (index === indexToShow) {
          card.classList.add('show');
        } else if (index === (indexToShow + 1) % subscriptionCards.length) {
          card.classList.add('next');
        } else if (index === (indexToShow - 1 + subscriptionCards.length) % subscriptionCards.length) {
          card.classList.add('previous');
        } else {
          card.classList.remove('show', 'next', 'previous');
        }
      });
    }
  
    function rotateCards() {
      const nextIndex = (currentIndex + 1) % subscriptionCards.length;
      showCard(nextIndex);
      currentIndex = nextIndex;
    }
  
    // Initially show the first card
    showCard(currentIndex);
  
    // Automatically rotate cards every 3000ms (3 seconds)
    setInterval(rotateCards, 3000);
  });
  