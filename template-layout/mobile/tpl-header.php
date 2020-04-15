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
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 2</a>
                            </li>
                            <li>
                                <a href="#">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Treatments</a>
                    </li>
                    <li>
                        <a href="#plasticSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Plastic Surgery</a>
                        <ul class="collapse list-unstyled" id="plasticSubmenu">
                            <li>
                                <a href="#">Plastic Surgery 1</a>
                            </li>
                            <li>
                                <a href="#">Plastic Surgery 2</a>
                            </li>
                            <li>
                                <a href="#">Plastic Surgery 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Our Doctors</a>
                    </li>
                    <li>
                        <a href="#">Promotions</a>
                    </li>
                    <li>
                        <a href="#">Find Us Blog</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </header>