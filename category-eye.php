<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <?php get_template_part('template-parts/page/content', 'archive'); ?>
            <!-- <div class="d-flex justify-content-end mt-4">
                <?php previous_posts_link(); ?>
                <?php next_posts_link(); ?>
            </div> -->
            <button type="button" class="misha_loadmore btn btn-outline-secondary btn-lg btn-block">More Posts</button>
        </div>
    </div>

<?php get_footer(); ?>