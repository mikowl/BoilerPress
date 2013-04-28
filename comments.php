<?php
/**
 * The template for displaying Comments.
 */
?>
<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view any comments</p>
</div>

	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php if ( have_comments() ) : ?>

	<h2><?php comments_number(); ?></h2>

	<ol>
		<?php wp_list_comments(); ?>
	</ol>

	<?php
		/* If there are no comments and comments are closed */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>

	<p>Comments are closed</p>

	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
