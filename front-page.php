<?php
/**
 * This is the homepage template
 */
?>
<?php get_header(); ?>

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <?php comments_template(); ?>
  <?php endwhile; ?>

<?php get_footer(); ?>