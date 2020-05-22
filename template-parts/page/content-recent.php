<?php 

$arrRecentPosts = get_query_var( 'recentPostsVar' );
$recentPosts = set_posts_per_page($arrRecentPosts['catName'], $arrRecentPosts['postsPerPage']); 

?>

<div class="row card-row">
    <?php if( $recentPosts->have_posts() ): while( $recentPosts->have_posts() ): $recentPosts->the_post(); ?>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="<?php the_field('card_image'); ?>">
                <div class="card-body">
                    <div class="card-title"><h5><?php the_title(); ?></h5></div>
                    <p class="card-text"><?php echo custom_excerpt($arrRecentPosts['excerptLength']); ?></p>
                </div>
                <div class="card-footer bg-transparent no-border mb-2">
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm">Read More</a>
                </div>
            </div>
        </div>
    <?php endwhile; else: endif; ?>
    <?php wp_reset_postdata(); ?>
</div>