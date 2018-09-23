$(document).ready(function() {

	/*$(window).on('load', function() { 
  		$('#preloader').delay(350).fadeOut('slow');
	})*/

	
	// Preload function

	$(window).on("load", function () {
        $("#preloader").fadeOut(500);
    });

    $('[data-toggle="tooltip"]').tooltip();

	// Form validates functions

	/*$(".form-check").submit(function(){
	    $("button[type='submit']", this)
	    .val("Envoi...")
	    .attr('disabled', 'disabled');
	    return true;
  	});*/

  	$(document).ready(function() {
  		$(".btn-pref .btn").click(function () {
  			$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    		// $(".tab").addClass("active"); // instead of this do the below 
    		$(this).removeClass("btn-default").addClass("btn-primary");   
		});
  	});

	//Register control form 

  	if ($('#registerForm').length) {
        $('#agree').click(function () {
	    	$('#registerBtn').prop("disabled", 
	    	!$("#agree").prop("checked")); 
  		})
  	}

	// Mobile menu overlay
	
	$(".toggle-menu").on("click", function() {
		var $target = $($(this).attr("href"));
		if ($target.length) {
			$target.toggleClass("opened");
			$(".sidebar-overlay").toggleClass("opened");
			$("body").toggleClass("menu-opened");
			$(".sidebar-overlay").attr("data-reff", $(this).attr("href"));
		}
	});
	
	$(".sidebar-overlay").on("click", function() {
		var $target = $($(this).attr("data-reff"));
		if ($target.length) {
			$target.removeClass("opened");
			$("body").removeClass("menu-opened");
			$(this).removeClass("opened");
		}
	});
	
	// Mobile Menu
	
	$('.menu-toggle').on("click", function() {
		$(this).parents('li').children('.mobile-submenu-wrapper').slideToggle(300);
		return false;
	});
	
	// Testimonial Carousel
	
	if($('#testimonial_slider').length > 0 ){
		$("#testimonial_slider").owlCarousel({
			autoPlay: false,
			nav: true,
			margin: 30,
			pagination : false,
			loop: true,
			navText :["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive: {
			  0: {
				items: 1
			  },
			  768: {
				items: 2
			  },
			  992: {
				items: 3
			  }
			}
		});
	}
	
	// Doctor Carousel

	if($('#our_doctor').length > 0 ){
		$("#our_doctor").owlCarousel({
			autoPlay:false,
			nav: true,
			margin: 10,
			pagination : false,
			loop: true,
			navText :["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive: {
			  0: {
				items: 1
			  },
			  768: {
				items: 3
			  },
			  992: {
				items: 6
			  }
			}
		});
	}
	
	// Header menu dropdown

	if($('.header .dropdown').length > 0 ){
		$('.header .dropdown').hover(
			function() {
				$(this).addClass('open');
			},
			function() {
				$(this).removeClass('open');
		});
	}
		
	// Date Time Picker
		
	if($('.datetimepicker').length > 0 ){
		$('.datetimepicker').datetimepicker({
			format: 'DD/MM/YYYY',
			locale: 'fr'
		});
	}
	
	// Select2

	if($('.select').length > 0 ){
		$('.select').select2({
			minimumResultsForSearch: -1,
			width: '100%'
		});
	}
});