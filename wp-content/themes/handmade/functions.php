
<?php
function enqueue_yummy_styles()
{
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');

    // Enqueue Bootstrap Icons CSS
    wp_enqueue_style('bootstrap-icons-css', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');

    // Enqueue AOS CSS
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/vendor/aos/aos.css');

    // Enqueue GLightbox CSS
    wp_enqueue_style('glightbox-css', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');

    // Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');

    // Enqueue Main CSS
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
}

// Hook the function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'enqueue_yummy_styles');
function enqueue_yummy_scripts()
{
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '', true);

    // Enqueue AOS JS
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '', true);

    // Enqueue GLightbox JS
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '', true);

    // Enqueue Purecounter JS
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), '', true);

    // Enqueue Swiper JS
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), '', true);

    // Enqueue PHP Email Form Validation JS
    wp_enqueue_script('php-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '', true);

    // Enqueue Main JS
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
}

// Hook the function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'enqueue_yummy_scripts');
// Thêm hỗ trợ menu
function custom_theme_setup()
{
    // Đăng ký menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'custom-theme'), // 'primary' là slug của menu, 'custom-theme' là text domain của theme
    ));
}

add_action('after_setup_theme', 'custom_theme_setup');
