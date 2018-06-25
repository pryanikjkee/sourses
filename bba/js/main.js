/* drop-down main-menu */

$(".product-item").mouseenter(function() {
	$(".header-drop-down").show();
});
$(".product-item").mouseleave(function() {
	$(".header-drop-down").hide();
});
$(".header-drop-down").mouseenter(function() {
	$(this).show();
});
$(".header-drop-down").mouseleave(function() {
	$(this).hide();
});
// $(document).mouseenter(function (e) {
//     var current = $(".header-drop-down");
//     if (current.has(e.target).length === 0){
//         current.hide();
//     }
// });

/* drop-down input */

// $(".search-advanced__item-input-type").on("click", function() {
// 	$(".input-drop-down__list-type").toggle()
// });
// $(document).mouseup(function (e) {
//     var current = $(".input-drop-down__list-type");
//     if (current.has(e.target).length === 0){
//         current.hide();
//     }
// });

/* accordion======================================== */

$(".main-accordion__card-header-1").on("click", function () {
	$(this).toggleClass("main-accordion__card-header-1-active");
	$(".main-accordion__card-header-2").removeClass("main-accordion__card-header-2-active");
	$(".main-accordion__card-header-3").removeClass("main-accordion__card-header-3-active");

	$(this).find(".main-accordion__minus").toggle();
	$(this).find(".main-accordion__plus").toggle();
	$(".main-accordion__card-header-2").find(".main-accordion__minus").css("display", "none");
	$(".main-accordion__card-header-3").find(".main-accordion__minus").css("display", "none");
	$(".main-accordion__card-header-2").find(".main-accordion__plus").css("display", "block");
	$(".main-accordion__card-header-3").find(".main-accordion__plus").css("display", "block");
});

$(".main-accordion__card-header-2").on("click", function () {
	$(this).toggleClass("main-accordion__card-header-2-active");
	$(".main-accordion__card-header-1").removeClass("main-accordion__card-header-1-active");
	$(".main-accordion__card-header-3").removeClass("main-accordion__card-header-3-active");

	$(this).find(".main-accordion__minus").toggle();
	$(this).find(".main-accordion__plus").toggle();
	$(".main-accordion__card-header-1").find(".main-accordion__minus").css("display", "none");
	$(".main-accordion__card-header-3").find(".main-accordion__minus").css("display", "none");
	$(".main-accordion__card-header-1").find(".main-accordion__plus").css("display", "block");
	$(".main-accordion__card-header-3").find(".main-accordion__plus").css("display", "block");
});

$(".main-accordion__card-header-3").on("click", function () {
	$(this).toggleClass("main-accordion__card-header-3-active");
	$(".main-accordion__card-header-2").removeClass("main-accordion__card-header-2-active");
	$(".main-accordion__card-header-1").removeClass("main-accordion__card-header-1-active");

	$(this).find(".main-accordion__minus").toggle();
	$(this).find(".main-accordion__plus").toggle();
	$(".main-accordion__card-header-2").find(".main-accordion__minus").css("display", "none");
	$(".main-accordion__card-header-1").find(".main-accordion__minus").css("display", "none");
	$(".main-accordion__card-header-2").find(".main-accordion__plus").css("display", "block");
	$(".main-accordion__card-header-1").find(".main-accordion__plus").css("display", "block");
});

/* sliders======================================== */

$('.main-slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  fade: true,
  speed: 1000,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 2000
});

$('.testimonials-slider').slick({
	respondTo: 'min',
  dots: false,
  infinite: true,
  slidesToShow: 1,
  prevArrow: '<div class="testimonials-slider__arrow testimonials-slider__arrow-left"><i class="fas fa-caret-left"></i></div>',
  nextArrow: '<div class="testimonials-slider__arrow testimonials-slider__arrow-right"><i class="fas fa-caret-right"></i></div>'
});

/* search-form======================================== */

$(document).ready(function() {
	$("#search-check-1").on("change", function() {
		if ($("#search-check-1").prop("checked")) {
			$(".search-certificates").toggle();
			$(".search-installers").hide();
			$(".search-documents").hide();
			$(".search-form__text-input").css("display", "block");
			$(".search-form__text-icon").css("display", "block");
			$(".search-form__text-input").css("box-shadow", "none");
			$(".search-form__text-input").attr("placeholder", "");
		}
	});

	$(".search-form__text-icon-certificates").on("click", function() {
		$(".search-certificates").hide();
		$(".search-form__text-input").css("box-shadow", "1px 1px 10px #000");
	});

	$("#search-check-2").on("change", function() {
		if ($("#search-check-2").prop("checked")) {
			$(".search-installers").toggle();
			$(".search-certificates").hide();
			$(".search-documents").hide();
			$(".search-form__text-input").css("display", "none");		
			$(".search-form__text-icon").css("display", "none");	
			$(".search-form__text-input").attr("placeholder", "");	
		}
	});

	$("#search-check-3").on("change", function() {
		if ($("#search-check-3").prop("checked")) {
			$(".search-documents").toggle();
			$(".search-installers").hide();
			$(".search-certificates").hide();
			$(".search-form__text-input").css("display", "block");
			$(".search-form__text-input").css("box-shadow", "1px 1px 10px #000");
			$(".search-form__text-icon").css("display", "block");
			$(".search-form__text-input").attr("placeholder", "Enter your keyword(s)");
		}
	});

/* search-advanced======================================== */

	$(".search-link").on("click", function() {
		$(".search-shadow").css("display", "block");
		$(".search-advanced").css("display", "block");
	});

	$(".search-advanced__close").on("click", function() {
		$(".search-shadow").css("display", "none");
		$(".search-advanced").css("display", "none");
	});

/* search-result-certificates======================================== */

	$("#certificates-result__cell-link-1").on("click", function() {
		$(".certificates-result__variant-1").css("display", "table-row");
		$(this).next(".certificates-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".certificates-result__cell-close-1").on("click", function() {
		$(".certificates-result__variant-1").css("display", "none");
		$(this).prev(".certificates-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#certificates-result__cell-link-2").on("click", function() {
		$(".certificates-result__variant-2").css("display", "table-row");
		$(this).next(".certificates-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".certificates-result__cell-close-2").on("click", function() {
		$(".certificates-result__variant-2").css("display", "none");
		$(this).prev(".certificates-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#certificates-result__cell-link-3").on("click", function() {
		$(".certificates-result__variant-3").css("display", "table-row");
		$(this).next(".certificates-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".certificates-result__cell-close-3").on("click", function() {
		$(".certificates-result__variant-3").css("display", "none");
		$(this).prev(".certificates-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#certificates-result__cell-link-4").on("click", function() {
		$(".certificates-result__variant-4").css("display", "table-row");
		$(this).next(".certificates-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".certificates-result__cell-close-4").on("click", function() {
		$(".certificates-result__variant-4").css("display", "none");
		$(this).prev(".certificates-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#certificates-result__cell-link-5").on("click", function() {
		$(".certificates-result__variant-5").css("display", "table-row");
		$(this).next(".certificates-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".certificates-result__cell-close-5").on("click", function() {
		$(".certificates-result__variant-5").css("display", "none");
		$(this).prev(".certificates-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#certificates-result__cell-link-6").on("click", function() {
		$(".certificates-result__variant-6").css("display", "table-row");
		$(this).next(".certificates-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".certificates-result__cell-close-6").on("click", function() {
		$(".certificates-result__variant-6").css("display", "none");
		$(this).prev(".certificates-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#certificates-result__cell-link-7").on("click", function() {
		$(".certificates-result__variant-7").css("display", "table-row");
		$(this).next(".certificates-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".certificates-result__cell-close-7").on("click", function() {
		$(".certificates-result__variant-7").css("display", "none");
		$(this).prev(".certificates-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#certificates-result__cell-link-8").on("click", function() {
		$(".certificates-result__variant-8").css("display", "table-row");
		$(this).next(".certificates-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".certificates-result__cell-close-8").on("click", function() {
		$(".certificates-result__variant-8").css("display", "none");
		$(this).prev(".certificates-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#certificates-result__cell-link-9").on("click", function() {
		$(".certificates-result__variant-9").css("display", "table-row");
		$(this).next(".certificates-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".certificates-result__cell-close-9").on("click", function() {
		$(".certificates-result__variant-9").css("display", "none");
		$(this).prev(".certificates-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

/* search-result-installers======================================== */

	$("#installers-result__cell-link-1").on("click", function() {
		$(".installers-result__row-info-1").css("display", "table-row");
		$(this).next(".installers-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".installers-result__cell-close-1").on("click", function() {
		$(".installers-result__row-info-1").css("display", "none");
		$(this).prev(".installers-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#installers-result__cell-link-2").on("click", function() {
		$(".installers-result__row-info-2").css("display", "table-row");
		$(this).next(".installers-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".installers-result__cell-close-2").on("click", function() {
		$(".installers-result__row-info-2").css("display", "none");
		$(this).prev(".installers-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#installers-result__cell-link-3").on("click", function() {
		$(".installers-result__row-info-3").css("display", "table-row");
		$(this).next(".installers-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".installers-result__cell-close-3").on("click", function() {
		$(".installers-result__row-info-3").css("display", "none");
		$(this).prev(".installers-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#installers-result__cell-link-4").on("click", function() {
		$(".installers-result__row-info-4").css("display", "table-row");
		$(this).next(".installers-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".installers-result__cell-close-4").on("click", function() {
		$(".installers-result__row-info-4").css("display", "none");
		$(this).prev(".installers-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#installers-result__cell-link-5").on("click", function() {
		$(".installers-result__row-info-5").css("display", "table-row");
		$(this).next(".installers-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".installers-result__cell-close-5").on("click", function() {
		$(".installers-result__row-info-5").css("display", "none");
		$(this).prev(".installers-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#installers-result__cell-link-6").on("click", function() {
		$(".installers-result__row-info-6").css("display", "table-row");
		$(this).next(".installers-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".installers-result__cell-close-6").on("click", function() {
		$(".installers-result__row-info-6").css("display", "none");
		$(this).prev(".installers-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#installers-result__cell-link-7").on("click", function() {
		$(".installers-result__row-info-7").css("display", "table-row");
		$(this).next(".installers-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".installers-result__cell-close-7").on("click", function() {
		$(".installers-result__row-info-7").css("display", "none");
		$(this).prev(".installers-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#installers-result__cell-link-8").on("click", function() {
		$(".installers-result__row-info-8").css("display", "table-row");
		$(this).next(".installers-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".installers-result__cell-close-8").on("click", function() {
		$(".installers-result__row-info-8").css("display", "none");
		$(this).prev(".installers-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$("#installers-result__cell-link-9").on("click", function() {
		$(".installers-result__row-info-9").css("display", "table-row");
		$(this).next(".installers-result__cell-close").css("display", "table-cell");
		$(this).css("display", "none");
	});

	$(".installers-result__cell-close-9").on("click", function() {
		$(".installers-result__row-info-9").css("display", "none");
		$(this).prev(".installers-result__cell-link").css("display", "table-cell");
		$(this).css("display", "none");
	});

});

/* search/google-map */

// var map, map_contacts;

// function initMap() {

// map_contacts = new google.maps.Map(document.getElementById('contacts-content__map'), {
//   zoom: 18,
//   center: new google.maps.LatLng(51.479870, -0.196706),
//   mapTypeId: 'roadmap'
// });

// map = new google.maps.Map(document.getElementById('installers-result__map'), {
//   zoom: 11,
//   center: new google.maps.LatLng(51.421409, -0.051864),
//   mapTypeId: 'roadmap'
// });


// var iconBase = '../images/';
// var icons = {
// 	marker_custom: {
//   	icon: iconBase + 'map-marker.png'
//   }
// };

// var features = [
//   {
//     position: new google.maps.LatLng(51.421409, -0.051864),
//     type: 'marker_custom'
//   }, {
//     position: new google.maps.LatLng(51.417517, 0.007828),
//     type: 'marker_custom'
//   }, {
//     position: new google.maps.LatLng(51.440272, -0.001087),
//     type: 'marker_custom'
//   }, {
//     position: new google.maps.LatLng(51.382603, -0.114395),
//     type: 'marker_custom'
//   }, {
//     position: new google.maps.LatLng(51.417517, -0.134651),
//     type: 'marker_custom'
//   }, {
//     position: new google.maps.LatLng(51.382818, -0.013458),
//     type: 'marker_custom'
//   }
// ];

// var features_contacts = [
//   {
//     position: new google.maps.LatLng(51.479870, -0.196706),
//     type: 'marker_custom'
//   }
// ];

// // Create markers.
// features.forEach(function(feature) {
//   var marker = new google.maps.Marker({
//     position: feature.position,
//     icon: icons[feature.type].icon,
//     map: map
//   });
// });

// features_contacts.forEach(function(feature) {
//   var marker_contacts = new google.maps.Marker({
//     position: features_contacts.position,
//     icon: icons[features_contacts.type].icon,
//     map: map_contacts
//   });
// });
// };

/* contacts/google-map */

/*mobile-menu====================================*/

$(".header-mobile__burger").on("click", function() {
	$(".header-menu-mobile").css("display", "flex");
	$(this).hide();
	$(".header-mobile__close").show();
});

$(".header-mobile__close").on("click", function() {
	$(".header-menu-mobile").hide();
	$(this).hide();
	$(".header-mobile__burger").show();
});

/*escape key====================================*/

$(document).keyup(function(e) {
	if (e.keyCode == 27) {
		$(".search-installers").hide();
	}
});



// bydlocode
$(function(){
	SmoothScroll({ stepSize: 30 })
	var controller = new ScrollMagic.Controller({
		globalSceneOptions: {
			triggerHook: 0
		}

	});
	var controller__two__mobile = new ScrollMagic.Controller({
		globalSceneOptions: {
			triggerHook: 0
		},
		container: "#mobile__wrapper"
	}); 
	if($(document).width()>640){
		var scene = new ScrollMagic.Scene({
		
		
      
			triggerElement: ".product-main"
		  
	})
	.setPin('.product-main')
	
	.addTo(controller);
	}else{
	// 	var scene = new ScrollMagic.Scene({
		
		
      
	// 		triggerElement: ".product-main",
	// 		offset:800
		  
	// })
	// .setPin('.product-main')

	// .addTo(controller__two__mobile);
	}
	






})
