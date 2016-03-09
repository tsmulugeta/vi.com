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

  	<!-- slide show -->
   	<<?php print $section8_wrapper; ?> id="ds-section8" class="ds-section ds-section8<?php print $section8_classes; ?> clearfix">
  		<?php print $section8; ?>
  	</<?php print $section8_wrapper; ?>>
  	<!-- end slide show  -->
  
    <<?php print $section1_wrapper; ?> id="ds-section1" class="ds-section ds-section1<?php print $section1_classes; ?> clearfix">
    	<div class="container-12">
      		<div class="grid-12 remove-pad">
      			<?php print $section1; ?>
      		</div>
      	</div> 
    </<?php print $section1_wrapper; ?>>

    <<?php print $section2_wrapper; ?> id="ds-section2" class="ds-section ds-section2<?php print $section2_classes; ?> clearfix">
     	<div class="container-12">
       		<div class="grid-12 remove-pad">
      			<?php print $section2; ?>
      	</div>
      </div>
    </<?php print $section2_wrapper; ?>>

    <<?php print $section3_wrapper; ?> id="ds-section3" class="ds-section ds-section3<?php print $section3_classes; ?> clearfix">
    	<div class="container-12">
       		<div class="grid-12 remove-pad">
      			<?php print $section3; ?>
      		</div>
      	</div>
    </<?php print $section3_wrapper; ?>>

    <<?php print $section4_wrapper; ?> id="ds-section4" class="ds-section ds-section4<?php print $section4_classes; ?> clearfix">
    	<div class="container-12">
       		<div class="grid-12 remove-pad">
	      		<?php print $section4; ?>
	      	</div>
      	</div>
    </<?php print $section4_wrapper; ?>>

    <<?php print $section5_wrapper; ?> id="ds-section5" class="ds-section ds-section5<?php print $section5_classes; ?> clearfix">
      	<div class="container-12">
       		<div class="grid-12 remove-pad">
	      		<?php print $section5; ?>
	      	</div>
      	</div>
    </<?php print $section5_wrapper; ?>>
    
    <<?php print $section6_wrapper; ?> id="ds-section6" class="ds-section ds-section6<?php print $section6_classes; ?> clearfix">
    	<div class="container-12">
       		<div class="grid-12 remove-pad">
	      		<?php print $section6; ?>
	      	</div>
      	</div>
    </<?php print $section6_wrapper; ?>>
    
   	<<?php print $section7_wrapper; ?> id="ds-section7" class="ds-section ds-section7<?php print $section7_classes; ?> clearfix">
     	<div class="container-12">
      		<div class="grid-12 remove-pad">
      			<?php print $section7; ?>
      		</div>
      	</div> 
    </<?php print $section7_wrapper; ?>>
    

   	<<?php print $section9_wrapper; ?> id="ds-section9" class="ds-section ds-section9<?php print $section9_classes; ?> clearfix">
    	<div class="container-12">
      		<div class="grid-12 remove-pad">
        		<?php print $section9; ?>
        	</div>
      	</div> 
    </<?php print $section9_wrapper; ?>>

   	<<?php print $section10_wrapper; ?> id="ds-section10" class="ds-section ds-section10<?php print $section10_classes; ?> clearfix">
     	<div class="container-12">
      		<div class="grid-12 remove-pad">
        		<?php print $section10; ?>
        	</div>
      	</div> 
    </<?php print $section10_wrapper; ?>>

    <<?php print $section11_wrapper; ?> id="ds-section11" class="ds-section ds-section11<?php print $section11_classes; ?> clearfix">
      	<div class="container-12">
      		<div class="grid-12 remove-pad">
        		<?php print $section11; ?>
        	</div>
      	</div> 
    </<?php print $section11_wrapper; ?>>   

   	<<?php print $section12_wrapper; ?> id="ds-section12" class="ds-section ds-section12<?php print $section11_classes; ?> clearfix">
     	<div class="container-12">
      		<div class="grid-12 remove-pad">
        		<?php print $section12; ?>
        	</div>
      	</div> 
    </<?php print $section12_wrapper; ?>>  

    <?php if($section13) { ?>
    <<?php print $section13_wrapper; ?> id="ds-section13" class="ds-section ds-section13<?php print $section13_classes; ?> clearfix">
      <div class="container-12">
          <div id="reviews" class="grid-12 alpha omega">
            <div class="grid-2 alpha hidden-phone">&nbsp;</div>
            <div class="grid-8 add-top">
              <h2 class="inline-block white-text">Product Reviews</h2>
              <?php print $section13; ?>
            </div>
            <div class="grid-2 omega hidden-phone">&nbsp;</div>
          </div>
        </div> 
    </<?php print $section13_wrapper; ?>> 
    <?php } ?> 

    

</<?php print $layout_wrapper ?>>

<!-- ViNet Modal -->
<div class="modal hide fade" id="vinetModal" tabindex="-1">
     <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">x</button>
          <h2 id="myModalLabel">Login to Vi Net</h2>
     </div>

     <div class="modal-body">
          <form id="vinet-login-form" action="https://myvi.net/login/index.html?CommunityURL=%2Foffice%2Findex.html&amp;Ref=&amp;Type=&amp;Username=Username&amp;Password=Password" method="post">
            <input name="Username" type="text" placeholder="Username" />
            <input name="Password" type="password" placeholder="Password" />
            <table>
              <tr>
                <td><button class="btn-green" type="submit">login</button></td>
                <td class="more-info">Need More Info? 877-847-2587</td>
              </tr>
            </table>
          </form>   
     </div>
</div>
<!-- ViNet Modal -->

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

<script>
$('#zone-content').removeClass('container-12');
$('#region-content').removeClass('grid-12');
</script>
