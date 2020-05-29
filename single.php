<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <?php if ( has_post_thumbnail() ): ?>
                <img src="<?php the_post_thumbnail_url('img-lg'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-5">
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <?php get_template_part('template-parts/post/content', 'blog'); ?>
        </div>
    </div>

<?php get_footer(); ?>