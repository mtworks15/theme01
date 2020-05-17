<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    
    <div class="card mb-5">
        <div class="card-body">
            <div class="card-title"><h5><?php the_title(); ?></h5></div>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm">Read More</a>
        </div>
    </div>

<?php endwhile; else: endif; ?>