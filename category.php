<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <?php get_template_part('template-parts/page/content', 'category'); ?>
            <button type="button" class="misha_loadmore2 btn btn-outline-secondary btn-lg btn-block">More Posts</button>
        </div>
    </div>

<?php get_footer(); ?>