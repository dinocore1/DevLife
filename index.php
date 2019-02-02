<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php get_template_part( 'loop' ); ?>
    </div>
    <div class="row">
        <div class="container">
        <?php get_template_part( 'pagination' ); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>