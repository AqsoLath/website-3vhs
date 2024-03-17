<?php get_header() ?>

<main id="rosters-boys" style="background: url( <?php echo get_template_directory_uri(); ?>/assets/images/paper-texture.png), #171250; ">
    <!--======================-->
    <!--===== BOYS GIRLS =====-->
    <!--======================-->
    <div class="rosters-links">
        <div class="links-wrapper container">
            <a href="/roster-boys" class="active">Boys</a>
            <div class="divider"></div>
            <a href="/roster-girls">Girls</a>
        </div>
    </div>


    <!--=================-->
    <!--===== TITLE =====-->
    <!--=================-->
    <div class="rosters-title" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/rosters-title-bg1.png); background-size: 120%; background-position: center; background-repeat: repeat-x; ">
        <h2>Rosters</h2>
    </div>





    <?php
    $args = array(
        'post_type' => array('boys-page'),
        'posts_per_page' => -1,
        // 'orderby'   => 'menu_order', 
        // 'order' => "ASC"
    );

    $wp_query = new WP_Query($args);

    ?>






















    <!--===========================-->
    <!--===== ROSTERS PLAYERS =====-->
    <!--===========================-->

    <div class="rosters-players">
        <div class="container">
            <div class="players-wrapper">

            <?php if ($wp_query->have_posts()) : ?>
            <?php while ($wp_query->have_posts()) : $wp_query->the_post() ?>
                    
                <div class="item">
                    <div class="atas">
                        <div class="konten">
                            <h4><?php echo get_field('posisi');?></h4>
                            <div class="detail">
                                <div class="detail-item">
                                    <h5>Position</h5>
                                    <h6><?php echo get_field('posisi');?></h6>
                                </div>
                                <div class="detail-item">
                                    <h5>Height</h5>
                                    <h6><?php echo get_field('tinggi_badan');?> cm</h6>
                                </div>
                                <div class="detail-item">
                                    <h5>Weight</h5>
                                    <h6><?php echo get_field('berat_badan');?> kg</h6>
                                </div>
                                <div class="detail-item">
                                    <h5>Vocational</h5>
                                    <h6><?php echo get_field('jurusan');?></h6>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="<?php echo get_template_directory_uri(get_field('foto-pemain')); ?> alt="<?php get_field('nama_pemain')?>" class="foto-profil"> -->
          
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/players-boys/kenny-1.png" alt="kenny 1" class="foto-profil">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sevory.png" alt="logo sevory" class="logo-sevory">
                    </div>
                    <div class="bawah">
                        <!-- <h3>Lebron <strong>Imanuel</strong></h3> -->
                  
                        <h3><?php echo get_field('nama_pemain');?></h3>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

            </div>
        </div>
    </div>

    <!--============================-->
    <!--===== PLAYERS POSITION =====-->
    <!--============================-->

    <div class="players-position">
        <h2>PLAYER POSITION <br> INFORMATION</h2>
        <div class="position-wrapper container">
            <div class="offense">
                <h3>Offense</h3>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/position-offense.png" alt="position offense">
            </div>
            <div class="defense">
                <h3>Defense</h3>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/position-defense.png" alt="position defense">
            </div>
        </div>
    </div>

</main>


<?php get_footer() ?>