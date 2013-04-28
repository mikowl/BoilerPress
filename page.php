<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all WordPress "Pages" by default.
 *
 */
?>
<?php get_header(); ?>

<section class="post-<?php the_ID(); ?>">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <?php comments_template(); ?>
  <?php endwhile; ?>
</section>

<?php get_footer(); ?>