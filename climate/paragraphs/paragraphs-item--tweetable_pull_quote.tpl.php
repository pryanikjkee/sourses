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
<?php //dsm($content); ?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>

    <div class="tweet">
      <div class='tweet-content'>
        <?php print render($content['field_paragraph_quote'][0]) ;?>

        <div class="tweet-details">
          <div class="source">
            <?php print render($content['field_paragraph_quote_sorce'][0]) ;?>
          </div>
          <div class="tweet-call">
            <a href="<?php print $tweet_link ?>" title="Tweet this" target="_blank" class="">Tweet <span class="ti-twitter-alt"></span></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
