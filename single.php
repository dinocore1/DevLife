<?php get_header(); ?>



<div class="row page-content border border-dark rounded">
    
        <?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
			
			
			// End the loop.
		endwhile;
        ?>


</div>


<?php get_footer(); ?>