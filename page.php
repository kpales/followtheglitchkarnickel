<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BND
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col-12 header-video">
                    <video width="100%" height="100%" autoplay>
                        <source src="http://localhost/orcamicrosite/wp-content/uploads/2021/01/loading_bar.mp4"type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-12 tiles d-flex flex-wrap p-0">
                <?php $posts = new WP_Query(array('post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'ASC')); ?>
                <?php while ($posts->have_posts()): $posts->the_post();?>
                    <div class="col-6 p-0 mb-3 tiles" style="background: url('<?php the_post_thumbnail_url();?>')">
                        <p>Testing the text inside the col</p>
                    </div>
                <?php endwhile;
                /* Restore original Post Data */
                wp_reset_postdata();?>
            </div>
        </div>


	</main><!-- #main -->

<?php
get_footer();
