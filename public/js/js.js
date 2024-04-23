

  

  

  
 

  
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



// Function to show popup modal
function showPopup(message) {
    const popupModal = document.getElementById('popupModal');
    const popupMessage = document.getElementById('popupMessage');
  
    // Set popup message
    popupMessage.textContent = message;
  
    // Display popup modal
    popupModal.style.display = 'block';
  
    // Close popup modal when close button is clicked
    const popupClose = document.getElementById('popupClose');
    popupClose.addEventListener('click', function() {
      popupModal.style.display = 'none';
    });
  
    // Close popup modal when user clicks outside the modal
    window.addEventListener('click', function(event) {
      if (event.target === popupModal) {
        popupModal.style.display = 'none';
      }
    });
  
    // Close popup modal when Escape key is pressed
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        popupModal.style.display = 'none';
      }
    });
  }
  
  // Show popup modal when success alert is clicked
  const successAlert = document.getElementById('successAlert');
  if (successAlert) {
    successAlert.addEventListener('click', function() {
      const successMessage = successAlert.textContent.trim();
      showPopup(successMessage);
    });
  }
  