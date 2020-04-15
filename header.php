<?php 

if ( wp_mobile_detect() ) {
    require 'template-layout/mobile/tpl-header.php';
} else {
    require 'template-layout/desktop/tpl-header.php'; 
}

?>