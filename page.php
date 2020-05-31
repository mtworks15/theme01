<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4">
                    <div class="mt-3 mb-5"><?php get_search_form(); ?></div>
                    <?php if ( is_active_sidebar('page-sidebar') ): ?>
                        <?php dynamic_sidebar('page-sidebar'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8">
                    <h1><?php the_title(); ?></h1>
                    <?php get_template_part('template-parts/page/content', 'page'); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>