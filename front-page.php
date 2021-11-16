<?php
/**
 * Created by PhpStorm.
 * User: starter
 * Date: 23/03/2018
 * Time: 18:18
 */
get_header();


?>


    <div class="site-main" id="main">


        <div class="container">
            <div class="row">
                <div class="col-12 header-video p-0">
                    <video width="100%" height="100%" autoplay>
                        <source src="http://localhost/orcamicrosite/wp-content/uploads/2021/01/loading_bar.mp4"
                                type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="row mt-2">
                <?php $posts = new WP_Query(array('post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'ASC')); ?>
                <?php while ($posts->have_posts()): $posts->the_post(); ?>
                    <div class="col-12 col-lg-6 mb-3 tiles d-flex"
                         style="background: url('<?php the_post_thumbnail_url(); ?>');background-size: cover; background-repeat:no-repeat; 50% 50%">
                        <div class="tiles-text">
                            <h1><?php the_title(); ?></h1>
                            <h2><?php the_field('subtitle'); ?></h2>
                        </div>

                    </div>
                <?php endwhile;
                /* Restore original Post Data */
                wp_reset_postdata(); ?>
            </div>
            <div class="row">
                <div class="col-12 rabbithole p-0 mb-5">
                    <div class="rabbithole-text">
                        <p><?php the_field('rabbithole'); ?></p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 rabbithole-subtitle p-0 d-flex align-items-center">
                    <div class="subbtitle">
                        <p><?php the_field('rabbithole_subtitle'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12  header-video p-0 mt-0">
                    <video width="100%" height="100%" autoplay>
                        <source src="http://localhost/orcamicrosite/wp-content/uploads/2021/01/Airport-36510.mp4"
                                type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <?php $interview = new WP_Query(array(
                'post_type' => 'post',
            ));
            ?>
            <div class="featured-post mb-5">
                <div class="row">
                    <div class="col-12 interview">
                        <?php while ($interview->have_posts()):
                        $interview->the_post(); ?>
                        <?php if (get_field('is_featured') == true): ?>
                        <div class="interview-header">
                            <p><?php the_field('featured_title'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 interview interview-mobile-position">
                        <div class="interview-text">
                            <p><?php the_field('featured_text_left'); ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 interview">
                        <div class="interview-text">
                            <p><?php the_field('featured_text_right'); ?></p>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>

            <div class="row jobs p-0 py-3" id="jobs-header">
                <div class="col d-flex flex-row">
                    <i class="fas fa-angle-double-down mx-3 d-none" id="jobs-down"></i>
                    <i class="fas fa-angle-double-right mx-3 d-flex" id="jobs-right"></i>
                    <span>Ab in den digitalen Kaninchenbau!<br> Aktuelle Cyber-Jobs im BND</span>
                </div>
            </div>
            <?php
            $jobs = new WP_Query(array(
                'post_type' => 'jobs',
                'orderby' => 'date',
                'order' => 'ASC'
            ));
            ?>
            <div class="row" id="jobs">
                <?php while ($jobs->have_posts()) : $jobs->the_post(); ?>
                    <div class="col-6 d-flex job-details"
                         style="background: url('<?php the_post_thumbnail_url(); ?>'); height: 560px; background-size: cover;">
                        <div class="job-description d-flex flex-column">
                            <p class="job-header mb-1"><strong><?php the_field('job_heading'); ?></strong><br>
                                <?php the_field('job_detail_text'); ?></p>
                            <span> <?php the_field('job_genres'); ?></span>
                            <div class="job-middle d-flex mt-auto flex-column">
                                <p><?php the_field('job_categories'); ?></p>
                                <span class="job-button mt-5"> > Go! </span>
                            </div>
                        </div>

                    </div>
                <?php endwhile; ?>
            </div>

            <div class="row downloads mb-3" id="download-heading">
                <div class="col d-flex">
                    <i class="fas fa-angle-double-down mx-3 d-none" id="downloads-down"></i>
                    <i class="fas fa-angle-double-right mx-3 d-flex" id="downloads-right"></i>
                    <span><strong>Anatomie eines Karnickels:</strong><br> Mediathek und Downloadbereich</span>
                </div>
            </div>

                     <?php if( have_rows('downloads', 2) ): ?>
            <div class="row downlad-files mb-3" id="download-show-hide">
                <?php while (have_rows('downloads',2)) : the_row(); ?>
                <div class="download-tiles" style="background: url('<?php the_sub_field('bg_image');?>') 50% 50%; background-size: cover;padding: 10px 0 200px 10px;">
            <?php $filename = get_sub_field('file_upload')['title']; ?>
            <?php $filesize = get_sub_field('file_upload')['filesize']; ?>
            <?php $file_fullname = get_sub_field('file_upload')['filename']; ?>
            <?php $filewidth = get_sub_field('file_upload')['width']; ?>
            <?php $fileheight = get_sub_field('file_upload')['height']; ?>
            <div class="d-flex flex-column download-details">
                <span><?php echo $filename ?></span>
               <span> <?php echo $filewidth . 'x' . $fileheight?></span>
               <span> <?php echo '(' . $file_fullname . ')' ?></span>
            </div>

            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

            <div class="row">
                <div class="col-12 interess">
                    <p><strong>Dein Interesse hat dich weit gebracht:</strong><br> Klick hier, informier dich und bewirb dich jetzt.</p>
                </div>
            </div>
    </div>


<?php get_footer();

