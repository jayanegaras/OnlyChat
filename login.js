
// This is when you make DOM javascript
document.addEventListener("DOMContentLoaded", () => {
     // Get all images with the class "radio-image"
     const images = document.querySelectorAll('.radio-image');
     images.forEach((img) => {
         img.addEventListener('click', function () {
             images.forEach((img) => img.classList.remove('selected'));
             this.classList.add('selected');
             const radioId = 'radio-' + this.getAttribute('data-value');
             document.getElementById(radioId).checked = true;
         });
        // Password views
        const checkers = document.querySelectorAll(".checklist");
        checkers.forEach((checker)=>{
          const targetId = checker.getAttribute('data-target');
          checker.addEventListener('click', ()=>{
            console.log(targetId);
            const target =  document.getElementById(targetId);
            if (target.type === "password"){
              target.type = "text";
            } else {
              target.type = "password";
            }
          });
        });
        
        // Menu 
      const buttons = document.querySelectorAll('.button');
      const contains  = document.querySelectorAll('.hidden');
      buttons.forEach(button => {
          button.addEventListener( 'click', (event) => {
              buttons.forEach( button => {
                  button.classList.remove('clicked');
              });
              event.currentTarget.classList.add('clicked');
  
              const targetid = button.getAttribute('data-target');
              contains.forEach( contain => {
                  if(contain.id === targetid){
                      contain.classList.add('show');
                  } else{
                      contain.classList.remove('show');
                                  }
              });
          });
          
      });  
     });
});
