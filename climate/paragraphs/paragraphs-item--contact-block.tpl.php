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

<div id="text__contacts">
    <div class="container">
        <div class="entity entity-bean bean-sponser clearfix" style="background: <?php if(isset($content['field_la_bg_color'])){ print $content['field_la_bg_color']['#items'][0]['rgb'];} ?> <?php if(isset($content['field_la_bg_img'])): ?> url(<?php print file_create_url($content['field_la_bg_img']['#items'][0]['uri']); ?>) center no-repeat; background-size:cover <?php endif; ?>;">
            <div class="content">
                <?php if(isset($content['field_la_title'])): ?>
                    <h2 class="bean-title"><?php print $content['field_la_title']['#items'][0]['value']; ?></h2>
                <?php endif; ?>
                <?php if(isset($content['field_la_contact_name'])): ?>
                    <div class="field field-name-field-sponsor-details field-type-text field-label-hidden">
                        <div class="field-items">
                            <div class="field-item even"><?php print $content['field_la_contact_name']['#items'][0]['value']; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($content['field_la_contact_telephone'])): ?>
                    <div class="field field-name-field-sponsor-phone-number field-type-text field-label-hidden ti-mobile">
                        <div class="field-items">
                            <div class="field-item even"><?php print $content['field_la_contact_telephone']['#items'][0]['value']; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($content['field_la_contact_email'])): ?>
                    <div class="field field-name-field-sponsor-email field-type-email field-label-hidden ti-email">
                        <div class="field-items">
                            <div class="field-item even"><a href="mailto:<?php print $content['field_la_contact_email']['#items'][0]['value']; ?>"><?php print $content['field_la_contact_email']['#items'][0]['value']; ?></a></div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>