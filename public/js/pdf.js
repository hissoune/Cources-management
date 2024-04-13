document.addEventListener('DOMContentLoaded', () => {
    const downloadBtn = document.querySelector('.download');
    const resumeContainer = document.querySelector('.Resume');

    downloadBtn.addEventListener('click', () => {
        downloadBtn.style.display='none';
        resumeContainer.style.display = 'block'; 
        document.body.style.background = 'white'; 

        setTimeout(() => {
            window.print(); 
        }, 100);
    });
});
