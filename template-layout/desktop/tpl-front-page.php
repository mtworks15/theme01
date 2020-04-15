<div id="mainContainer">
    <div id="sectionOne" class="w-screen">
        <div class="bannerWrapper">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_02.jpg" class="banner">
        </div> 
    </div>
    <div id="sectionTwo">
        <div class="container">
            <div class="row no-gutters">
                <div id="textContent" class="col-sm-12 col-md-8 col-lg-8 col-xl-9">
                    <h1><?php echo $sectionTwo['header_title'] ?></h1>
                    <p><?php echo $sectionTwo['description'] ?></p>
                </div>
                <div id="imgContent" class="col-md-4 col-lg-4 col-xl-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_07-orig.jpg" />
                </div>
            </div>
        </div>
    </div>
    <div id="sectionThree">
        <div class="container">
            <h1 class="s3-title"><?php echo $sectionThree['main_title'] ?></h1>
            <h1 class="s3-title"><?php echo $sectionThree['sub_title'] ?></h1>
            <div id="carouselTreatments" class="carousel slide section-content">
                <ul class="carousel-indicators caro-indicators">
                    <li class="item1 active"></li>
                    <li class="item2"></li>
                    <li class="item3"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_12.jpg"></a></div>
                            <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_14.jpg"></a></div>
                            <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_16.jpg"></a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_16.jpg"></a></div>
                            <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_14.jpg"></a></div>
                            <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_12.jpg"></a></div>                  
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_14.jpg"></a></div>
                            <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_12.jpg"></a></div>
                            <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_16.jpg"></a></div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev">
                    <span class="carousel-control-custom-prev-icon"></span>
                </a>
                <a class="carousel-control-next">
                    <span class="carousel-control-custom-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <div id="sectionFour" class="w-screen">
        <div class="bannerWrapper">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_21.jpg" class="banner">
        </div>   
    </div>
    <div id="sectionFive">
        <div class="container">
            <h1 class="s5-title"><?php echo $sectionFive['main_title'] ?></h1>
            <div class="d-flex justify-content-center section-content">
                <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_24.jpg"></a></div>
                <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_26.jpg"></a></div>
                <div class="p-2"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_28.jpg"></a></div>                  
            </div>
            <?php if ( $sectionFive['button_link'] ) : ?>
            <div class="d-flex justify-content-center mt-5"><a href="<?php echo $sectionFive['button_link'] ?>" class="button view-more"><?php echo $sectionFive['button_text'] ?></a></div>
            <?php endif; ?>
        </div>
    </div>
    <div id="sectionSix">
        <div class="container">
            <h1 class="s6-title"><?php echo $sectionSix['main_title'] ?></h1>
            <h1 class="s6-title"><?php echo $sectionSix['sub_title'] ?></h1>
            <div class="d-flex justify-content-center section-content">
                <div class="p-3 item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_34.jpg"></a></div>
                <div class="p-3 item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_37.jpg"></a></div>
                <div class="p-3 item"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/theme01_mockup_40.jpg"></a></div>  
            </div>
        </div>
    </div>
    <div id="sectionSeven">
        <div class="container d-flex justify-content-center">
            <div id="commentForm">
                <h3 class="s7-title"><?php echo $sectionSeven['main_title'] ?></h3>
                <form>
                    <input type="text" placeholder="NAME" class="input-style"><br />
                    <input type="text" placeholder="EMAIL" class="input-style"><br />
                    <textarea placeholder="MESSAGE" class="input-style"></textarea><br />
                    <div class="d-flex justify-content-center mt-3"><input type="submit" class="button submit-btn"></div>
                </form>
            </div>
        </div>
    </div>
    <div id="sectionEight">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/logo_sponsors.png" class="mx-auto d-block" />
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/logo_sponsors.png" class="mx-auto d-block" />
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/logo_sponsors.png" class="mx-auto d-block" />
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/logo_sponsors.png" class="mx-auto d-block" />
                </div>
            </div>
        </div>
    </div>
</div>