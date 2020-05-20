<?php

    if ( is_category( 'blog' ) ) {
        $gridSetup = 'col-xl-4 col-lg-4 col-md-4 col-sm-6';
        $postsPerPage = set_posts_per_page('blog', 5);
        $excerptLength = 55;
    } else if ( is_category( 'skin-care' ) ) {
        $gridSetup = 'col-xl-6 col-lg-6 col-md-6 col-sm-6';
        $postsPerPage = set_posts_per_page('skin-care', 2);
        $excerptLength = 35;
    } else {
        $gridSetup = 'col-xl-4 col-lg-4 col-md-4 col-sm-6';
        $term = get_queried_object();
        $postsPerPage = set_posts_per_page($term->slug, 3);
        $excerptLength = 20;
    }

?>

<div class="row card-row">
    <?php if( $postsPerPage->have_posts() ): while( $postsPerPage->have_posts() ): $postsPerPage->the_post(); ?>    
        <div class="<?php echo $gridSetup; ?> mb-5">
            <div class="card">
                <img class="card-img-top" src="<?php the_field('card_image'); ?>">
                <div class="card-body">
                    <div class="card-title"><h5><?php the_title(); ?></h5></div>
                    <p class="card-text"><?php echo custom_excerpt($excerptLength); ?></p>
                </div>
                <div class="card-footer bg-transparent no-border mb-2">
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm">Read More</a>
                </div>
            </div>   
        </div>
    <?php endwhile; else: endif; ?>
    <?php wp_reset_postdata(); ?>
</div>