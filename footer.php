<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dasgongbad
 */

?>


<footer class="site-footer">
   <div class="container">
      <div class="row">
          <div class="col-md-5">

          	 <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
          </div>

          <div class="col-md-3">

          	 <?php 

             if(pll_current_language() == 'en'){
             dynamic_sidebar( 'second-footer-widget-area' );
           }
           else{
              dynamic_sidebar( 'second-footer-widget-area-germany' );
             }
              ?>
          
          </div>

          <div class="col-md-4">
          	 <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
          </div>
      </div>
  </div>
<div>
  <a id="back-to-top" class="show">
    <i class="fa fa-angle-up"></i>
  </a>
</div>
</footer>
</div><!-- #content -->
</div><!-- #page -->




<?php wp_footer(); ?>

</body>
</html>
