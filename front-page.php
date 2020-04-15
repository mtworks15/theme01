<?php get_header(); ?>

<?php 

$sectionTwo = get_field('sectiontwo'); 
$sectionThree = get_field('sectionthree');
$sectionFive = get_field('sectionfive');
$sectionSix = get_field('sectionsix');
$sectionSeven = get_field('sectionseven');

?>

<?php 

if ( wp_mobile_detect() ) {
    require 'template-layout/mobile/tpl-front-page.php';
} else {
    require 'template-layout/desktop/tpl-front-page.php'; 
}

?>

<?php get_footer(); ?>