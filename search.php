<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <h2 class="mb-4">Search Results for '<?php echo get_search_query(); ?>'</h2>
            <?php get_template_part('template-parts/page/content', 'searchresults'); ?>
            <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>
        </div>
    </div>

<?php get_footer(); ?>