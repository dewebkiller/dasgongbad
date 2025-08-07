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
          <div class="col-md-3 footer-widget-1">

          	 <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
          </div>

          <div class="col-md-3 footer-widget-2">

          	 <?php 

             if(pll_current_language() == 'en'){
             dynamic_sidebar( 'second-footer-widget-area' );
           }
           else{
              dynamic_sidebar( 'second-footer-widget-area-germany' );
             }
              ?>
          
          </div>

          <div class="col-md-3 footer-widget-3">
          	 <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
          </div>
          <div class="col-md-3 text-right footer-widget-4">
          	 <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
          </div>
      </div>
  </div>
  <div class="container cpm-btm-footer">
      <div class="row">
          <div class="col-md-12 text-center">
&copy; <?php echo date('Y');?>. All Rights Reserved. <?php echo get_bloginfo('name');?>
          </div>

          <!-- <div class="col-md-4">
          <div id="language_menu" class="secondary-menu">


                            <?php
                            // wp_nav_menu(array(
                            //     'menu'            => 'secondary',
                            //     'theme_location'  => 'menu-2',
                            //     //'container'       => 'ul',
                            //     'menu_id'         => false,
                            //     'depth'           => 0,

                            // ));
                            ?>
                        </div>
          </div> -->
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
