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
$opacity = 1;
$opacityvideobg = "";
$classcrop = "";
if($content['field_la_effect_blackout']['#items'][0]['value'] == 1) $opacityvideobg = 'lightdimmed';
$myclass = "";
if($content['field_la_effect_fixed']['#items'][0]['value'] == 1) $myclass = "2has__wipe";
if($content['field_la_effect_dimmed']['#items'][0]['value'] == 1){
    $opacityvideobg = $opacityvideobg . " lightdimmed";
    $myclass = $myclass . " dimmed";
}
if($content['field_crop_video']['#items'][0]['value'] == 0){
    if(isset($content['field_la_bg_video']))
    {
        $classcrop = "crop__video";
    }
}

?>

<div id="full__bg__video" class="<?php print $myclass; ?>  <?php print  $opacityvideobg; ?>  bg__vid__switch " <?php if(isset($content['field_la_bg_img'])): ?> style="background: url(<?php print file_create_url($content['field_la_bg_img']['#items'][0]['uri']); ?>) center no-repeat; background-size:cover; height:100vh!important; ?>" <?php endif; ?>>
    <div class="hasvideo opacity__dimmed">
        <?php if(isset($content['field_la_bg_video'])): ?>
            <video autoplay muted loop playsinline id="bgvidsecond" class="promise__play mobile__video__ratio b-lazy <?php print  $classcrop; ?>" loop preload="metadata" >
                <source src="<?php print file_create_url($content['field_la_bg_video']['#items'][0]['uri']); ?>#t=0.1" type="<?php print $content['field_la_bg_video']['#items'][0]['filemime']; ?>">
                Your browser doesn't support HTML5 video.
            </video>
        <?php endif; ?>
      
    </div>
   <script>
    
   
		
   
   </script>
   
</div>
