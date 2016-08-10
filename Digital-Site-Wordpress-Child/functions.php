<?php
function loadGlobalCSS() {
     wp_enqueue_style( 'bootstrap-stylesheet', 'http://localhost:8888/css/bootstrap.min.css' );
     wp_enqueue_style( 'main-stylesheet', 'http://localhost:8888/css/global.css' );
     wp_enqueue_style( 'normalize-stylesheet', 'http://localhost:8888/css/normalize.min.css' );
     wp_enqueue_style( 'slimbox2-stylesheet', 'http://localhost:8888/css/slimbox2.css' );
}
add_action( 'wp_enqueue_scripts', 'loadGlobalCSS' );

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'mybootstraptheme' ),
) );

// Removes bloat that Wordpress adds by default to HEAD section of the webpage
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'rsd_link'); // remove really simple discovery
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links *** RSS ***
remove_action('wp_head', 'feed_links_extra', 3); // removes all rss feed links

remove_action('wp_head', 'index_rel_link'); // removes link to index (home) page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (windows live writer support)

remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
// End of bloat removal
/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);
?>
