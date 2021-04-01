window.addEventListener('load', function() {
  eventlistners();   
});

function categoryFilter(){
  var swCategoryFilter = document.getElementById('category-filter');
  
    swCategoryFilter.classList.toggle("active");

    eventlistners();  
}

function navbarController(){
  var SWnavbar = document.getElementById('sw_menu');
  var SWbackdrop = document.getElementById('backdropper');

  SWnavbar.classList.add("active");
  SWbackdrop.classList.add("active");
}

function eventlistners(){
  
  document.getElementById('backdropper').addEventListener('click', ()=>{
    var SWnavbar = document.getElementById('sw_menu');
    var SWbackdrop = document.getElementById('backdropper');
  
    SWnavbar.classList.remove("active");
    SWbackdrop.classList.remove("active");
  });
  
  document.getElementById('navCloser').addEventListener('click', ()=>{
    var SWnavbar = document.getElementById('sw_menu');
    var SWbackdrop = document.getElementById('backdropper');
  
    SWnavbar.classList.remove("active");
    SWbackdrop.classList.remove("active");
  });

  
  document.getElementById('filter-closer').addEventListener('click', ()=>{
    var swCategoryFilter = document.getElementById('category-filter');
  
    swCategoryFilter.classList.remove("active");
  });

}
