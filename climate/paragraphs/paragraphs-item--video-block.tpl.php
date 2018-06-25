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
<?php 
$opacityyoutube = "";
$myclass = "";
if($content['field_la_effect_blackout']){
  if($content['field_la_effect_blackout']['#items'][0]['value'] == 1) $opacityyoutube = "lighttube";
}
if($content['field_la_effect_fixed']){
  if($content['field_la_effect_fixed']['#items'][0]['value'] == 1) $myclass = "4has__wipe";
}
if($content['field_la_effect_dimmed']){
  if($content['field_la_effect_dimmed']['#items'][0]['value'] == 1){
    $opacityyoutube = $opacityyoutube . "lighttube" ;
    $myclass = $myclass . " dimmed";
  }
}
if($content['field_la_effect_trasform']){
  if($content['field_la_effect_trasform']['#items'][0]['value'] == 1) $myclass = $myclass . " transform";
}
?>
<link rel="preload" href="<?php print file_create_url($content['field_la_bg_img']['#items'][0]['uri']); ?>" as="image">
<!--id="text__with__bg" == параграф  -->
<div id="ytube__with__bg" class="<?php print $myclass; ?>">

    <section class="quote__video d-flex b-lazy <?php print  $opacityyoutube; ?>" style=" background-image: <?php if(isset($content['field_la_bg_color'])) print $content['field_la_bg_color']['#items'][0]['rgb']; ?> <?php if(isset($content['field_la_bg_img'])): ?> url(<?php print file_create_url($content['field_la_bg_img']['#items'][0]['uri']); ?>)  <?php endif; ?>;" >
    <!--  -->

   
        <div class="container d-flex justify-content-center ">
            <div class="d-flex mobile__video__row flex-row  justify-content-center align-items-center">
                <div class="col-12">
                    <?php if(isset($content['field_la_title'])): ?>
                        <h2 <?php if(!empty($content['field_color_la_title'])): ?> style="color: <?php print $content['field_color_la_title']['#items'][0]['rgb']; ?>" <?php endif; ?>><?php print $content['field_la_title']['#items'][0]['value']; ?></h2>
                    <?php endif; ?>
                    <?php print render($content['field_la_video']); ?>

                    
                      <div class="field field-name-field-la-video-youtube field-type-video-embed-field field-label-hidden">
                        <div class="field-items">
                          <div class="field-item even" style="z-index: 200;">
                            <div class="embedded-video">
                              <div class="player" data-src="path/to/image.jpg">
                              <?php print $content['field_iframe']['#items'][0]['value']; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                </div>
            </div>
        </div>
    </section>
    <script>
$(window).bind("load", function() {
 $('.embedded-video').show();


});




        $(function () {
          $('.embedded-video').click(function(){
            $('.quote__video iframe').css({
                  'pointer-events':'auto'
              })
              console.log('iframe click');
              return false;
          })



            
        });
    </script>
</div>