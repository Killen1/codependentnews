<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// this is for Set featured image
add_theme_support( 'post-thumbnails' ); 

//Adds borwser class so we can style according to browser
function organizedthemes_browser_body_class($classes) {
    global $is_gecko, $is_IE, $is_opera, $is_safari, $is_chrome;
 
    if($is_gecko)      $classes[] = 'firefox';
    elseif($is_opera)  $classes[] = 'opera';
    elseif($is_safari) $classes[] = 'safari';
    elseif($is_chrome) $classes[] = 'chrome';
    elseif($is_IE)     $classes[] = 'ie';
    else               $classes[] = 'unknown';
 
    return $classes;
}
add_filter('body_class','organizedthemes_browser_body_class');

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'primary'   => __( 'Top primary menu'),
    //'secondary' => __( 'Secondary menu in left sidebar'),
) );

function new_excerpt_length($length) {
    return 75;
}
add_filter('excerpt_length', 'new_excerpt_length');

//active class
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

//This is for the featured images details
function the_post_thumbnail_caption() {
  global $post;
 
    $thumb_id = get_post_thumbnail_id($post->id);
 
    $args = array(
        'post_type' => 'attachment',
        'post_status' => null,
        'post_parent' => $post->ID,
        'include'  => $thumb_id
    );
 
   $thumbnail_image = get_posts($args);
 
   if ($thumbnail_image && isset($thumbnail_image[0])) {
     //show thumbnail title
     //echo $thumbnail_image[0]->post_title;
 
     //Uncomment to show the thumbnail caption
     echo '<div class="image-caption"><p class="wht">'.$thumbnail_image[0]->post_excerpt.'</p></div>';
 
     //Uncomment to show the thumbnail description
     //echo $thumbnail_image[0]->post_content;
 
     //Uncomment to show the thumbnail alt field
     //$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
     //if(count($alt)) echo $alt;
  }
}

function pa_admin_area_favicon() {
    $favicon_url = get_bloginfo('url') . '/wp-content/themes/codependent/images/favicon.ico';
    echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

add_action('admin_head', 'pa_admin_area_favicon');

?>