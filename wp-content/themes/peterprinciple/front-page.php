<?php
/**
 * The Front Page
 */

get_header();


 // echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]');
// 
// $boss_complaints = new StdClass;
// //$boss_complaints = get_field('one_complaints');
// $boss_complaints = get_field('boss_complaints');
// Components\View::render('contact', 'home-contact', $boss_complaints);




  while ( have_posts() ) : the_post(); ?>

		<?php
		/**
		 * This is an example of how to use the component system
		 * Instead of StdClass, you can create your own classes to organize you structure
		 * @var StdClass
		 */

		// $object = new StdClass;
		// $object->foo = 'bar';

		// Components\View::render('component-name', 'view', $object);

		the_content();

		?>

	<?php endwhile;

get_footer(); ?>
