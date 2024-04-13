
document.addEventListener('DOMContentLoaded', function() {
    const resumeButton = document.getElementById('resumeButton');
    const resumePopup = document.getElementById('resumePopup');
    const closePopup = resumePopup.querySelector('.close');

    resumeButton.addEventListener('click', function() {
        resumePopup.style.display = 'block';
    });

    closePopup.addEventListener('click', function() {
        resumePopup.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === resumePopup) {
            resumePopup.style.display = 'none';
        }
    });

    resumePopup.addEventListener('click', function(event) {
        event.stopPropagation();
    });

    const resumeForm = document.getElementById('resumeForm');
    resumeForm.addEventListener('submit', function(event) {
        event.preventDefault(); 

       
        const formData = new FormData(resumeForm);
        for (const pair of formData.entries()) {
            console.log(`${pair[0]}: ${pair[1]}`);
        }

        resumePopup.style.display = 'none';
    });
});
