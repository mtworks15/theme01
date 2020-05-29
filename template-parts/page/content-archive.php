<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    
    <div class="card mb-5">
        <div class="card-body d-flex justify-content-center">
            <?php if ( has_post_thumbnail() ): ?>
                <img src="<?php the_post_thumbnail_url('img-sm'); ?>" alt="<?php the_title(); ?>" class="img-fluid mr-4">
            <?php endif; ?>
            <div class="post-content">
                <div class="card-title"><h5><?php the_title(); ?></h5></div>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm">Read More</a>
            </div>
        </div>
    </div>

<?php endwhile; else: endif; ?>