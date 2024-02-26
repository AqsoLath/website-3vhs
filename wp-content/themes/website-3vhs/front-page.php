<?php get_header() ?>

<main>
    <!--====================-->
    <!--===== MAINHERO =====-->
    <!--====================-->
    <div class="mainhero">
        <div class="bg-konten-box"></div>
        <div class="konten container">
            <div class="konten-box">
                <h1>Sevory</h1>
                <h2>Basketball Team</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quod sint quam repellendus ducimus excepturi eum nihil qui eos. Impedit dignissimos, minus incidunt voluptatum soluta, magnam architecto dolores saepe est iure itaque excepturi animi enim corporis voluptate. Odit perspiciatis autem ratione, accusantium nam magni sapiente esse quidem! Minima, vero aliquid?</p>
                <a href="our-team" class="button-orange">
                    <div>
                        Our New Team
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector/arrow-right.svg" class="ms-3" alt="arrow-right">
                </a>
            </div>
        </div>
        <div class="gambar">
            <div class="swiper swiper-players">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1">
                    </div>
                </div>
            </div>
            <div class="bottom-shadow"></div>
        </div>
    </div>

    <!--=================-->
    <!--===== ABOUT =====-->
    <!--=================-->
    <div class="home-about">
        <div class="bg-gambar"></div>
        <div class="about-container container">
            <div class="gambar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-smk3.png" alt="Logo SMKN 3 Kota Bekasi">
            </div>
            <div class="konten">
                <h2>We Are Dynamic Basketball Club of <span>SMKN 3 Kota Bekasi</span></h2>
                <p>SMKN 3 KOTA BEKASI Basketball club has came a long way in Bekasi basketball zone. As a club we has culture to maintain relationship between the coach-to-player and player-to-player to level-up the discipline and chemistry in team.</p>
                <div class="data">
                    <div class="item">
                        <h3>20+</h3>
                        <h4>Active Players</h4>
                    </div>
                    <div class="item">
                        <h3>2010</h3>
                        <h4>Club Was Invented</h4>
                    </div>
                    <div class="item">
                        <h3>2</h3>
                        <h4>City Trophy in Vocational Level</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========================-->
    <!--===== DIVIDER ROSTERS =====-->
    <!--===========================-->

    <div class="divider-rosters">
        <span>ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS // ROSTERS //</span>
    </div>


    <!--===================-->
    <!--===== ROSTERS =====-->
    <!--===================-->
    <div class="rosters">
        <div class="boys">
            <a href="/roster-boys">
                <div class="boys-container container">
                    <div class="konten" data-aos="fade-right" data-aos-delay="250" data-aos-anchor=".boys .gambar" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out-quint">
                        <h2>Boys</h2>
                    </div>
                    <div class=" gambar" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out-quint">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-boys/andra-1.png" alt="andra 1">
                    </div>
                </div>
            </a>
        </div>
        <div class="girls">
            <a href="/roster-girls">
                <div class="girls-container container">
                    <div class="gambar" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out-quint">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/players-girls/nella-1.png" alt="nella 1">
                    </div>
                    <div class="konten" data-aos="fade-left" data-aos-delay="250" data-aos-anchor=".girls .gambar" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-in-out-quint">
                        <h2>Girls</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!--======================-->
    <!--===== INTERESTED =====-->
    <!--======================-->

    <div class="interested-join">
        <div class="interested">
            <div class="container">
                <h3>Are you an smkn 3 student and interested to join?</h3>
            </div>
        </div>
        <div class="join">
            <div class="container">
                <h3>If yes</h3>
                <a href="/">Click Here</a>
            </div>
        </div>
    </div>

</main>

<?php get_footer() ?>
