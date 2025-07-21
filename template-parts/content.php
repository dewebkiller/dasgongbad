<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Das_Gongbad
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				das_gongbad_posted_on();
				das_gongbad_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

   
	<?php 

	if(get_post_type(get_the_id()) === 'post'){
		$dispaly_featured_image =   get_post_meta(get_the_id(), 'field_id', true);

		if($dispaly_featured_image !== 'off'){
			das_gongbad_post_thumbnail();
		}

	
	}else{
		das_gongbad_post_thumbnail();
	}
	?>

        <div class="entry-content">
            <?php

            global $numpages;
            if (is_archive() || is_home()):
                if($numpages>1 && $post_format != 'gallery'){
                    the_content(sprintf( wp_kses( __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'maicha-blog'), array( 'span' => array( 'class' => array(), ),)),get_the_title()));
                }
                else{
                    echo wp_kses_post(das_get_excerpt($post->ID, 400));
                }
            else:
                the_content(sprintf(wp_kses(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'maicha-blog'),array('span' => array('class' => array(),),)),get_the_title()));
            endif;
            if(is_single()) {
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'maicha-blog'),
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ));
            }
            ?>
        </div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php das_gongbad_entry_footer(); ?>
		  <?php
		if ( is_singular() ) :
        echo do_shortcode( '[wpusb]' );
endif; ?>
	</footer><!-- .entry-footer -->
	         
</article><!-- #post-<?php the_ID(); ?> -->
