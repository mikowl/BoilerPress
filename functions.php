<?php
/**
 * Functions and definitions
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 */

// include jQuery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js", false, null);
  wp_enqueue_script('jquery');
}

/* ==============================================================================================================
Theme specific settings
============================================================================================================== */

register_nav_menus(array('primary' => 'Primary Navigation'));
/* Template usage: <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> */

/* is_tree function - useful if you have to hardcode your navigation
  Example usage: <li <?php if (is_tree(postIDhere)) { echo 'class="active"';}?>><a href="<?php echo get_permalink(postIDhere); ?>">Level 1</a></li>
 */
function is_tree($pid) {
  global $post;
  if ( ! is_page() )
          return false;
  if ( is_page( $pid ) )
          return true;
  $anc = get_post_ancestors( $post );
  if ( in_array( $pid, $anc ) )
          return true;
  return false;
}

/* Widgetize theme <?php get_sidebar(); ?> */
/* Sidebar for blogish things like displaying recent posts, archives, etc. */

register_sidebar(array(
	'name' => __( 'Sidebar' ),
	'id' => 'sidebar-1',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
));

// Function to list child pages of current page (if any)
function display_children() {
  global $post;
  if($post->post_parent) {
    $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  }
  else {
    $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  }
  if ($children) {
   echo '<nav class="subnav"><ul>' . $children . '</ul></nav>';
  }
}

/* Adds "Featured Image" to pages and posts */
add_theme_support('post-thumbnails');

/* Add "Read more" (or modify below to whatever you'd like) to the_excerpt(); */
function new_excerpt_more($more) {
       global $post;
  return ' [...]<br><a class="read-more" href="'. get_permalink($post->ID) . '"> Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* The function belows displays the "feature image" with the caption in a figure element */
/* Also useful for responsive designs as it spits out the image with no width or height attributes set */
/* Just add <?php featurecaption(); ?> where you want it to display in your template */

function featurecaption() {
  global $post;
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
  $imgcaption = get_post(get_post_thumbnail_id())->post_excerpt;
  if ( has_post_thumbnail() ) {
    echo '<figure class="page-feature"><img src="' . $image[0] . '" alt="">';
    if ($imgcaption) {
        echo '<figcaption>' . $imgcaption . '</figcaption>';
       }
    echo '</figure>';
    }
  else {
    echo '<figure class="page-feature"><img src="' . get_template_directory_uri() . '/images/featuredefault.jpg">';
  }
}

/* ==============================================================================================================

Custom Post Types - include custom post types and taxonimies here e.g.
e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

============================================================================================================== */



