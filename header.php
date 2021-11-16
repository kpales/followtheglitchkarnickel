<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BND
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--    Usable after-->
<!--	<a class="skip-link screen-reader-text" href="#primary"><?php /*esc_html_e( 'Skip to content', 'bnd_orca_theme' ); */ ?></a>-->

<div id="wrapper-header">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center justify-content-lg-end logo p-0">
                <img src="http://localhost/orcamicrosite/wp-content/uploads/2021/01/TITEL_Typo.png" alt="logo">
            </div>
        </div>
    </div>
</div>
</body>
<!-- end of header -->
