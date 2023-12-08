function hamburgerIcon(){
  let hamburger = document.getElementById("hamburger_icon");
  let box = document.getElementById("box_1");
  
  hamburger.classList.toggle("active");
  box.classList.toggle("active");
}

document.onclick = myClickHandler;

function myClickHandler (e){
  let hamburger = document.getElementById("hamburger_icon");
  let box = document.getElementById("box_1");

  if (!hamburger.contains(e.target) && !box.contains(e.target)){
  hamburger.classList.remove("active");
  box.classList.remove("active");
  }
  }
