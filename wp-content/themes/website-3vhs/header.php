<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
        @font-face{
            font-family: "Compacta";
            src:  url("/wp-content/themes/website-3vhs/assets/fonts/compacta/compacta.ttf");
        }

        @font-face{
            font-family: "Helvetica";
            /* Use locally hosted font file */
            src:  url("/wp-content/themes/website-3vhs/assets/fonts/helvetica-neue/HelveticaNeueRoman.otf");
        }

        /*body{
            font-family: "Compacta ICG" !important;
        }*/
    </style>

    <?php wp_head(); ?>
</head>

<body>
    <nav>
        <div class="nav-container container">
            <div  class="nav-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sevory.png ?>" alt="" >
            </div>
            <div class="nav-links">
                <a href="/ " class="beranda">Beranda</a>
                <a href="#about" class="gallery">About</a>
                <a href="/roster-boys" class="roster-boys">Roster Boys</a>
                <a href="/roster-girls" class="roster-girls">Roster Girls</a>
                <a href="/join" class="join">Join</a>
                <a href="/kontak" class="kontak">Kontak</a>
            </div>


            <div class="containerMobile">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame.png ?>" alt="" >
                <div class="navLinks">
                    <div class="nav-list-container">
                        <ul class="nav-list">
                            <li><a href="/ " class="beranda">BERANDA</a></li>
                            <li><a href="#about" class="gallery">ABOUT</a></li>
                            <li><a href="/roster-boys" class="roster-boys">ROSTER BOYS</a></li>
                            <li><a href="/roster-girls" class="roster-girls">ROSTER GIRL</a></li>
                            <li><a href="/join" class="join">JOIN</a></li>
                            <li><a href="/kontak" class="kontak">KONTAK</a></li>
                        </ul>
                    </div>
                </div>

            </div>
                
            </div>
        </div>
    </nav>