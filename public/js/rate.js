    const rateButton = document.getElementById("rateButton");
    const modalContainer = document.getElementById("modalContainer");
    const modalTitle = document.getElementById("modalTitle");
    const teacherIdInput = document.getElementById("teacherIdInput");
    const noteInput = document.getElementById("noteInput");
    const markInput = document.getElementById("markInput");
    const saveButton = document.getElementById("saveButton");
    const closeButton = document.getElementById("closeButton");
    const closeModalButton = document.getElementById("closeModal");
  
    
  
      
 
    rateButton.addEventListener("click", function() {
        modalContainer.style.display = "block";
      });
    
      closeButton.addEventListener("click", function() {
        modalContainer.style.display = "none";
    });
  
    // Event listener for closing the modal
   