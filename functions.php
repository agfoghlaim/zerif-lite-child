

<?php
function my_theme_enqueue_styles() {

	 $parent_style = 'zerif_style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array( 'zerif_bootstrap_style' ) );
	wp_enqueue_style( 'child-style',
	    get_stylesheet_directory_uri() . '/style.css',
	    array( $parent_style, 'zerif_responsive_style' ),
	    wp_get_theme()->get('Version')
);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function add_svg_to_upload_mimes( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes', 10, 1 );

//page specific sidebars to show individual project's social media feed on their page

//CHOMHAIRLE NA NOg

// function ywig_comhairle_sidebar() {
//     register_sidebar( array(
//         'name' => __( 'Comhairle Sidebar' ),
//         'id' => 'sidebar-comhairle',
//         'description' => __( 'For Comhairle Social feed' ),
//         'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 	'after_widget'  => '</li>',
// 	'before_title'  => '<h2 class="widgettitle">',
// 	'after_title'   => '</h2>',
//     ) );
// }
// add_action( 'widgets_init', 'ywig_comhairle_sidebar' );


add_post_type_support( 'page', 'excerpt' );




//fonts
// function load_fonts() {
//             wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Roboto');
//             wp_enqueue_style( 'et-googleFonts');
//         }
//     add_action('wp_print_styles', 'load_fonts');

// function load_fonts() {
//             wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300');
//             wp_enqueue_style( 'et-googleFonts');
//         }
//     add_action('wp_print_styles', 'load_fonts');

// function load_fonts_raleway() {
//             wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro');
//             wp_enqueue_style( 'et-googleFonts');
//         }
//     add_action('wp_print_styles', 'load_fonts_raleway');

    if ( ! function_exists( 'zerif_about_us_header_title_function' ) ) :
    /**
     * Title in the header area of the About us section
     */
    function zerif_about_us_header_title_function() {

        if ( current_user_can( 'edit_theme_options' ) ) {
            $zerif_aboutus_title = get_theme_mod( 'zerif_aboutus_title', sprintf( '<a href="%1$s" class="zerif-default-links">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_aboutus_title' ) ), __( 'About', 'zerif-lite' ) ) );
        } else {
            $zerif_aboutus_title = get_theme_mod( 'zerif_aboutus_title' );
        }

        if ( ! empty( $zerif_aboutus_title ) ) :
            echo '<h2>' . wp_kses_post( $zerif_aboutus_title ) . '</h2>';
        elseif ( is_customize_preview() ) :
            echo '<h2 class="white-text zerif_hidden_if_not_customizer"></h2>';
        endif;
    }
endif;


// add widget area to latest news section for fb feed
function ywig_news_sidebar() {
    register_sidebar( array(
        'name' => __( 'News Sidebar' ),
        'id' => 'ywig-sidebar-news',
        'description' => __( 'For Facebook feed on front' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
 'after_widget'  => '</div>',
 'before_title'  => '<h2 class="widgettitle">',
 'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'ywig_news_sidebar' );



?>

