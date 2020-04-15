<?php 

if ( wp_mobile_detect() ) {
    require 'template-layout/mobile/tpl-footer.php';
} else {
    require 'template-layout/desktop/tpl-footer.php'; 
}

?>