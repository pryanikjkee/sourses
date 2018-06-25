$(function () {

	window.onload = function () {

		console.log('video second loaded');
		var promiseSecond = document.querySelectorAll('.promise__play')[0].play();
		console.log(promiseSecond);
		if (promiseSecond !== undefined) {
			promiseSecond.then(_ => {
				console.log('autoplay second started');

			}).catch(error => {
				// Autoplay was prevented.
				console.log('autoplay sec prevent');
				// Show a "Play" button so that user can start playback.
			});
		}

		var promisethird = document.querySelectorAll('.promise__play')[1].play();
		console.log(promisethird);
		if (promisethird !== undefined) {
			promisethird.then(_ => {
				console.log('autoplay second started');

			}).catch(error => {
				// Autoplay was prevented.
				console.log('autoplay sec prevent');
				// Show a "Play" button so that user can start playback.
			});
		}


		console.log('video loaded');
		var promiseHead = document.getElementById('bgvidheader').play();
		console.log(promiseHead);
		// if (promiseHead !== undefined) {
		// 	promiseHead.then(_ => {
		// 		console.log('autoplay started');

		// 	}).catch(error => {
		// 		// Autoplay was prevented.
		// 		console.log('autoplay prevent');
		// 		// Show a "Play" button so that user can start playback.
		// 	});
		// }
		function setMute (){
			document.querySelectorAll('.promise__play')[0].mute = true;
			document.querySelectorAll('.promise__play')[1].mute = true;
			document.getElementById('bgvidheader').mute = true;
			document.querySelectorAll('.promise__play')[0].preload;
			document.querySelectorAll('.promise__play')[1].preload;
			document.getElementById('bgvidheader').preload;
			console.log('attr muted');
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

		if ($(document).width() < 640) {
			if ($('#full__bg__video').hasClass('2has__wipe')) {
				console.log("has wipe fullbgvideo");

			} else {
				console.log("no wipe fullbgvideo");
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
					.addIndicators()
					.addTo(controller__two);
			}
		} else {
			if ($('#full__bg__video').hasClass('2has__wipe')) {
				console.log("has wipe fullbgvideo");

				var scene__two__wipe = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.bg__vid__switch')[i],
						duration: "100%"
					})
					.setTween(document.querySelectorAll('.opacity__dimmed')[i], 1, {
						opacity: opacityvideobg
					})
					.setPin(document.querySelectorAll('.bg__vid__switch')[i], {
						pushFollowers: false
					})
					.addIndicators()
					.addTo(controller__two);

			} else {
				console.log("no wipe fullbgvideo");
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
					.addIndicators()
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

		console.log(opacitypull + "pull opacity");



		if ($(document).width() < 640) {

			if ($('#pull__quote__content').hasClass('3has__wipe')) {
				console.log("quote wipeee mobile");
				var scene__quote__wipe_mobile = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote')[i],
						duration: 50
					})
					.setPin(document.querySelectorAll('.quote')[i], {
						pushFollowers: false
					})
					.addIndicators()

					.addTo(controller__two__mobile);
			} else {
				console.log("quote no wipe mobile");
				var scene__quote_mobile = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote')[i],
						duration: 500
					})
					.setPin(document.querySelectorAll('.quote')[i], {
						pushFollowers: false
					})
					.addIndicators()

					.addTo(controller__two__mobile);
			}
		} else {
			if ($('#pull__quote__content').hasClass('transform')) {
				var scene__quote__wipe = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote')[i],
						duration: 500

					})
					.setTween(document.querySelectorAll('.quote__block')[i], {
						y: '40%',
						x:'10%',
						ease: Linear.easeNone
					})
					.addIndicators()
					.addTo(controller__two);

			}
			// 
			if ($('#pull__quote__content').hasClass('3has__wipe')) {
				console.log("quote wipeee");
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
					.addIndicators()
					.addTo(controller__two);

			} else {
				console.log("quote no wipe");
				var scene__quote = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote')[i],
						duration: 500
					})
					// .setPin(document.querySelectorAll('.quote')[i], {
					// 	pushFollowers: true
					// })
					.setTween(document.querySelectorAll('.quote')[i], 1, {
						opacity: opacitypull
					})
					.addIndicators()
					.addTo(controller__two);
			}
		}



		// for
	}

	var pinnedyoutube = document.querySelectorAll('.quote__video');

	for (var i = 0; i < pinnedyoutube.length; i++) {

		if ($(document).width() < 640) {
			if ($('#ytube__with__bg').hasClass('4has__wipe')) {
				var youtube__embeed_mobile = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote__video')[i],
						duration: 200
					})
					.setPin(document.querySelectorAll('.quote__video')[i], {
						pushFollowers: false
					})
					.setTween(document.querySelectorAll('.quote__video')[i], 1, {
						opacity: 1
					})
					.addIndicators()
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
						opacity: 1
					})
					.addIndicators()
					.addTo(controller__two__mobile);
			}
			//   скрипт мобилки
		} else {
			if ($('#ytube__with__bg').hasClass('4has__wipe')) {
				console.log('youtube has wipe');
				var youtube__embeed = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote__video')[i],
						duration: 200
					})
					.setPin(document.querySelectorAll('.quote__video')[i], {
						pushFollowers: false
					})
					.setTween(document.querySelectorAll('.quote__video')[i], 1, {
						opacity: 1
					})
					.addIndicators()
					.addTo(controller__two);

			} else {
				var youtube__embeed = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.quote__video')[i],
						duration: 500
					})
					.setPin(document.querySelectorAll('.quote__video')[i], {
						pushFollowers: true
					})
					.setTween(document.querySelectorAll('.quote__video')[i], 1, {
						opacity: 1
					})
					.addIndicators()
					.addTo(controller__two);
			}
		}



	}
	// end for

	var pinnedtext = document.querySelectorAll('.text__text');
	var pinnedimg = document.querySelectorAll('.text__img');
	var pinnedbox = document.querySelectorAll('.text__box');
	var pinnedunderline = document.querySelectorAll('.text__underline');
	for (var k = 0; k < pinnedbox.length; k++) {
		if ($('#text__with__img').hasClass('transform')) {
			console.log('scene second');
			// sdasdasdasdasdasd
			new ScrollMagic.Scene({
					triggerElement: document.querySelectorAll('.text__box')[k],
					duration: 380

				})
				.setTween(document.querySelectorAll('.text__box')[k], {
					y: '-20%',
					ease: Linear.easeNone
				})
				// .addIndicators()
				.addTo(controller__paralax);



		}
	}
	for (var i = 0; i < pinnedtext.length; i++) {
		if ($('#text__with__img').hasClass('lightparalax')) {
			opacityparalax = 0.4;
		} else {
			opacityparalax = 1;
		}

		if ($(document).width() < 640) {
			if ($('#text__with__img').hasClass('transform')) {
				var scene__text__trans = new ScrollMagic.Scene({
						triggerElement: document.querySelectorAll('.text__underline')[i],
						duration: 100

					})
					.setTween(document.querySelectorAll('.text__box')[i], {
						y: '-20%',
						ease: Linear.easeNone
					})
					.addIndicators()
					.addTo(controller__two__mobile);
			}
			var scene__text__whith__bg_mobile = new ScrollMagic.Scene({
					triggerElement: document.querySelectorAll('.text__img')[i],
					duration: "100%"
				})
				// .setPin(document.querySelectorAll('.text__img')[i], {
				// 	pushFollowers: false
				// })

				.addIndicators()
				.addTo(controller__two__mobile);
			var scene__text__whith__img_mobile = new ScrollMagic.Scene({
					triggerElement: document.querySelectorAll('.text__text')[i],
					duration: 210
				})
				// .setPin(document.querySelectorAll('.text__text')[i], {
				// 	pushFollowers: true
				// })
				.setTween(document.querySelectorAll('.text__img')[i], 0.5, {
					opacity: opacityparalax
				})
				.addIndicators()
				.addTo(controller__two__mobile);
		} else {

			// if ($('#text__with__img').hasClass('transform')) {
			// 	console.log('scene second');
			// 	// sdasdasdasdasdasd
			// 	new ScrollMagic.Scene({
			// 			triggerElement: document.querySelectorAll('.text__underline')[i],
			// 			duration: 150

			// 		})
			// 		.setTween(document.querySelectorAll('.text__box')[i], {
			// 			y: '-60%',
			// 			ease: Linear.easeNone
			// 		})
			// 		.addIndicators()
			// 		.addTo(controller__two);



			// }

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
				.addIndicators()
				.addTo(controller__two);
			// scene__text__whith__bg.refresh();
			var scene__text__whith__bg__tow = new ScrollMagic.Scene({
					triggerElement: document.querySelectorAll('.text__text')[i],
					duration: 810
				})
				.setPin(document.querySelectorAll('.text__text')[i], {
					pushFollowers: true
				})
				.addIndicators()
				.addTo(controller__two);
			// scene__text__whith__bg__tow.refresh();
		}





	}






	//    jquery
})