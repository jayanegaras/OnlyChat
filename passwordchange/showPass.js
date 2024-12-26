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

var a = [];
var b = [];

for(var i, i > a.length}