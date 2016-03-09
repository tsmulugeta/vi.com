<?php
/**
 * @file
 * Display Suite Basic Layout template.
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
 * - $section1: Rendered content for the "Section1" region.
 * - $section1_classes: String of classes that can be used to style the "Section1" region.
 *
 * - $section2: Rendered content for the "Section2" region.
 * - $section2_classes: String of classes that can be used to style the "Section2" region.
 *
 * - $section3: Rendered content for the "Section3" region.
 * - $section3_classes: String of classes that can be used to style the "Section3" region.
 *
 * - $section4: Rendered content for the "Section4" region.
 * - $section4_classes: String of classes that can be used to style the "Section4" region.
 *
 * - $section5: Rendered content for the "Section5" region.
 * - $section5_classes: String of classes that can be used to style the "Section5" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $section1_wrapper; ?> class="ds-section1<?php print $section1_classes; ?> clearfix">
      <div class="container-12">
      	<?php print $section1; ?>
      </div> 
    </<?php print $section1_wrapper; ?>>

    <<?php print $section2_wrapper; ?> class="ds-section2<?php print $section2_classes; ?> clearfix">
      <div class="container-12">
      	<?php print $section2; ?>
      </div>
    </<?php print $section2_wrapper; ?>>

    <<?php print $section3_wrapper; ?> class="ds-section3<?php print $section3_classes; ?> clearfix">
      <div class="container-12">
      	<?php print $section3; ?>
      </div>
    </<?php print $section3_wrapper; ?>>

    <<?php print $section4_wrapper; ?> class="ds-section4<?php print $section4_classes; ?> clearfix">
      <div class="container-12">
	      <?php print $section4; ?>
      </div>
    </<?php print $section4_wrapper; ?>>

    <<?php print $section5_wrapper; ?> class="ds-section5<?php print $section5_classes; ?> clearfix">
      <div class="container-12">
	      <?php print $section5; ?>
      </div>
    </<?php print $section5_wrapper; ?>>
    
     <<?php print $section6_wrapper; ?> class="ds-section6<?php print $section6_classes; ?> clearfix">
      <div class="container-12">
	      <?php print $section6; ?>
      </div>
    </<?php print $section6_wrapper; ?>>
    

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

<script>
$('#zone-content').removeClass('container-12');
$('#region-content').removeClass('grid-12');
</script>
