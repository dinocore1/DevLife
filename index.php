<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php get_template_part( 'loop' ); ?>
    </div>
    <div class="row justify-content-md-center">
        <?php get_template_part( 'pagination' ); ?>
    </div>
</div>


<?php get_footer(); ?>