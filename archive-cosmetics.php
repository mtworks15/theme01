<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <?php get_template_part('template-parts/page/content', 'archivecosmetics'); ?>
            <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>
        </div>
    </div>

<?php get_footer(); ?>