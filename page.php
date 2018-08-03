<?php
get_header(); ?>
	<div class="App-body">
		<div>
			<div class="ContentWrapper">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					?>
					<div class="">
						<h2 class=""><?php the_title() ?></h2></div>
					<div class="">
						<?php the_content() ?>
					</div>
					<?php

				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
<?php get_footer();