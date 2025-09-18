<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Das_Gongbad
 */

get_header();
?>
    <div class="section-content section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            <?php
                            while (have_posts()) :
                                the_post();

                                get_template_part('template-parts/content', get_post_type());

                                the_post_navigation();

                                // If comments are open or we have at least one comment, load up the comment template.
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.
                            ?>

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div>

        </div>
    </div>
    </div>
    
               <div class="bottom-cta">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <h2>To be informed of future gong baths, free gong bath meditation recordings</h2>

                        </div>
                        <div class="col-md-3">
                            <a href="javascript:Boxzilla.show(2397);" class="btn btn-primary btn-white">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
<?php
get_footer();
