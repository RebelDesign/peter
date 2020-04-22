<?php
/**
 * The Front Page
 */

get_header();

  while ( have_posts() ) : the_post(); ?>
    <?php Components\View::render('home', 'postlist'); ?>
	<?php endwhile;

get_footer(); ?>
