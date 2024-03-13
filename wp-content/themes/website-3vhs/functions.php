<?php

function aqso_register_styles()
{

    // ENQUE STYLE
    wp_enqueue_style("bootstrap_css", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", "", "1.0", "all");
    wp_enqueue_style('swiper_css', "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css");
    wp_enqueue_style('aos_css', "https://unpkg.com/aos@2.3.1/dist/aos.css");
    wp_enqueue_style("aqsoOwnCss", get_template_directory_uri() . "/style/style.css", "", "1.0", "all");
    wp_enqueue_style("footerCss", get_template_directory_uri() . "/style/footer.css", "", "1.0", "all");



    // ENQUE SCRIPT
    // Karena di wordpress udah tertanem jquery maka kita hanya perlu manggil file-nya aja, gak perlu didownload file-nya
    wp_enqueue_script("jquery");
    wp_enqueue_script('bootstrap_js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array('jquery'), '', true);
    wp_enqueue_script('swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array('jquery'));
    wp_enqueue_script('aos_js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '', true);
    wp_enqueue_script('script_package_js', get_template_directory_uri() . '/script/script-package.js', array('jquery'), rand(111, 9999), true);
}

add_action("wp_enqueue_scripts", "aqso_register_styles");

?>