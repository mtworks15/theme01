<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <?php get_template_part('template-parts/page/content', 'category'); ?>
            <div class="d-flex justify-content-end mt-4">
                <?php previous_posts_link(); ?>
                <?php next_posts_link(); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>