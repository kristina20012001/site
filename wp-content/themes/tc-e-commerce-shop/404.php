C<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package TC E-Commerce Shop
 */

get_header(); ?>
	<div id="content-aa">
		<div class="container">
            <div class="page-content">
				<h1><?php esc_html_e( '404 Not Found', 'tc-e-commerce-shop' ); ?></h1>
				<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip;', 'tc-e-commerce-shop' ); ?></p>
				<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'tc-e-commerce-shop' ); ?></p>
				<div class="read-moresec">
            		<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Back to Home Page', 'tc-e-commerce-shop' ); ?></a>
				</div>
				<div class="clearfix"></div>
            </div>
		</div>
	</div>
<?php get_footer(); ?>