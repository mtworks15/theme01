var $j = jQuery.noConflict();

$j(document).ready(function() {
    $j('#sidenavCollapse').on('click', function() {
        $j('#sidenav').toggleClass('active');
    });
    $j('body').mouseup(function(e) {
        if( $j('#sidenav').hasClass('active') && !$j('#sidenav').is(e.target) && $j('#sidenav').has(e.target).length === 0 ) {
            $j('#sidenav').removeClass('active');
        }
    });
});


window.onscroll = function() {fixedNav()};
var nav = document.getElementById("navbarWrapper");
var hlogo = document.getElementById("hLogo");
var hlogoWrapper = document.getElementById("hlogoWrapper");
var menuWrapper = document.getElementById("menuWrapper");
var sticky = nav.offsetTop;

function fixedNav() {
    if (window.pageYOffset > sticky) {
        nav.classList.add("sticky-wrapper");
        hlogoWrapper.classList.add("hlogo-sticky");
        hlogo.classList.add("hlogo-img");
        menuWrapper.classList.add("menu-sticky");
    } else {
        nav.classList.remove("sticky-wrapper");
        hlogoWrapper.classList.remove("hlogo-sticky");
        hlogo.classList.remove("hlogo-img");
        menuWrapper.classList.remove("menu-sticky");
    }
}


$j(document).ready(function(){
    // Activate Carousel
    $j("#carouselTreatments").carousel();
        
    // Enable Carousel Indicators
    $j(".item1").click(function(){
        $j("#carouselTreatments").carousel(0);
    });
    $j(".item2").click(function(){
        $j("#carouselTreatments").carousel(1);
    });
    $j(".item3").click(function(){
        $j("#carouselTreatments").carousel(2);
    });
        
    // Enable Carousel Controls
    $j(".carousel-control-prev").click(function(){
        $j("#carouselTreatments").carousel("prev");
    });
    $j(".carousel-control-next").click(function(){
        $j("#carouselTreatments").carousel("next");
    });
});