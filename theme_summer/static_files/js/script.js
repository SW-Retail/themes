
window.addEventListener('load', function() {

  document.getElementById('menu-toggler').addEventListener('click', ()=>{
    var SWnavbar = document.getElementById('sw_menu');
    var SWbackdrop = document.getElementById('backdropper');
  
    SWnavbar.classList.toggle("active");
    SWbackdrop.classList.toggle("active");
  });
  
  document.getElementById('backdropper').addEventListener('click', ()=>{
    var SWnavbar = document.getElementById('sw_menu');
    var SWbackdrop = document.getElementById('backdropper');
  
    SWnavbar.classList.toggle("active");
    SWbackdrop.classList.toggle("active");
  });

  document.getElementById('navCloser').addEventListener('click', ()=>{
    var SWnavbar = document.getElementById('sw_menu');
    var SWbackdrop = document.getElementById('backdropper');
  
    SWnavbar.classList.toggle("active");
    SWbackdrop.classList.toggle("active");
  });

});

