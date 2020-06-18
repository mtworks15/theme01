<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <div class="row">
                <?php if ( is_product() ) : ?>
                    <div class="col-lg-12">
                        <?php woocommerce_content(); ?>
                    </div>
                <?php else : ?>
                    <div class="col-lg-9">
                        <?php woocommerce_content(); ?>
                    </div>
                    <div class="col-lg-3">
                        <?php if ( is_active_sidebar('woocommerce-sidebar') ) : ?>
                            <?php dynamic_sidebar('woocommerce-sidebar'); ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>