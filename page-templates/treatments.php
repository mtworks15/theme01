<?php
/*
Template Name: Treatments
*/
?>

<?php
    $pageSectionOne = get_field('page_section_one');
    $pageSectionTwo = get_field('page_section_two');
    $pageSectionThree = get_field('page_section_three');
    $pageSectionFour = get_field('page_section_four');
    $pageSectionFive = get_field('page_section_five');
?>

<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div id="pageSectionOne" class="w-screen">
            <div class="page-banner-wrapper">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_41.jpg" class="page-banner" />
                <div id="page-banner-txt">
                    <h2 class="text-right"><?php echo $pageSectionOne['banner_main_title'] ?></h2>
                    <h2 class="text-right"><?php echo $pageSectionOne['banner_sub_title'] ?></h2>
                </div>
            </div> 
        </div>
        <div id="pageSectionTwo">
            <div class="container">
                <p class="page-content-fsize text-center"><?php echo $pageSectionTwo['content_description'] ?>
                </p>
            </div>
        </div>
        <div id="pageSectionThree">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="page-img-container">
                            <img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_42.jpg" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <h2 class="page-title-header text-center"><?php echo $pageSectionThree['header_title'] ?></h2>
                        <p class="page-content-fsize text-center"><?php echo $pageSectionThree['content_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="pageSectionFour">
            <div class="container">
                <div class="row no-gutters page-col-reverse">
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <h2 class="page-title-header text-center"><?php echo $pageSectionFour['header_title'] ?></h2>
                        <p class="page-content-fsize text-center"><?php echo $pageSectionFour['content_description'] ?></p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="page-img-container">
                            <img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_43.jpg" class="page-float-img-right" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pageSectionFive">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 page-video-wrapper">
                        <?php echo $pageSectionFive['content_video'] ?>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 page-video-text">
                        <h2 class="page-title-header"><?php echo $pageSectionFive['header_title'] ?></h2>
                        <p class="page-content-fsize"><?php echo $pageSectionFive['content_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>