<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    
    <p>
        <span>By <?php echo get_the_author_meta('nickname'); ?></span>
        <span> | <?php echo get_the_date(); ?> | </span>
        <?php
        $terms = get_the_terms( $post->ID, 'brands' );
        foreach($terms as $term): ?>

            <a href="<?php echo get_term_link($term); ?>">
                <?php echo $term->name; ?>
            </a>

        <?php endforeach; ?>
    </p>

    <?php the_content(); ?>

    <p class="mb-0">Price: <?php the_field('price'); ?></p>
    <p class="mb-0">Size: <?php the_field('size'); ?></p>

<?php endwhile; else: endif; ?>