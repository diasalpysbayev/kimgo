$(function() {
    let menuTop = $('.subheader').offset().top;        
    $(window).scroll(function () { 
      if (window.matchMedia("(max-width: 767px)").matches == false) {            
          if ($(window).scrollTop() > menuTop) {  
              if ($('.subheader').css('position') != 'fixed') {  
                  $('.subheader').css('position','fixed');  
                  $('.subheader').css('top','0');           
                  $('.slider').css('margin-top','80px'); 
              }
              } else {                                 
              if ($('.subheader').css('position') == 'fixed') {  
                  $('.subheader').css('position','');
                  $('.subheader').css('top','');
                  $('.slider').css('margin-top','');
              }
          }
      }
    });
  });

  let lastScrollTop = 0,
  header = document.getElementById('site-header'),
  nav = document.getElementsByClassName('.nav');

window.addEventListener("scroll", function() {
  if (window.matchMedia("(max-width: 767px)").matches == false) {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      if (scrollTop > lastScrollTop) {
          header.style.top = "-110px";
      } else {
          header.style.top = "0";   
      }
      lastScrollTop = scrollTop;
  }
});