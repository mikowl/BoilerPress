<?php
/**
 * The main template file, usually used for the main blog/news postings landing page.
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
      			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php if ( comments_open() ) {comments_popup_link(__('Leave a Comment'), __('1 Comment'), __('% Comments')); } ?>
      			<?php the_content(); ?>
      		</article>
      <?php endwhile; ?>
      <?php if (function_exists("paginate_plz")) {
          paginate_plz();
      } ?>
      <?php else: ?>
      <h2>Not Found</h2>
      <p>Sorry, but you are looking for something that isn't here</p>
      <?php get_search_form(); ?>
      <?php endif; ?>
    </div>
    <div class="grid4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>