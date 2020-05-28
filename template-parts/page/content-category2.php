<?php

$arrContentSetup = get_query_var( 'contentSetupVar' );

?>

<div class="row card-row">
    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>    
        <div class="<?php echo $arrContentSetup['gridSetup']; ?> mb-5">
            <div class="card">
                <img class="card-img-top" src="<?php the_field('card_image'); ?>">
                <div class="card-body">
                    <div class="card-title"><h5><?php the_title(); ?></h5></div>
                    <p class="card-text"><?php echo custom_excerpt($arrContentSetup['excerptLength']); ?></p>
                </div>
                <div class="card-footer bg-transparent no-border mb-2">
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm">Read More</a>
                </div>
            </div>   
        </div>
    <?php endwhile; else: endif; ?>
</div>