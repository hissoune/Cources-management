function scrollCarousel(direction) {
    const container = document.getElementById('buttonContainer');
    const scrollAmount = 300; 

    container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}
