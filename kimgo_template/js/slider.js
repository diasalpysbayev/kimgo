let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) {
      slideIndex = 1;
    }

  if (n < 1) {
      slideIndex = slides.length;
    }
    
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

let touchHover = function() {
  $('[data-hover]').click(function(e){
      e.preventDefault();
      var $this = $(this);
      var onHover = $this.attr('data-hover');
      var linkHref = $this.attr('href');
      if (linkHref && $this.hasClass(onHover)) {
          location.href = linkHref;
          return false;
      }
      $this.toggleClass(onHover);
  });
};
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
};

$(document).ready(function() { touchHover(); });
let lastScrollTop = 0,
    header = document.getElementById('site-header'),
    nav = document.getElementsByClassName('.nav');