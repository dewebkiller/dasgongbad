<?php
/**
 *
 * Template Name: Blog page
 *
 *
 **/
get_header(); 
$args = array(
  'post_type'=>'post',
  'posts_per_page'=> -1,
  'order'=> 'DESC',
  'post_status' => 'publish',
);
$blog_content = new WP_Query($args);
if($blog_content->have_posts()) : ?>


  <div class="section-stories">
<div class="section-stories-title">
<h2><?php echo pll_e('Explorations in gongs, music, and sound meditation');?></h2>
</div>
    <?php
    while($blog_content->have_posts()) : 
     $blog_content->the_post();?>
     <div class="stories-wrap">
      <?php if(has_post_thumbnail()): ?>
        <div class="story-img">
         <?php the_post_thumbnail('custom-size'); ?>
       </div>
     <?php endif; ?>
     <div class="story-desc">
      <?php if(get_the_title()): ?>
        <h2><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></h2>
      <?php endif; ?>
      <?php if(get_the_permalink()): ?>
        <a href="<?php echo esc_url(get_the_permalink()); ?>" class="read-story"><?php echo pll_e( 'Read Story' ); ?></a>
      <?php endif; ?>
    </div>
  </div>
<?php endwhile; 
wp_reset_postdata();
?>


</div>
<?php endif; ?>
<?php the_content(); ?>
<?php get_footer(); ?>
