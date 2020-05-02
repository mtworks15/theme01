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


$j(document).ready(function() {
    if ( $j(".mobile-nav").find("li.menu-item-has-children").length !== 0 ) {
        $j(".mobile-nav li.menu-item-has-children > a").attr({
            "data-toggle": "collapse",
            "aria-expanded": "false",
            "class": "dropdown-toggle"
        });
        $j(".mobile-nav .sub-menu").addClass("collapse");

        let hrid = new Array();

        $j(".mobile-nav li.menu-item-has-children > a")
            .each(function() {
                hrid.push(this.href);
            });
        
        $j(".mobile-nav li.menu-item-has-children > ul.sub-menu")
            .each(function() {
                
            }).attr("id", function(arr) {
                let subMenuId = hrid[arr].split("#");
                return subMenuId[1];
            });
    }

    $j(".mobile-nav li.current-menu-item").addClass("active");
});


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