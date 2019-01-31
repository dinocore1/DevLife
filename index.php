<?php get_header(); ?>

<div class="container">
<div class="row">
<div class="card-columns">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="card text-white bg-dark mb-3">
    <div class="card-body">
        <h2 class="card-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="card-text"><small><?php the_time('F jS, Y'); ?></small></div>
        <div class="card-text">
            <?php the_content(); ?>
        </div>
        <p class="read-more font-italic"><a href="<?php the_permalink(); ?>">Read More</a></p>
    </div>
</div>



<?php endwhile; endif; ?>

</div>

</div>
</div>


<?php get_footer(); ?>