<?php
/**
 * This is the homepage template
 */
?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="grid8">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>

    <aside class="grid4 latest=news">
    <?php // Grab 3 latest news excerpts
    $args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); ?>
    <article>
      <time><?php the_date(); ?></time>
      <h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <p><?php the_excerpt(); ?></p>
    </article>
    <?php endforeach; ?>
    </aside>

  </div>
</div>
<?php get_footer(); ?>