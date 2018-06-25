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
$opacitypull = "";
$myclass = "";
$tweet_link = "";
if($content['field_la_effect_blackout']['#items'][0]['value'] == 1) $opacitypull = "lightdimmed";
if($content['field_la_effect_fixed']['#items'][0]['value'] == 1) $myclass = "3has__wipe";
if($content['field_la_effect_dimmed']['#items'][0]['value'] == 1){
    $opacitypull = $opacitypull . " lightdimmed";
    $myclass = $myclass . " dimmed";
}
if($content['field_la_effect_trasform']['#items'][0]['value'] == 1) $myclass = $myclass . " transform";
?>

<div id="pull__quote__content" class="<?php print $myclass; ?> <?php print  $opacitypull; ?> pull__paralax" <?php if(isset($content['field_la_bg_color'])): ?> style="background: <?php print $content['field_la_bg_color']['#items'][0]['rgb']; ?>" <?php endif; ?>>

    <section class="quote">
        <div class="container" id="mobile__no__gutters">
            <div class="row">
                <div class="col-12 quote__block">
               
                    <?php if(isset($content['field_la_text'])): ?>
                        <h2 class="text-uppercase">
                            <?php print strip_tags($content['field_la_text']['#items'][0]['value']); ?>
                            <?php $tweet_link0 = strip_tags($content['field_la_text']['#items'][0]['value']); ?>
                        </h2>
                    <?php endif; ?>
                    <?php if(isset($content['field_la_author'])): ?>
                        <p>#<?php print $content['field_la_author']['#items'][0]['value']; ?></p>
                    <?php endif; ?>

                    <div class="tweet-call text-right">
                        <?php 
                            $tweet_link0 = 'http://twitter.com/share?text='.$tweet_link0.'&url='.$GLOBALS['base_root'].'/'.drupal_get_path_alias();
                        ?>
                        <a href="<?php print $tweet_link0 ?>" title="Tweet this" target="_blank" class="">Tweet <span class="ti-twitter-alt"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
     
          
    </script>
</div>