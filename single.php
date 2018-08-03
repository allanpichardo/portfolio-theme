<?php
get_header(); ?>
    <div class="App-body">
        <div>
            <div class="ContentWrapper">
	            <?php
	            /* Start the Loop */
	            while ( have_posts() ) : the_post();

		            ?>
                    <div class="Article"><img src="<?php the_post_thumbnail() ?>" alt="">
                        <h2 class="ArticleTitle"><?php the_title() ?></h2></div>
                    <div class="Article-body">
                        <?php the_content() ?>
                    </div>
                    <?php

		            the_post_navigation( array(
			            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
			            'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
		            ) );

	            endwhile; // End of the loop.
	            ?>
            </div>
        </div>
    </div>
<?php get_footer();