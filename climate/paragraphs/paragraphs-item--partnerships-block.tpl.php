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
<?php if(isset($content['field_la_partners'])): ?>
<div id="partners__block"  <?php if(isset($content['field_la_bg_color'])): ?> style="background: <?php print $content['field_la_bg_color']['#items'][0]['rgb']; ?>" <?php elseif(isset($content['field_la_bg_img'])): ?> style="background: url(<?php print file_create_url($content['field_la_bg_img']['#items'][0]['uri']); ?>) center no-repeat; background-size:cover; ?>" <?php endif; ?>>
    <div class="container">
    	<div class="view view-partnerships-listing">
    		<div class="view-content">
    			<div class="views-responsive-grid views-responsive-grid-horizontal views-columns-2">
    				<div class="views-row">
    					<?php foreach ($content['field_la_partners']['#items'] as $key => $value): ?>
	    					<div class="views-column">
	    						<?php
	    							$node = node_load($value['target_id']);
									$node_view = node_view($node, 'teaser');
									print render($node_view); ?>
	    					</div>
	    				<?php endforeach; ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<?php endif; ?>