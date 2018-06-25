<?php
/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
	<?php $la = rand(0,100); ?>
	<?php print $laicon = ""; ?>
	<?php if(isset($content['field_la_marker_icon'])) $laicon = file_create_url($content['field_la_marker_icon']['#items'][0]['taxonomy_term']->field_marker_icon['und'][0]['uri']); ?>
	<?php print $laname = ""; ?>
	<?php if(isset($content['field_la_marker_title'])) $laname = $content['field_la_marker_title']['#items'][0]['value']; ?>

	<?php if(isset($content['field_la_lat']) && isset($content['field_la_lng'])): ?>
	<div id="map__wrapper" class="position-relative desktop__map<?php print $la;?>">
		<div id="map-box" class="au__map<?php print $la;?> d-none d-lg-block"></div>
		<!-- Класс связан с картой class="au__map" и анимахой в каждую новую карту менять название класса -->
		<section class="usa__map ">
			<div class="container-fluid inner__abs desc__inner au__map__desc<?php print $la;?>">
				<div class="row">
					<div class="col-5 offset-6 map__desc">
						<div class="dropdown">
							<?php if(isset($content['field_la_title'])): ?>
							<button class="dropdown-toggle point__toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
								<p>
									<?php print $content['field_la_title']['#items'][0]['value']; ?>
								</p>
								<a href="" class="dropdown__arrow"></a>
							</button>
							<?php endif; ?>
							<?php if(isset($content['field_la_map_text'])): ?>
							<div class="dropdown-menu drop__map<?php print $la;?>" aria-labelledby="dropdownMenuButton">
								<?php print $content['field_la_map_text']['#items'][0]['value']; ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script>
			$(function () {
				if ($(document).width() < 970) {
					$('.desktop__map<?php print $la;?>').remove();

				}

				if ($(document).width() > 970) {
					var scene__desc__opened = new ScrollMagic.Scene({
							triggerElement: ".au__map__desc<?php print $la;?>",
							offset: 100,
							duration: "110%"

							// сюда вставляем класс 
						})

						.setClassToggle(".drop__map<?php print $la;?>", "d-block")



						.addTo(controller__two);

					// 
					var scene__desc__open = new ScrollMagic.Scene({
							triggerElement: ".au__map__desc<?php print $la;?>",
							offset: 250,
							duration: "110%"

							// сюда вставляем класс 
						})

						.setClassToggle(".drop__map<?php print $la;?>", "show")



						.addTo(controller__two);
					var scene__desc__zoom = new ScrollMagic.Scene({
							triggerElement: ".au__map__desc<?php print $la;?>",
							// offset:250,
							duration: "600%"
							// was 50

							// сюда вставляем класс 
						})



						.setClassToggle(".au__map__desc<?php print $la;?>", "desc__shown")


						.addTo(controller__two);

					var scenetest = new ScrollMagic.Scene({
							triggerElement: ".au__map__desc<?php print $la;?>",
							duration: "600%",
							// was 60

						})


						.on('enter', function (event) {
							$(".marker__container<?php print $la;?>").addClass("noscale")

						})
						.on('leave', function (event) {
							$(".marker__container<?php print $la;?>").removeClass("noscale")
						})


						.addTo(controller__two);


					var scene__desc = new ScrollMagic.Scene({
							triggerElement: ".au__map__desc<?php print $la;?>",
							duration: "605%"
							// was 85

						})

						.setPin(".au__map__desc<?php print $la;?>", {
							pushFollowers: false
						})



						.addTo(controller__two);


					// 
					var latLng1 = new google.maps.LatLng(40.741895, -73.989308);
					// 
					var latLng2 = new google.maps.LatLng(40.0217511414418, -86.52449398679386);
					var latLng3 = new google.maps.LatLng(52.46324079408103, -116.75764502754771);
					var scene__map__all<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							duration: '600%'

						})



						.setPin(".au__map<?php print $la;?>", {
							pushFollowers: true
						})
						


						.addTo(controller__two);
						var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							duration: '100%'

						})
		
						.on('enter', function (e) {
							console.log('map enter');
							au__map<?php print $la;?>.panTo(latLng1);

						})
						
                         .addIndicators()
						.addTo(controller__two);
						var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							duration: '100%',
							offset:700

						})
		
						.on('enter', function (e) {
							console.log('map enter');
							au__map<?php print $la;?>.panTo(latLng2);

						})
						
                         .addIndicators()
						.addTo(controller__two);
						var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							duration: '100%',
							offset:1400

						})
		
						.on('enter', function (e) {
							console.log('map enter');
							au__map<?php print $la;?>.panTo(latLng3);

						})
						
                         .addIndicators()
						.addTo(controller__two);
						var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							offset: 900,
							duration:"50%"


						})




						.on('start', function (e) {
							console.log('zoom enter');
							au__map<?php print $la;?>.setZoom(5);

						})
						.on('end', function (e) {
							console.log('zoom end');
							au__map<?php print $la;?>.setZoom(4);

						})
                  .addIndicators()
						.addTo(controller__two);
						var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							offset: 1800,
							duration:"50%"


						})




						.on('start', function (e) {
							console.log('zoom enter');
							au__map<?php print $la;?>.setZoom(5);

						})
						.on('end', function (e) {
							console.log('zoom end');
							au__map<?php print $la;?>.setZoom(4);

						})
                  .addIndicators()
						.addTo(controller__two);
						var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							offset: 300,
							duration:"50%"


						})




						.on('start', function (e) {
							console.log('zoom enter');
							au__map<?php print $la;?>.setZoom(5);

						})
						.on('end', function (e) {
							console.log('zoom end');
							au__map<?php print $la;?>.setZoom(4);

						})
                  .addIndicators()
						.addTo(controller__two);
						
						

				}
			})
			if ($(document).width() > 970) {
				testzoom = 2.5;
			}
			if ($(document).width() > 1800) {
				testzoom = 3;
			}

			// название должно быть как название класса
			au__map<?php print $la;?> = new GMaps({
				div: '.au__map<?php print $la;?>',
				// тот же класс что и выше
				lat: 0,
				//  координаты ширина и долгота берется с гугл карт 
				lng: 0,
				scrollwheel: false,
				zoomControl: true,
				zoom: testzoom,
				disableDefaultUI: true,
				styles: map__style
			});
			au__map<?php print $la;?>.panBy(0, 100)

			// 

			au__map<?php print $la;?>.drawOverlay({
				// аналогичные координаты что и выше
				lat: 40.741895,
				lng: -73.989308,

				<?php if(isset($content['field_la_marker_title'])): ?>
				content: "<div class='g__map__marker marker__container<?php print $la;?>'><h3 class='text-uppercase'><?php print $laname; ?></h3><img src='<?php print $laicon; ?>' class='img-fluid gmap__icon' alt='gmap__icon'> </div>"
				<?php endif; ?>
			});
			au__map<?php print $la;?>.drawOverlay({
				// аналогичные координаты что и выше
				lat: 40.0217511414418,
				lng: -86.52449398679386,

				<?php if(isset($content['field_la_marker_title'])): ?>
				content: "<div class='g__map__marker marker__container<?php print $la;?>'><h3 class='text-uppercase'><?php print $laname; ?></h3><img src='<?php print $laicon; ?>' class='img-fluid gmap__icon' alt='gmap__icon'> </div>"
				<?php endif; ?>
			});
			au__map<?php print $la;?>.drawOverlay({
				// аналогичные координаты что и выше
				lat: 52.46324079408103,
				lng: -116.75764502754771,

				<?php if(isset($content['field_la_marker_title'])): ?>
				content: "<div class='g__map__marker marker__container<?php print $la;?>'><h3 class='text-uppercase'><?php print $laname; ?></h3><img src='<?php print $laicon; ?>' class='img-fluid gmap__icon' alt='gmap__icon'> </div>"
				<?php endif; ?>
			});
		</script>
	</div>
	<?php endif; ?>