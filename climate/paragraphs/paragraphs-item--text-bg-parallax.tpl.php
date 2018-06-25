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
$opacitybgparalax = "";
$myclass = "";
if($content['field_la_effect_blackout']['#items'][0]['value'] == 1) $opacitybgparalax = " lightparalax";
if($content['field_la_effect_dimmed']['#items'][0]['value'] == 1){
    $opacitybgparalax = $opacitybgparalax . " lightparalax";
    $myclass = $myclass . " dimmed";
}
if($content['field_la_effect_trasform']['#items'][0]['value'] == 1) $myclass = $myclass . " transform";
?>

<div id="text__with__img" class="<?php print $myclass; ?> <?php print $opacitybgparalax; ?>" <?php if(isset($content['field_la_bg_color'])): ?> style="background: <?php print $content['field_la_bg_color']['#items'][0]['rgb']; ?>" <?php endif; ?>>
    
        <section class="text__img" style="background: url(<?php print file_create_url($content['field_la_bg_img']['#items'][0]['uri']); ?>) ; ?>">
        <?php if(isset($content['field_la_bg_video'])): ?>
        <div class="hasvideo">
            <video muted playsinline id="bgvidhead2" loop>
                <source src="<?php print file_create_url($content['field_la_bg_video']['#items'][0]['uri']); ?>" type="<?php print $content['field_la_bg_video']['#items'][0]['filemime']; ?>">
            </video>
            <script>
                setTimeout(function () {
                    document.getElementById('bgvidhead2').play();
                }, 1000);
            </script>
        </div>
    <?php endif; ?>
    
    </section>
    
   
    <section class="text__text">
        <?php if(isset($content['field_la_title'])): ?>
            <div class="container-fluid inner__text justify-content-center  d-flex align-items-center">
                <div class="d-flex flex-row  justify-content-center align-items-center">
                <div class="container-fluid">
                    <div class="col-12 text__underline">
                        <h1 class="text-uppercase text-center"><?php print $content['field_la_title']['#items'][0]['value']; ?></h1>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if(isset($content['field_la_text'])): ?>
            <?php foreach ($content['field_la_text']['#items'] as $key => $value): ?>
                <div class="container-fluid text__box">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 ">
                                <?php print $value['value']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>       
    </section>
    <script>
        $(function () {
           
        })
    </script>
</div>