<?php
/**
 * Created by PhpStorm.
 * User: Emigma
 * Date: 23/03/2018
 * Time: 18:18
 */
get_header();


?>
    <div class="wrapper" id="page-wrapper">

        <div id="content" tabindex="-1">



            <main class="site-main" id="main">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
                <div class="clear"></div> <!--Required due to KC-->
            </main><!-- #main -->


            <section class="py-5 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 mx-auto text-center">
                            <h2><?php _e('Spam-less mailing list', 'emigma'); ?></h2>
                            <p><?php _e('Cake gummies dragée lollipop sugar plum chocolate bar soufflé chocolate caramels.', 'emigma'); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 mx-auto">
                            <?php get_template_part('global-templates/newsletter', 'form'); ?>
                        </div>
                    </div>
                </div>
            </section>



        </div> <!-- .row -->

    </div><!-- Container end -->




<?php get_footer(); ?>
