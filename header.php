<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<div class="container">

<div class="row">
<nav class="navbar navbar-dark bg-dark w-100">
    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
    <div class="search-bar">
        <form id="search-form" class="search" method="get" action="<?php echo esc_url( home_url() ); ?>" role="search" autocomplete="off">
            <input type="text" name="s" class="search-input" placeholder="<?php esc_attr_e( 'To search, type and hit enter.', 'githuber' ); ?>">
            <span class="search-icon" onclick="document.getElementById('search-form').submit();"><i class="fas fa-search"></i></span>
        </form>
    </div>
</nav>

</div>



<div class="row">
    <div class="section-intro w-100">
    </div>
</div>
