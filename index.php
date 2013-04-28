<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */
?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="grid8">
      <?php if ( have_posts() ): ?>
      <h2>Latest Posts</h2>
      <?php while ( have_posts() ) : the_post(); ?>
      		<article <?php post_class() ?>>
      			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
      			<?php the_content(); ?>
      		</article>
      <?php endwhile; ?>

      <?php else: ?>
      <h2>No posts to display</h2>
      <?php endif; ?>
    </div>

    <div class="grid4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>