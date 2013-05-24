<?php
/* ==========================================================================
   Advanced Custom Fields Examples
   Feel free to add any helpful ACF snippets, particularly one's that aren't already in the documentation
   ========================================================================== */
?>

<?php

/* Example of common date formatting using the date picker field */

if(get_field('date_picker')) {
	$date = DateTime::createFromFormat('Ymd', get_field('date'));
	echo '<time>' . $date->format('m-d-Y') . '</time>'; 
}

?>

/* Header photo with conditional fallbacks */

<?php if(get_field('masthead')): /* Check if a masthead is chosen for actual page */ ?>
<?php $image = wp_get_attachment_image_src(get_field('masthead'), 'full'); ?>
<img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('masthead')) ?>" />

<?php elseif(get_field('masthead',$post->post_parent)): /* If not then use it's parents masthead */ ?> 
<?php $image = wp_get_attachment_image_src(get_field('masthead',$post->post_parent), 'full'); ?>
<img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('masthead')) ?>" />

<?php else: /*If no masthead for parent page either display this default pic*/ ?>
<img src="<?php bloginfo('template_directory'); ?>/images/default.jpg" alt=""> 
<?php endif; ?>
