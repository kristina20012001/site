<?php
function magzee_premium_setting( $wp_customize ) {

	$wp_customize->add_section(
        'upgrade_premium',
        array(
            'title' 		=> __('Upgrade to Premium','benzer'),
            'description' 	=>'',
		)
    );
	
	/*=========================================
	Buttons
	=========================================*/
	
	class WP_Buttons_Customize_Control extends WP_Customize_Control {
	public $type = 'upgrade_premium';

	   function render_content() {
		?>
			<div class="premium_info">
				<ul>
					<li><a href="https://demo.speciatheme.com/pro/?theme=magzee" class="btn-green" target="_blank"><i class="dashicons dashicons-desktop info-icon"></i><?php _e( 'Premium Demo','magzee' ); ?> </a></li>
					
					<li><a href="https://speciatheme.com/magzee-premium/" class="btn-green"><i class="dashicons dashicons-visibility"></i><?php _e( 'View Details','magzee' ); ?> </a></li>
					
					<li><a href="https://speciatheme.com/magzee-premium/" class="btn-red" target="_blank"><i class="dashicons dashicons-cart"></i><?php _e( 'Buy Now','magzee' ); ?> </a></li>
					
					<li><a href="https://speciatheme.com/themes/" class="btn-green"><i class="dashicons dashicons-visibility"></i><?php _e( 'Our Themes','magzee' ); ?> </a></li>
					
					<li><a href="http://specia.ticksy.com/" class="btn-green" target="_blank"><i class="dashicons dashicons-sos"></i><?php _e( 'Support Center','magzee' ); ?> </a></li>
				</ul>
			</div>
			<div>
				<ul>
					<li><a href="http://docs.speciatheme.com/themes/magzee-free/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/documentation.png"></a></li>
					
					<li><a href="https://specia.ticksy.com/submit/#100012525" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/support.png"></a></li>
					
					<li><a href="https://wordpress.org/support/theme/magzee/reviews/#new-post" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rating.png"></a></li>
				</ul>
			</div>
		<?php
	   }
	}
	
		$wp_customize->add_setting(
			'premium_info_buttons',
			array(
			   'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'proficient_sanitize_text',
			)	
		);
	
		$wp_customize->add_control( new WP_Buttons_Customize_Control( $wp_customize, 'premium_info_buttons', array(
				'section' => 'upgrade_premium',
				'setting' => 'premium_info_buttons',
			))
		);
}
add_action( 'customize_register', 'magzee_premium_setting',999 );
?>