<div class="card-columns w-100">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



            <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                    <h3 class="card-title"><a href="<?php the_permalink(); ?>" rel="bookmark"
                            title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <div class="card-text"><small><?php the_time('F jS, Y'); ?></small></div>
                    <div class="card-text">
                        <?php the_excerpt(); ?>
                    </div>
                    <p class="read-more font-italic"><a href="<?php the_permalink(); ?>">Read More</a></p>
                </div>
            </div>



            <?php endwhile; endif; ?>

        </div>