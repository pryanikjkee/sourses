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
<pre><?php // print_r($content); ?></pre>
<?php $type = $content['field_la_imagine_pos']['#items'][0]['value']; ?>
<div id="text__with__bg__image" class="overscroll" <?php if(isset($content['field_la_bg_color'])): ?> style="background: <?php print $content['field_la_bg_color']['#items'][0]['rgb']; ?>" <?php elseif(isset($content['field_la_bg_img'])): ?> style="background-image: url(<?php print file_create_url($content['field_la_bg_img']['#items'][0]['uri']); ?>); ?>" <?php endif; ?>>

    <?php if(isset($content['field_la_bg_video'])): ?>
        <section class="bg__fixed">
            <div class="hasvideo">
                <video muted playsinline id="bgvidhead" loop>
                    <source src="<?php print file_create_url($content['field_la_bg_video']['#items'][0]['uri']); ?>" type="<?php print $content['field_la_bg_video']['#items'][0]['filemime']; ?>">
                </video>
                <script>
                    setTimeout(function () {
                        document.getElementById('bgvidhead').play();
                    }, 1000);
                </script>
            </div>
        </section>
    <?php endif; ?>

    <div class="container">
        <div class="d-flex flex-lg-row flex-column align-items-center">
            <?php if($type == 0): ?>
                <?php if(isset($content['field_la_text'])): ?>
                    <div class="col-lg-6  col-12">
                        <?php print $content['field_la_text']['#items'][0]['value']; ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($content['field_la_image'])): ?>
                    <div class="col-lg-6 order-lg-1 order-2 col-12">
                        <img src="<?php print file_create_url($content['field_la_image']['#items'][0]['uri']); ?>" alt="" class="img-fluid text__img__item">
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <?php if(isset($content['field_la_image'])): ?>
                    <div class="col-lg-6 order-lg-1 order-2 col-12">
                        <img src="<?php print file_create_url($content['field_la_image']['#items'][0]['uri']); ?>" alt="" class="img-fluid text__img__item">
                    </div>
                <?php endif; ?>
                <?php if(isset($content['field_la_text'])): ?>
                    <div class="col-lg-6 col-12">
                        <?php print $content['field_la_text']['#items'][0]['value']; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>