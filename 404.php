<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php get_header(); ?>

<h2>Uh oh, we couldn't find what you were looking for.</h2>
<p><a href="<?php echo home_url( '/' ); ?>">Return home</a> or try searching:</p>
<?php get_search_form(); ?>
<?php get_footer(); ?>