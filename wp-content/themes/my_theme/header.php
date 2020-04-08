<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri()?>/dist/css/app.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-page="<?=get_post_field( 'post_name' );?>">
<?php ?>
<!--    --><?php //get_template_part('template-parts/mobile-menu')?>
    <header class="header <?=(get_post_field( 'post_name' ) != 'home') ? 'header--state2' : ''?>">
    </header>
