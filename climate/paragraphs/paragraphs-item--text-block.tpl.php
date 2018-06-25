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

<div id="text__with__bg__image" class="overscroll" <?php if(isset($content['field_la_bg_color'])): ?> style="background: <?php print $content['field_la_bg_color']['#items'][0]['rgb']; ?>" <?php elseif(isset($content['field_la_bg_img'])): ?> style="background: url(<?php print file_create_url($content['field_la_bg_img']['#items'][0]['uri']); ?>) center no-repeat; background-size:cover; ?>" <?php endif; ?>>
    <div class="container">
        <div class="d-flex flex-row align-items-center">
            <?php if(isset($content['field_la_text'])): ?>
                <div class="col">
                    <?php print $content['field_la_text']['#items'][0]['value']; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>