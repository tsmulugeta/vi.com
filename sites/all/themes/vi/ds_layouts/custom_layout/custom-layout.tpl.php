<?php
/**
 * @file
 * Display Suite Custom Layout template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $left: Rendered content for the "Left" region.
 * - $left_classes: String of classes that can be used to style the "Left" region.
 * - $left_wrapper: wrapper surrounding the left region.
 *
 * - $right: Rendered content for the "Right" region.
 * - $right_classes: String of classes that can be used to style the "Right" region.
 * - $right_wrapper: wrapper surrounding the right region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <!-- regions -->

	  <<?php print $header_wrapper ?> class="ds-header<?php print $header_classes; ?>">
	    <?php print $header; ?>
	  </<?php print $header_wrapper ?>>
	  
	  <<?php print $left_wrapper ?> class="ds-left<?php print $left_classes; ?>">
	    <?php print $left; ?>
	  </<?php print $left_wrapper ?>>
	
	  <<?php print $right_wrapper ?> class="ds-right<?php print $right_classes; ?>">
	    <?php print $right; ?>
	  </<?php print $right_wrapper ?>>

	  <<?php print $copy_wrapper ?> class="ds-copy<?php print $copy_classes; ?>">
	    <?php print $copy; ?>
	  </<?php print $copy_wrapper ?>>
	  
	  <<?php print $copy1_wrapper ?> class="ds-copy1<?php print $copy1_classes; ?>">
	    <?php print $copy1; ?>
	  </<?php print $copy1_wrapper ?>>
	  
	  <<?php print $copy2_wrapper ?> class="ds-copy2<?php print $copy2_classes; ?>">
	    <?php print $copy2; ?>
	  </<?php print $copy2_wrapper ?>>
	
	  <<?php print $copy3_wrapper ?> class="ds-copy3<?php print $copy3_classes; ?>">
	    <?php print $copy3; ?>
	  </<?php print $copy3_wrapper ?>>
	  
	  <<?php print $pod1_wrapper ?> class="ds-pod1<?php print $pod1_classes; ?>">
	    <?php print $pod1; ?>
	  </<?php print $pod1_wrapper ?>>
	
	  <<?php print $pod2_wrapper ?> class="ds-pod2<?php print $pod2_classes; ?>">
	    <?php print $pod2; ?>
	  </<?php print $pod2_wrapper ?>>
	
	  <<?php print $pod3_wrapper ?> class="ds-pod3<?php print $pod3_classes; ?>">
	    <?php print $pod3; ?>
	  </<?php print $pod3_wrapper ?>>  
	  <!-- These comments are required for the Drush command. You can remove them in your own copy -->
	  <!-- /regions -->

	  <?php print render($content['disqus']); ?> 

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
