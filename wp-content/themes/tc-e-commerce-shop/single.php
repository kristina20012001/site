<?php
/**
 * The Template for displaying all single posts.
 *
 * @package TC E-Commerce Shop
 */

get_header(); ?>
<div class="middle-align">
	<div class="container">
		<?php
            $left_right = get_theme_mod( 'tc_e_commerce_shop_theme_options','Right Sidebar');
            if($left_right == 'Left Sidebar'){ ?>
            <div class="row">
				<div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
				<div class="col-lg-8 col-md-8" id="content-aa">
					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/single-post');

		                // If comments are open or we have at least one comment, load up the comment template
		                if ( comments_open() || '0' != get_comments_number() )
		                    comments_template();
		                
		                if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
					endwhile; // end of the loop. ?>
		       	</div>
	       	</div>
	    <?php }else if($left_right == 'Right Sidebar'){ ?>
	    	<div class="row">
		       	<div class="col-lg-8 col-md-8" id="content-aa">
					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/single-post');

		                // If comments are open or we have at least one comment, load up the comment template
		                if ( comments_open() || '0' != get_comments_number() )
		                    comments_template();
		                
		                if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
					endwhile; // end of the loop. ?>
		       	</div>
				<div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
			</div>
		<?php }else if($left_right == 'One Column'){ ?>
			<div id="content-aa">
				<?php while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/single-post');

	                // If comments are open or we have at least one comment, load up the comment template
	                if ( comments_open() || '0' != get_comments_number() )
	                    comments_template();
	                
	                if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}
				endwhile; // end of the loop. ?>
	       	</div>
	    <?php }else if($left_right == 'Three Columns'){ ?>
	    	<div class="row">
		       	<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
		       	<div class="col-lg-6 col-md-6" id="content-aa">
					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/single-post');

		                // If comments are open or we have at least one comment, load up the comment template
		                if ( comments_open() || '0' != get_comments_number() )
		                    comments_template();
		                
		                if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
					endwhile; // end of the loop. ?>
		       	</div>
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
			</div>
		<?php }else if($left_right == 'Four Columns'){ ?>
			<div class="row">
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
		       	<div class="col-lg-3 col-md-3" id="content-aa">
					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/single-post');

		                // If comments are open or we have at least one comment, load up the comment template
		                if ( comments_open() || '0' != get_comments_number() )
		                    comments_template();
		                
		                if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
					endwhile; // end of the loop. ?>
		       	</div>
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
			</div>
        <?php }else if($left_right == 'Grid Layout'){ ?>
        	<div class="row">
				<div class="col-lg-8 col-md-8" id="content-aa">
					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/single-post');

		                // If comments are open or we have at least one comment, load up the comment template
		                if ( comments_open() || '0' != get_comments_number() )
		                    comments_template();
		                
		                if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
					endwhile; // end of the loop. ?>
		       	</div>
				<div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
			</div>
		<?php }else{ ?>
			<div class="row">
		       	<div class="col-lg-8 col-md-8" id="content-aa">
					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/single-post');
						
		                // If comments are open or we have at least one comment, load up the comment template
		                if ( comments_open() || '0' != get_comments_number() )
		                    comments_template();
		                
		                if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
					endwhile; // end of the loop. ?>
		       	</div>
				<div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
			</div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
</div>
<?php get_footer(); ?>