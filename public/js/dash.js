document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('show');
    });
});


const mobileMenuToggle = document.getElementById('mobile-menu-toggle');

let isOpen = false;

function toggleButtonIcon() {
    const icon = mobileMenuToggle.querySelector('svg');

    if (isOpen) {
        icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>`;
    } else {
        icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>`;
    }

    isOpen = !isOpen;
}

mobileMenuToggle.addEventListener('click', toggleButtonIcon);
