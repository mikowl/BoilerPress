<?php
/**
 * The template that displays all WordPress "Pages" by default.
 */
?>
<?php get_header(); ?>

<section class="page-<?php the_ID(); ?>">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <?php endwhile; ?>
</section>

<?php get_footer(); ?>