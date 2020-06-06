<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <?php get_template_part('template-parts/page/content', 'archivecosmetics'); ?>
            <h3>Note: </h3>
            <p>This template will be used by a specific taxonomy named 'brands' if taxonomy-{taxonomy}-{term}.php doesn't exists.</p>
            <p>See wordpress documentation about template hierarchy.</p>
            <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>
        </div>
    </div>

<?php get_footer(); ?>