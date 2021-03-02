document.getElementById('menu-toggler').addEventListener('click', ()=>{
    var SWnavbar = document.getElementById('main-navigator');
    var SWbackdrop = document.getElementById('backdropper');
  
    SWnavbar.classList.toggle("active");
    SWbackdrop.classList.toggle("active");
  });
  
  document.getElementById('backdropper').addEventListener('click', ()=>{
    var SWnavbar = document.getElementById('main-navigator');
    var SWbackdrop = document.getElementById('backdropper');
  
    SWnavbar.classList.toggle("active");
    SWbackdrop.classList.toggle("active");
  });