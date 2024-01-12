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
                <a href="/roaster" class="roster">Roaster</a>
                <a href="/gallery" class="gallery">Gallery</a>
                <a href="/kontak" class="kontak">Kontak</a>
            </div>
        </div>
    </nav>