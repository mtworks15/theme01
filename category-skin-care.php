<?php get_header(); ?>
    
    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <h3 class="text-center mt-5 mb-3">LOREM IPSUM DOLOR</h3>
            <p class="text-center mb-5">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
            <?php get_template_part('template-parts/page/content', 'category'); ?>
            
            <?php
                /* For custom-searchform */

                $arrSearch1 = [
                    'name' => 'cat',
                    'val' => '4'
                ];

                $arrSearch2 = [
                    'name' => 'post_type',
                    'val' => 'post'
                ];

                $arrSearch = [
                    'arrSearch1' => $arrSearch1,
                    'arrSearch2' => $arrSearch2
                ];

                set_query_var( 'searchVar', $arrSearch );
            ?>
            
            <?php get_template_part('template-parts/navigation/custom', 'searchform'); ?>
        </div>
    </div>

<?php get_footer(); ?>