<?php
/**
 * The component that handles the post loop.
 */
?>
<article <?php post_class(); ?> >

	<h1><?php the_title(); ?></h1>
	<div class="row">
		<h4> Author: <?php echo get_field('complaint_author'); ?> </h4>
		<p> <?php get_the_date(); ?>
	</div>

	<?php the_post_thumbnail(); ?>

	<?php the_content(); ?>
	<?php Components\View::render('post', 'share'); ?>
	<br>
	<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
</article>
