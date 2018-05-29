<?php 
require_once('wp_bootstrap_navwalker.php');
?>
<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Green-travel-blog' ),
) );
?>
<?php 
//Widgets Location
function ourWidgetsInit(){
	register_sidebar(array(
	'name' => 'Side Bar',
	'id' => 'sidebar1',
	'before_title' => '<h1>',
	'after_title' => '</h1>',
	'before_widget' => '<div class="widgeta">',
	'after_widget' => '</div>',
	
	));
}
add_action('widgets_init', 'ourWidgetsInit');
?>
<?php
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
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
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
         echo "</div>\n";
     }
}
?>
<?php
//featured image
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200 );
?>
<?php
function wpdocs_theme_add_editor_styles() {
    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Slabo+27px' );
    add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'wpdocs_theme_add_editor_styles' );
?>
<?php
//function automatic_feed_links( $add = true ) {
 //   _deprecated_function( __FUNCTION__, '3.0.0', "add_theme_support( 'automatic-feed-links' )" );
 
 //   if ( $add )
//        add_theme_support( 'automatic-feed-links' );
  //  else
   //     remove_action( 'wp_head', 'feed_links_extra', 3 ); // Just do this yourself in 3.0+
//}
add_theme_support( 'automatic-feed-links' );
?>
<?php
function wpse218049_enqueue_comments_reply() {

    if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
        // Load comment-reply.js (into footer)
        wp_enqueue_script( 'comment-reply', 'wp-includes/js/comment-reply', array(), false, true );
    }
}
add_action(  'wp_enqueue_scripts', 'wpse218049_enqueue_comments_reply' );
?>
<?php
add_theme_support( "title-tag" );
?>
<?php
function wpse_add_title_support() {
    add_theme_support( 'title-tag' );
}
add_action ( 'after_setup_theme', 'wpse_add_title_support' );
?>
<?php
if ( ! isset( $content_width ) ) $content_width = 900;
?>