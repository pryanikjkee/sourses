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
<?php print $laicon2 = ""; ?>
<?php print $laicon3 = ""; ?>
<?php if(isset($content['field_la_marker_icon'])) $laicon = file_create_url($content['field_la_marker_icon']['#items'][0]['taxonomy_term']->field_marker_icon['und'][0]['uri']); ?>
<?php if(isset($content['field_la_marker_icon2'])) $laicon2 = file_create_url($content['field_la_marker_icon2']['#items'][0]['taxonomy_term']->field_marker_icon['und'][0]['uri']); ?>
<?php if(isset($content['field_la_marker_icon3'])) $laicon3 = file_create_url($content['field_la_marker_icon3']['#items'][0]['taxonomy_term']->field_marker_icon['und'][0]['uri']); ?>
<?php print $laname = ""; ?>
<?php print $laname2 = ""; ?>
<?php print $laname3 = ""; ?>
<?php if(isset($content['field_la_marker_title'])) $laname = $content['field_la_marker_title']['#items'][0]['value']; ?>
<?php if(isset($content['field_la_marker_title2'])) $laname2 = $content['field_la_marker_title2']['#items'][0]['value']; ?>
<?php if(isset($content['field_la_marker_title3'])) $laname3 = $content['field_la_marker_title3']['#items'][0]['value']; ?>

<div id="map__wrapper" class="position-relative desktop__map<?php print $la;?>">
    <div id="map-box" class="au__map<?php print $la;?>  d-block"></div>
    <!-- Класс связан с картой class="au__map" и анимахой в каждую новую карту менять название класса -->
    <section class="usa__map ">
        <div class="container-fluid inner__abs desc__inner au__map__desc<?php print $la;?>  ">
            <div class="row">
            	<?php if(isset($content['field_la_lat']) && isset($content['field_la_lng'])): ?>
	                <div class="col-5 offset-6 map__desc dropone point<?php print $la;?>">
					<h3 class="text-uppercase"><?php print $laname; ?></h3>
	                    <div class="dropdown">
	                    	<?php if(isset($content['field_la_title'])): ?>
		                        <button class="dropdown-toggle read__more point__toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
		                            <p><?php print $content['field_la_title']['#items'][0]['value']; ?></p>
		                            <a href="" class="dropdown__arrow"></a>
		                        </button>
	                        <?php endif; ?>
	                    	<?php if(isset($content['field_la_map_text'])): ?>
		                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		                            <?php print $content['field_la_map_text']['#items'][0]['value']; ?>
		                        </div>
		                    <?php endif; ?>
	                    </div>
	                </div>
	            <?php endif; ?>
	            <?php if(isset($content['field_la_lat2']) && isset($content['field_la_lng2'])): ?>
	                <div class="col-5 offset-6 map__desc droptwo point<?php print $la;?>">
					<h3 class="text-uppercase"><?php print $laname2; ?></h3>
	                    <div class="dropdown">
	                    	<?php if(isset($content['field_la_title2'])): ?>
		                        <button class="dropdown-toggle read__more point__toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
		                            <p><?php print $content['field_la_title2']['#items'][0]['value']; ?></p>
		                            <a href="" class="dropdown__arrow"></a>
		                        </button>
		                    <?php endif; ?>
		                    <?php if(isset($content['field_la_map_text2'])): ?>
		                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		                            <?php print $content['field_la_map_text2']['#items'][0]['value']; ?>
		                        </div>
		                    <?php endif; ?>
	                    </div>
	                </div>
	            <?php endif; ?>
	            <?php if(isset($content['field_la_lat3']) && isset($content['field_la_lng3'])): ?>
	                <div class="col-5 offset-6 map__desc droptree point<?php print $la;?>">
					<h3 class="text-uppercase"><?php print $laname3; ?></h3>
	                    <div class="dropdown">
	                    	<?php if(isset($content['field_la_title3'])): ?>
		                        <button class="dropdown-toggle point__toggle read__more" type="button" id="dropdownMenuButton" data-toggle="dropdown">
		                            <p><?php print $content['field_la_title3']['#items'][0]['value']; ?></p>
		                            <a href="" class="dropdown__arrow"></a>
		                        </button>
		                    <?php endif; ?>
		                    <?php if(isset($content['field_la_map_text3'])): ?>
		                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		                            <?php print $content['field_la_map_text3']['#items'][0]['value']; ?>
		                        </div>
		                    <?php endif; ?>
		                </div>
	                </div>
                <?php endif; ?>
            </div>
        </div>
        <!--  -->
    </section>
    <script>

$(function(){

if($(document).width() > 970){
	// desc fix
	var scene__desc__zoom = new ScrollMagic.Scene({
			triggerElement: ".au__map__desc<?php print $la;?>",
			// offset:250,
			duration: 5200
			// was 50

			// сюда вставляем класс 
		})



		.setClassToggle(".au__map__desc<?php print $la;?>", "desc__shown")


		.addTo(controller__two);
	var scene__desc = new ScrollMagic.Scene({
			triggerElement: ".au__map__desc<?php print $la;?>",
			duration: 5200
			// was 85

		})

		.setPin(".au__map__desc<?php print $la;?>", {
			pushFollowers: false
		})



		.addTo(controller__two);
	// desc fixed end
	// show markers
	var scenetest = new ScrollMagic.Scene({
			triggerElement: ".au__map__desc<?php print $la;?>",
			duration: 5200
			// was 60

		})


		.on('enter', function (event) {
			$(".marker__container<?php print $la;?>").addClass("noscale")

		})
		.on('leave', function (event) {
			$(".marker__container<?php print $la;?>").removeClass("noscale")
		})


		.addTo(controller__two);

	// show markers
	// fix map
	var scene__map__all<?php print $la;?> = new ScrollMagic.Scene({
			triggerElement: ".au__map<?php print $la;?>",
			duration: 5200

		})



		.setPin(".au__map<?php print $la;?>", {
			pushFollowers: true
		})



		.addTo(controller__two);

// fix map end
// pan to first map
var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							duration: 700

						})
		
						.on('enter', function (e) {
							console.log('map enter');
							test__map<?php print $la;?>.panTo(latLng1);
							

						})
						
                         .addIndicators()
						.addTo(controller__two);
						// pan end
						// zoom
						var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							offset: 400,
							duration:1000
							

						})

						.on('start', function (e) {
							console.log('zoom enter');
							test__map<?php print $la;?>.setZoom(5);
							$(".dropone").show(500);

						})
						.on('leave end', function (e) {
							console.log('zoom end');
							test__map<?php print $la;?>.setZoom(4);
							$(".dropone").hide(500);

						})
                  .addIndicators()
						.addTo(controller__two);
						// zoom end

// pan 2 marker
var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							duration: 1400,
							offset:1800

						})
		
						.on('enter', function (e) {
							console.log('map enter');
							test__map<?php print $la;?>.panTo(latLng2);

						})
					
                         .addIndicators()
						.addTo(controller__two);

	var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							offset: 1800,
							duration:1400


						})

						.on('start', function (e) {
							console.log('zoom enter');
							test__map<?php print $la;?>.setZoom(5);
							$(".droptwo").show(500);
						})
						.on('leave', function (e) {
							console.log('zoom end');
							test__map<?php print $la;?>.setZoom(4);
							$(".droptwo").hide(500);
						})
                  .addIndicators()
						.addTo(controller__two);
						// map 3


var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							duration: 1400,
							offset:3500

						})
		
						.on('enter', function (e) {
							console.log('map enter');
							test__map<?php print $la;?>.panTo(latLng3);

						})
					
                         .addIndicators()
						.addTo(controller__two);

	var scene__map<?php print $la;?> = new ScrollMagic.Scene({
							triggerElement: ".au__map<?php print $la;?>",
							offset: 3700,
							duration:1400


						})

						.on('start', function (e) {
							console.log('zoom enter');
							test__map<?php print $la;?>.setZoom(5);
							$(".droptree").show(500);
						})
						.on('leave', function (e) {
							console.log('zoom end');
							test__map<?php print $la;?>.setZoom(4);
							$(".droptree").hide(500);
						})
                  .addIndicators()
						.addTo(controller__two);














	}


	   




})








if($(document).width() > 970){
	var latLng1 = new google.maps.LatLng(<?php print $content['field_la_lat']['#items'][0]['value']; ?>, <?php print $content['field_la_lng']['#items'][0]['value']; ?>);
	// 
var latLng2 = new google.maps.LatLng(<?php print $content['field_la_lat2']['#items'][0]['value']; ?>,<?php print $content['field_la_lng2']['#items'][0]['value']; ?>);
var latLng3 = new google.maps.LatLng(<?php print $content['field_la_lat3']['#items'][0]['value']; ?>, <?php print $content['field_la_lng3']['#items'][0]['value']; ?>);

        test__map<?php print $la;?> = new GMaps({
            div: '.au__map<?php print $la;?>',
            // тот же класс что и выше
            lat: <?php print $content['field_la_lat']['#items'][0]['value']; ?>,
	        lng: <?php print $content['field_la_lng']['#items'][0]['value']; ?>,
            scrollwheel: false,
            zoomControl: true,
            zoom:3,
            disableDefaultUI: true,
		
            styles: map__style
        });
		// test__map<?php print $la;?>.panBy(0, 100)
        // 1 marker
        <?php if(isset($content['field_la_lat']) && isset($content['field_la_lng'])): ?>
	        test__map<?php print $la;?>.drawOverlay({
	            // аналогичные координаты что и выше
	            lat: <?php print $content['field_la_lat']['#items'][0]['value']; ?>,
		        lng: <?php print $content['field_la_lng']['#items'][0]['value']; ?>,
	            //   ниже маркер меняем текст h3 и картинку она же иконка 
	            content: '<div class="g__map__marker marker__container<?php print $la;?>"><h3 class="text-uppercase"><?php print $laname; ?></h3><img src="<?php print $laicon; ?>" class="img-fluid" alt="gmap__icon"> </div>'
	        });
	    <?php endif; ?>
        // 2 marker
        <?php if(isset($content['field_la_lat2']) && isset($content['field_la_lng2'])): ?>
	        test__map<?php print $la;?>.drawOverlay({
	            // аналогичные координаты что и выше
	            lat: <?php print $content['field_la_lat2']['#items'][0]['value']; ?>,
		        lng: <?php print $content['field_la_lng2']['#items'][0]['value']; ?>,
	            //   ниже маркер меняем текст h3 и картинку она же иконка 
	            content: '<div class="g__map__marker marker__container<?php print $la;?>"><h3 class="text-uppercase"><?php print $laname2; ?></h3><img src="<?php print $laicon2; ?>" class="img-fluid" alt="gmap__icon"> </div>'
	        });
	    <?php endif; ?>
        // 3 marker
        <?php if(isset($content['field_la_lat3']) && isset($content['field_la_lng3'])): ?>
	        test__map<?php print $la;?>.drawOverlay({
	            // аналогичные координаты что и выше
	            lat: <?php print $content['field_la_lat3']['#items'][0]['value']; ?>,
		        lng: <?php print $content['field_la_lng3']['#items'][0]['value']; ?>,
	            //   ниже маркер меняем текст h3 и картинку она же иконка 
	            content: '<div class="g__map__marker marker__container<?php print $la;?>"><h3 class="text-uppercase"><?php print $laname3; ?></h3><img src="<?php print $laicon3; ?>" class="img-fluid" alt="gmap__icon"> </div>'
	        });
	    <?php endif; ?>}
    </script>
</div>