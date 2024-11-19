document.addEventListener("DOMContentLoaded", () => {
     // Get all images with the class "radio-image"
     const images = document.querySelectorAll('.radio-image');

     // Add click event listener to each image
     images.forEach((img) => {
         img.addEventListener('click', function () {
             // Remove "selected" class from all images
             images.forEach((img) => img.classList.remove('selected'));
 
             // Add "selected" class to the clicked image
             this.classList.add('selected');
 
             // Programmatically select the associated radio button
             const radioId = 'radio-' + this.getAttribute('data-value'); // Match radio ID
             document.getElementById(radioId).checked = true;
         });
     });
});
function togglePassword() {
    var passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";   
  
    } else {
      passwordInput.type = "password";
    }
  }