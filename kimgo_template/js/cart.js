let plusButton = document.getElementById("plus");
let minusButton = document.getElementById("minus");
let input_count = document.getElementById("input_count");

plusButton.addEventListener("click", function(){
	input_count.value = parseInt(input_count.value) + 1;
})
minusButton.addEventListener("click", function(){
	if(parseInt(input_count.value) > 1){
		input_count.value = parseInt(input_count.value) - 1;		
	}
})
jQuery(document).ready(function($) {
	$('.you-may-like__wrapper').slick({
	  infinite: true,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  responsive: [
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2,
	      }
	    },
	    {
	      breakpoint: 575,
	      settings: {
	      	swipeToSlide: true,
	      	arrows: false,
	        slidesToShow: 1,
	        slidesToScroll: 1,
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});
});