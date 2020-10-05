<div class="container">

	<div class="row">
		<div class="col-12 col-md-8 mx-auto">
			<?php

			Components\View::render('post', get_post_format());

			// the_post_navigation();

			if ( !empty(next_post_link()) )  :
				echo next_post_link();
			endif;

			
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			?>
		</div>
	</div>

</div>
