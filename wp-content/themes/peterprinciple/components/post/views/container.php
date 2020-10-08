<div class="container">
	<div class="row">
		<div class="col-12 col-md-8 mx-auto">
			<?php
				Components\View::render('post', get_post_format());
			?>
			<div class="d-flex">
				<div class="col-6">
					<?php
						if ( !empty(previous_post_link()) )  :
							echo previous_post_link();
						endif;
					?>
				</div>
				<div class="col-6">
					<?php
						if ( !empty(next_post_link()) )  :
							echo next_post_link();
						endif;
					?>
				</div>
			</div>
			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		</div>
	</div>
</div>
