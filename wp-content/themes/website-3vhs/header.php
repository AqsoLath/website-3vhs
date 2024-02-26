<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <nav>
        <div class="nav-container container">
            <div class="nav-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sevory.png ?>" alt="">
            </div>
            <div class="nav-links">
                <a href="/ " class="beranda">Beranda</a>
                <a href="#about" class="gallery">About</a>
                <a href="/roster-boys" class="roster-boys">Roster Boys</a>
                <a href="/roster-girls" class="roster-girls">Roster Girls</a>
                <a href="/join" class="join">Join</a>
                <a href="/kontak" class="kontak">Kontak</a>
            </div>
        </div>
    </nav>