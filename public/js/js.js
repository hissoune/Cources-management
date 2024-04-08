

document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.getElementById('burger-menu');
    const navbarCollapse = document.getElementById('navbarNavDropdown');

    burgerMenu.addEventListener('click', function() {
        navbarCollapse.classList.toggle('show');
    });

    navbarCollapse.querySelectorAll('.nav-link').forEach(function(navLink) {
        navLink.addEventListener('click', function() {
            navbarCollapse.classList.remove('show');
        });
    });
});


function filterFillier(route) {
    const xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const response = xhr.responseText;
                document.body.innerHTML = response;
            } else {
                console.error('Request failed with status:', xhr.status);
            }
        }
    };

    xhr.open('GET', route);
    xhr.send();
}
const loginLink = document.getElementById('loginLink');
const logMessage = document.getElementById('logmsg');

loginLink.addEventListener('mouseenter', () => {
    logMessage.textContent = 'login'; 
    logMessage.style.display = 'block'; 
});

loginLink.addEventListener('mouseleave', () => {
    logMessage.textContent = '';
    logMessage.style.display = 'none';
});
