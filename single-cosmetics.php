<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <div class="row">
                <div class="col-xl-5">
                    <div class="border d-flex align-items-center mb-4" style="height: 505px;">
                        <?php if ( has_post_thumbnail() ): ?>
                            <img src="<?php the_post_thumbnail_url('img-sm-square'); ?>" alt="<?php the_title(); ?>" class="img-fluid mx-auto d-block">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-7">
                    <h1><?php the_title(); ?></h1>
                    <?php get_template_part('template-parts/post/content', 'cosmetics'); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>