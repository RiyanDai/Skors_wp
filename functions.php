<?

// function styleskors(){
//     wp_enqueue_style('swiper','https://unpkg.com/swiper@7/swiper-bundle.min.css');
//     wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
//     wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));


//     //script
//     wp_enqueue_script('myjQuery', get_theme_file_uri('/js/jquery-3.6.0.min.js'), [], '3.6.0', true);
//     wp_enqueue_script('swiperJs', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', [], '1.0', true);
//     wp_enqueue_script('scriptJs', get_theme_file_uri( '/js/script.js' ), [], '1.0', true);

// }

function styleSkors(){
    // Enqueue Styles
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('main-style', get_theme_file_uri('css/style.css'));

    // Enqueue Scripts
    wp_enqueue_script('myjQuery', get_theme_file_uri('js/jquery-3.6.0.min.js'), [], '3.6.0', true);  // Enqueue jQuery
   

    // Enqueue IonIcons
    wp_enqueue_script('ionicons', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js', [], '5.5.2', true);  // Enqueue Ionicons
}

add_action('wp_enqueue_scripts', 'styleSkors');

// // Theme Support
// function MushallaSupportTheme(){
//     register_nav_menu('top_menu', 'Menu Atas');
// }

// add_action('after_setup_theme', 'MushallaSupportTheme');
// add_theme_support('post-thumbnails');

//  


//theme support
function SkorsSupportTheme(){
    register_nav_menu( 'top_menu', 'Menu atas');

}

add_action('after_setup_theme', 'SkorsSupportTheme');

add_theme_support('post-thumbnails');


add_action('wp_footer', function () {
    if (is_single()) {
        global $wp_query;
        echo '<pre>' . print_r($wp_query, true) . '</pre>';
    }
});




