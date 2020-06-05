<div class="row card-row">
<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 mb-5">
        <div class="card">
            <?php if ( has_post_thumbnail() ): ?>
                <img class="card-img-top" src="<?php the_post_thumbnail_url('img-xs-square'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="card-body text-center">
                <div class="card-title"><h5><?php the_title(); ?></h5></div>
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm">Buy Now</a>
            </div>
        </div>
    </div>
    
<?php endwhile; else: endif; ?>
</div>