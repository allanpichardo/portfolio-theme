<?php
get_header(); ?>
    <div class="App-body">
        <div>
            <div class="ContentWrapper">
                <div class="ArticleList">
                    <ul>
	                <?php
	                if ( have_posts() ) :

		                /* Start the Loop */
		                while ( have_posts() ) : the_post();

			                ?>
			                <li><a href="<?php the_permalink(); ?>">
                                <div class="Preview" style="background: url(<?php the_post_thumbnail() ?>) no-repeat center center fixed;background-size:cover;">
                                    <h3><?php the_title() ?></h3>
                                    <div>
                                        <?php the_excerpt() ?>
                                    </div>
                                </div>
                            </a></li>
                            <li>
                                <span class="background_animated_lines"></span>
                            </li>
                            <?php

		                endwhile;

		                the_posts_pagination( array(
			                'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
			                'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
			                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
		                ) );

	                else :

                        ?><div></div><?php

	                endif;
	                ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();