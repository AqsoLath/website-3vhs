<!-- Tempat kita naro function -->

<?php

function aqso_register_styles(){

    wp_enqueue_style( "bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", "", "1.0", "all" );

    wp_enqueue_style( "aqsoOwnCss", get_template_directory_uri() . "/style/style.css", "", "1.0", "all" );

    // Karena di wordpress udah tertanem jquery maka kita hanya perlu manggil file-nya aja, gak perlu didownload file-nya
    wp_enqueue_script( "jquery");
}

add_action( "wp_enqueue_scripts", "aqso_register_styles" );

?>