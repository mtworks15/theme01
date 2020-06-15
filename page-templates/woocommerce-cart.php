<?php

/*
    Template Name: Cart Template
*/

?>

<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php the_title(); ?></h1>
                    <?php get_template_part('template-parts/page/content', 'page'); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>