<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Theme01</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php wp_head(); ?> 
    </head>
    <body>
        <header>
            <nav id="sidenavBtn" class="navbar navbar-expand-lg navbar-light">
                <button type="button" id="sidenavCollapse" class="btn">
                    <i class="fa fa-align-left"></i>
                </button>
            </nav>
            <nav id="sidenav">
                <div class="sidenav-header">
                    <h1>Self Aesthetics</h1>
                </div>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'mobile-menu',
                            'menu_class' => 'mobile-nav'
                        )
                    );
                ?>
            </nav>
        </header>