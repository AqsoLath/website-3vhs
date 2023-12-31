<!-- Tempat kita naro function -->

<?php

function aqso_register_styles(){

    // ENQUE STYLE
    wp_enqueue_style( "bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", "", "1.0", "all" );
    wp_enqueue_style( "aqsoOwnCss", get_template_directory_uri() . "/style/style.css", "", "1.0", "all" );
    wp_enqueue_style('swiper_css', "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css");
    wp_enqueue_style('aos_css', "https://unpkg.com/aos@2.3.1/dist/aos.css");


    // ENQUE SCRIPT
    // Karena di wordpress udah tertanem jquery maka kita hanya perlu manggil file-nya aja, gak perlu didownload file-nya
    wp_enqueue_script( "jquery");
    wp_enqueue_script('script_js', get_template_directory_uri() . '/script/script.js', array('jquery'), rand(111, 9999), true);
    wp_enqueue_script('aos_js', "https://unpkg.com/aos@2.3.1/dist/aos.js");

}

add_action( "wp_enqueue_scripts", "aqso_register_styles" );

?>