$(window).on("scroll", function () {
	controller__two.update(true);

});

function playVideo() {
	var promiseSecond = document.querySelectorAll('.promise__play')[0].pause();

	if (promiseSecond !== undefined) {
		promiseSecond.then(_ => {


		}).catch(error => {

		});
	}

	var promisethird = document.querySelectorAll('.promise__play')[1].pause();

	if (promisethird !== undefined) {
		promisethird.then(_ => {


		}).catch(error => {

		});
	}

	console.log("video onload start");


	var promiseHead = document.getElementById('bgvidheader').play();




}



function removePreload() {
	$('.scrollContainer').removeClass('noscroll');
	$('#preloader').fadeOut(1500);
	console.log("remove");
}

$(window).bind("load", function () {
	

	setTimeout(removePreload, 500);
	setTimeout(playVideo, 2000);
});


$(function () {

	var scrollElement = function (element, scrollPosition, duration) {
		var style = element.style;

		// setup CSS transition duration and easing function
		style.webkitTransition =
			style.transition = duration + 's';
		style.webkitTransitionTimingFunction =
			style.TransitionTimingFunction = 'ease-in-out';

		// use translate3d to force hardware acceleration
		style.webkitTransform =
			style.Transform = 'translate3d(0, ' + -scrollPosition + 'px, 0)';
	}

	var scrollBody = scrollElement.bind(null,
		document.getElementsByTagName('body')[0]);

	var paragraphindex = document.querySelectorAll('.field-item');
	for (p = 0; p < paragraphindex.length; p++) {
		document.querySelectorAll('.field-item')[p].style.zIndex = p * 50;
		document.querySelectorAll('.field-item')[p].style.position = 'relative';
	}






	window.onload = function () {
		if (document.documentElement.clientWidth < 970) {

			var promiseSecond = document.querySelectorAll('.promise__play')[0].play();

			if (promiseSecond !== undefined) {
				promiseSecond.then(_ => {


				}).catch(error => {

				});
			}

			var promisethird = document.querySelectorAll('.promise__play')[1].play();
			promisethird.currentTime = 0;
			if (promisethird !== undefined) {
				promisethird.then(_ => {


				}).catch(error => {

				});
			}


		}
		// there was video promise


		function setMute() {
			document.querySelectorAll('.promise__play')[0].mute = true;
			document.querySelectorAll('.promise__play')[1].mute = true;
			document.getElementById('bgvidheader').mute = true;
			document.querySelectorAll('.promise__play')[0].preload;
			document.querySelectorAll('.promise__play')[1].preload;
			document.getElementById('bgvidheader').preload;

		};
		setMute();
	}





















	// var pinnedvideo = document.querySelectorAll('.bg__vid__switch');
	var pinnedvideo = document.querySelectorAll('.bg__vid__switch');




	for (var i = 0; i < pinnedvideo.length; i++) {
		if ($('#full__bg__video').hasClass('lightdimmed')) {
			opacityvideobg = 0.4;
		} else {
			opacityvideobg = 1;
		}

		if ($(document).width() < 970) {
			if ($('#full__bg__video').hasClass('2has__wipe')) {

				var scene__videom = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.bg__vid__switch')[i],
						duration: "50%"
					})
					.on("enter", function (event) {

						var promiseMobile = document.querySelectorAll('.promise__play')[0].play();
						if (promiseMobile !== undefined) {
							promiseMobile.then(_ => {


							}).catch(error => {

							});
						}

						document.querySelectorAll('.promise__play')[1].play();
						document.querySelectorAll('.promise__play')[1].currentTime = 0;
					})
					.on("leave", function (event) {

						document.querySelectorAll('.promise__play')[0].pause();
						document.querySelectorAll('.promise__play')[1].pause();

					})

					.addTo(controller__paralax__mobile);




				var scene__two = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.bg__vid__switch')[i],
						duration: "50%"
					})
					.setTween(document.querySelectorAll('.opacity__dimmed')[i], 1, {
						opacity: opacityvideobg
					})



					.addTo(controller__two__mobile);

			} else {

				var scene__two = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.bg__vid__switch')[i],
						duration: 1500
					})
					.setTween(document.querySelectorAll('.opacity__dimmed')[i], 1, {
						opacity: opacityvideobg
					})
					.setPin(document.querySelectorAll('.bg__vid__switch')[i], {
						pushFollowers: true
					})
					.on("enter", function (event) {
						document.querySelectorAll('.promise__play')[0].play();
						document.querySelectorAll('.promise__play')[1].play();

					})
					.on("leave", function (event) {
						document.querySelectorAll('.promise__play')[0].pause();
						document.querySelectorAll('.promise__play')[1].pause();

					})

					.addTo(controller__two);
			}
		} else {
			if ($('#full__bg__video').hasClass('2has__wipe')) {


				var scene__two__wipe = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.bg__vid__switch')[i],
						duration: "50%"

					})
					.setTween(document.querySelectorAll('.opacity__dimmed')[i], 1, {
						opacity: opacityvideobg
					})
					.on("enter", function (event) {
						document.querySelectorAll('.promise__play')[0].play();
						document.querySelectorAll('.promise__play')[1].play();

					})
					.on("leave", function (event) {
						document.querySelectorAll('.promise__play')[0].pause();
						document.querySelectorAll('.promise__play')[1].pause();

					})




					.setPin(document.querySelectorAll('.bg__vid__switch')[i], {
						pushFollowers: true
					})
				
					.addTo(controller__two);


			} else {

				var scene__two = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.bg__vid__switch')[i],
						duration: 1500
					})
					.setTween(document.querySelectorAll('.opacity__dimmed')[i], 1, {
						opacity: opacityvideobg
					})
					.setPin(document.querySelectorAll('.bg__vid__switch')[i], {
						pushFollowers: true
					})

					.addTo(controller__two);

			}
		}

		//for end
	}
	// for

	var pinnedquote = document.querySelectorAll('.quote');
	var pinnedquoteblock = document.querySelectorAll('.quote__block');

	for (var i = 0; i < pinnedquote.length; i++) {
		if ($('#pull__quote__content').hasClass('lightdimmed')) {
			opacitypull = 0.4;
		} else {
			opacitypull = 1;
		}





		if ($(document).width() < 970) {

			if ($('#pull__quote__content').hasClass('3has__wipe')) {


			} else {

				var scene__quote_mobile = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote')[i],
						duration: 500
					})
					.setPin(document.querySelectorAll('.quote')[i], {
						pushFollowers: false
					})


					.addTo(controller__two__mobile);
			}
		} else {
			if ($('#pull__quote__content').hasClass('transform')) {
				var scene__quote__wipe = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote')[i],
						duration: 500

					})
					.setTween(document.querySelectorAll('.quote__block')[i], {
						y: '-55%',

						ease: Linear.easeNone
					})

					.addTo(controller__two);

			}
			// 
			if ($('#pull__quote__content').hasClass('3has__wipe')) {

				var scene__quote__wipe = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote')[i],
						duration: "100%"
					})
					.setPin(document.querySelectorAll('.quote')[i], {
						pushFollowers: false
					})

					.setTween(document.querySelectorAll('.quote')[i], 1, {
						opacity: opacitypull
					})

					.addTo(controller__two);
				// var centered__scroll__quote = new ScrollMagic.Scene({
				//     triggerElement:  document.querySelectorAll('.quote')[i],


				//     duration: "150%"
				// })
				// .setTween(document.querySelectorAll('.pull__paralax')[i],{y:'-5%',ease:Linear.easenone})
				// .setClassToggle(document.querySelectorAll('.pull__paralax')[i], 'underneed')
				//
				// // .addTo(center__hook);
				// .addTo(controller);
			} else {

				var scene__quote = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote')[i],
						duration: 500
					})
					.setPin(document.querySelectorAll('.quote')[i], {
						pushFollowers: false
					})
					.setTween(document.querySelectorAll('.quote')[i], 1, {
						opacity: opacitypull
					})

					.addTo(controller__two);
			}
		}



		// for
	}

	var pinnedyoutube = document.querySelectorAll('.quote__video');

	for (var i = 0; i < pinnedyoutube.length; i++) {

		if (document.querySelectorAll('.quote__video')[i].classList.contains('lighttube')) {
		
			opacitytube = 0.4;
		} else {
			opacitytube = 1;
		}

		if ($(document).width() < 970) {
			if ($('#ytube__with__bg').hasClass('4has__wipe')) {
				var youtube__embeed_mobile = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote__video')[i],
						duration: "20%",
						offset: 250
					})

					.setTween(document.querySelectorAll('.quote__video')[i], 1, {
						opacity: opacitytube
					})

					.addTo(controller__two__mobile);
			} else {
				var youtube__embeed = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote__video')[i],
						duration: 500
					})
					// .setPin(document.querySelectorAll('.quote__video')[i], {
					// 	pushFollowers: true
					// })
					.setTween(document.querySelectorAll('.quote__video')[i], 1, {
						opacity: opacitytube
					})

					.addTo(controller__two__mobile);
			}
			//   скрипт мобилки
		} else {

			if (document.documentMode || /Edge/.test(navigator.userAgent)) {
				console.log("edge ");
			} else {
				if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {

				} else {
					if ($('#ytube__with__bg').hasClass('transform')) {

						var youtube__embeed = new ScrollMagic.Scene({
								triggerElement: document.querySelectorAll('.quote__video')[i],
								duration: '40%'
							})
							.setTween(document.querySelectorAll('.mobile__video__row')[i], {
								y: '10%',
								ease: Linear.easeNone
							})

							.addTo(controller__two);

					}
				}

			}





			if ($('#ytube__with__bg').hasClass('4has__wipe')) {

				var youtube__embeed = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote__video')[i],
						duration: '60%'
					})
					.setPin(document.querySelectorAll('.quote__video')[i], {
						pushFollowers: false
					})
					// .setTween(document.querySelectorAll('.quote__video')[i], 1, {
					// 	opacity: opacitytube
					// })

					.addTo(controller__two);
				var youtube__embeed_opacity = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote__video')[i],
						duration: '60%',
						offset: 200
					})

					.setTween(document.querySelectorAll('.quote__video')[i], 1, {
						opacity: opacitytube
					})

					.addTo(controller__two);

			} else {
				
				var sec__par = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote__video')[i],
						duration: '80%'
					})



					.addTo(controller__two);
				var youtube__embeed = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote__video')[i],
						duration: '60%',
						offset: 200
					})
					// .setPin(document.querySelectorAll('.quote__video')[i], {
					// 	pushFollowers: true
					// })
					.setTween(document.querySelectorAll('.quote__video')[i], 1, {
						opacity: opacitytube
					})

					.addTo(controller__two);
			}
		}



	}
	// end for

	var pinnedtext = document.querySelectorAll('.text__text');
	var pinnedimg = document.querySelectorAll('.text__img');
	var pinnedbox = document.querySelectorAll('.text__box');
	var pinnedunderline = document.querySelectorAll('.text__underline');

	for (var i = 0; i < pinnedtext.length; i++) {

		if ($('#text__with__img').hasClass('lightparalax')) {
			opacityparalax = 0.4;
		} else {
			opacityparalax = 1;
		}

		if ($(document).width() < 970) {
			if ($('#text__with__img').hasClass('transform')) {
				var scene__text__trans = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.text__underline')[i],
						duration: 100

					})
					.setTween(document.querySelectorAll('.text__box')[i], {
						y: '-2%',
						ease: Linear.easeNone
					})

					.addTo(controller__two__mobile);
			}
			var scene__text__whith__bg_mobile = new ScrollMagic.Scene({
					triggerElement: document.querySelectorAll('.text__img')[i],
					duration: "200%"
				})
				.setClassToggle(" .text__img", 'fixed')
				.setPin(document.querySelectorAll('.text__img')[i], {
					pushFollowers: false
				})


				.addTo(controller__two__mobile);
			var scene__text__whith__img_mobile = new ScrollMagic.Scene({
					triggerElement: document.querySelectorAll('.text__text')[i],
					duration: 210
				})
				// .setPin(document.querySelectorAll('.text__text')[i], {
				// 	pushFollowers: true
				// })

				.addTo(controller__two__mobile);
		} else {

		



	

			var scene__text__whith__bg = new ScrollMagic.Scene({
					triggerElement: document.querySelectorAll('.text__img')[i],
					duration: "600%"
				})
				.setPin(document.querySelectorAll('.text__img')[i], {
					pushFollowers: false
				})

				.setTween(document.querySelectorAll('.text__img')[i], 1.5, {
					opacity: opacityparalax
				})

				.addTo(controller__two);
			// scene__text__whith__bg.refresh();
			var scene__text_par = new ScrollMagic.Scene({
					triggerElement: document.querySelectorAll('.text__img')[i],
					duration: "600%"
				})
				.setTween(document.querySelectorAll('.text__img')[i], {
					y: '-20%',
					ease: Linear.easeNone
				})

				.addTo(center__hook);
			if (document.documentMode || /Edge/.test(navigator.userAgent)) {
				var scene__text__whith__bg__tow = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.text__text')[i],
						duration: 810,
						offset: -280
					})

					.setTween(document.querySelectorAll('.text__box')[i], {
						y: '-90%',
						ease: Linear.easeNone
					})

					.addTo(controller__text__paralax);
			} else {
				var scene__text__whith__bg__tow = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.text__text')[i],
						duration: 810,
						offset: -280
					})
					.setPin(document.querySelectorAll('.text__text')[i], {
						pushFollowers: true
					})

					.setTween(document.querySelectorAll('.text__box')[i], {
						y: '-90%',
						ease: Linear.easeNone
					})

					.addTo(controller__text__paralax);
			}

			// scene__text__whith__bg__tow.refresh();
		}





	}






	//    jquery
})