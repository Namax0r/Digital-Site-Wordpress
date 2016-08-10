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

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Continue reading &#8594;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class=\"text-center\"><div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n</div>\n";
     }
}
add_theme_support( 'post-thumbnails' );

function the_title_limit($length, $replacer = '...') {
 $string = the_title('','',FALSE);
 if(strlen($string) > $length)
 $string = (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;
 echo $string;
}


?>
