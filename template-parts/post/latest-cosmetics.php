<?php

    $attributes = get_query_var('attributes');
    print_r($attributes); // uncomment if debug mode

    $args = array(
        'post_type' => 'cosmetics',
        'posts_per_page' => 3,
        'meta_query' => [],
        'tax_query' => [],
    );

    if ( isset($attributes['price_above']) ) {
        $args['meta_query'][] = array(

            'key' => 'price',
            'value' => $attributes['price_above'],
            'type' => 'numeric',
            'compare' => '>='

        );
    }

    if ( isset($attributes['price_below']) ) {
        $args['meta_query'][] = array(

            'key' => 'price',
            'value' => $attributes['price_below'],
            'type' => 'numeric',
            'compare' => '<='

        );
    }

    if ( isset($attributes['size']) ) {
        $args['meta_query'][] = array(

            'key' => 'size',
            'value' => $attributes['size'],
            'compare' => '='

        );
    }

    if ( isset($attributes['brand']) ) {
        $args['tax_query'][] = array(

            'taxonomy' => 'brands',
            'field' => 'slug', // taxonomy term slug
            'terms' => array( $attributes['brand'] ) // check if the taxonomy term slug matches the term from the shortcode
        
        );
    }

    $query = new WP_Query($args);

?>



<div class="row card-row">

<?php if ( $query->have_posts() ) : ?>

    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-5">
            <div class="card">
                <?php if ( has_post_thumbnail() ): ?>
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('img-xs-square'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="card-body text-center">
                    <div class="card-title"><h5><?php the_title(); ?></h5></div>
                    <p class="mb-0">$<?php the_field('price'); ?></p>
                    <p class="mb-3"><?php the_field('size'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm">Buy Now</a>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

</div>