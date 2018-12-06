<?php
/**
 * TC E-Commerce Shop Theme Customizer
 *
 * @package TC E-Commerce Shop
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tc_e_commerce_shop_customize_register( $wp_customize ) {

	/* Custom panel type - used for multiple levels of panels */
	if ( class_exists( 'WP_Customize_Panel' ) ) {

		/**
		 * Class TC_E_Commerce_Shop_WP_Customize_Panel
		 */
		class TC_E_Commerce_Shop_WP_Customize_Panel extends WP_Customize_Panel {

			/**
			 * Panel
			 *
			 * @var $panel string Panel
			 */
			public $panel;

			/**
			 * Panel type
			 *
			 * @var $type string Panel type.
			 */
			public $type = 'tc_e_commerce_shop_panel';

			/**
			 * Form the json
			 */
			public function json() {

				$array                   = wp_array_slice_assoc(
					(array) $this, array(
						'id',
						'description',
						'priority',
						'type',
						'panel',
					)
				);
				$array['title']          = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
				$array['content']        = $this->get_content();
				$array['active']         = $this->active();
				$array['instanceNumber'] = $this->instance_number;

				return $array;

			}

		}

	}

	$wp_customize->register_panel_type( 'TC_E_Commerce_Shop_WP_Customize_Panel' );

	/**
	 * Upsells
	 */
	load_template( trailingslashit( get_template_directory() ) . 'inc/class-customizer-theme-info-control.php' );

	$wp_customize->add_section(
		'tc_e_commerce_shop_theme_info_main_section', array(
			'title'    => __( 'View PRO version', 'tc-e-commerce-shop' ),
			'priority' => 1,
		)
	);
	$wp_customize->add_setting(
		'tc_e_commerce_shop_theme_info_main_control', array(
			'sanitize_callback' => 'esc_html',
		)
	);

	$wp_customize->add_control(
		new TC_E_Commerce_Shop_Theme_Info(
			$wp_customize, 'tc_e_commerce_shop_theme_info_main_control', array(
				'section'     => 'tc_e_commerce_shop_theme_info_main_section',
				'priority'    => 100,
				'options'     => array(
					esc_html__( 'Enable-Disable options on every section', 'tc-e-commerce-shop' ),
					esc_html__( 'Background Color & Image Option', 'tc-e-commerce-shop' ),
					esc_html__( '100+ Font Family Options', 'tc-e-commerce-shop' ),
					esc_html__( 'Advanced Color options', 'tc-e-commerce-shop' ),
					esc_html__( 'Translation ready', 'tc-e-commerce-shop' ),
					esc_html__( 'Gallery, Banner, Post Type Plugin Functionality', 'tc-e-commerce-shop' ),
					esc_html__( 'Integrated Google map', 'tc-e-commerce-shop' ),
					esc_html__( '1 Year Free Support', 'tc-e-commerce-shop' ),
				),
				'button_url'  => esc_url( 'https://www.themescaliber.com/premium/multipurpose-ecommerce-wordpress-theme' ),
				'button_text' => esc_html__( 'View PRO version', 'tc-e-commerce-shop' ),
			)
		)
	);

	$font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Kavoon' =>'Kavoon',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//add home page setting pannel
	$wp_customize->add_panel( 'tc_e_commerce_shop_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'tc-e-commerce-shop' ),
	    'description' => __( 'Description of what this panel does.', 'tc-e-commerce-shop' )
	) );

	//Color / Font Pallete
	$wp_customize->add_section( 'tc_e_commerce_shop_typography', array(
    	'title'      => __( 'Color / Font Pallete', 'tc-e-commerce-shop' ),
		'priority'   => 30,
		'panel' => 'tc_e_commerce_shop_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'tc_e_commerce_shop_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tc_e_commerce_shop_paragraph_color', array(
		'label' => __('Paragraph Color', 'tc-e-commerce-shop'),
		'section' => 'tc_e_commerce_shop_typography',
		'settings' => 'tc_e_commerce_shop_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('tc_e_commerce_shop_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tc_e_commerce_shop_paragraph_font_family', array(
	    'section'  => 'tc_e_commerce_shop_typography',
	    'label'    => __( 'Paragraph Fonts','tc-e-commerce-shop'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('tc_e_commerce_shop_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_typography',
		'setting'	=> 'tc_e_commerce_shop_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tc_e_commerce_shop_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tc_e_commerce_shop_atag_color', array(
		'label' => __('"a" Tag Color', 'tc-e-commerce-shop'),
		'section' => 'tc_e_commerce_shop_typography',
		'settings' => 'tc_e_commerce_shop_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('tc_e_commerce_shop_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tc_e_commerce_shop_atag_font_family', array(
	    'section'  => 'tc_e_commerce_shop_typography',
	    'label'    => __( '"a" Tag Fonts','tc-e-commerce-shop'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tc_e_commerce_shop_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tc_e_commerce_shop_li_color', array(
		'label' => __('"li" Tag Color', 'tc-e-commerce-shop'),
		'section' => 'tc_e_commerce_shop_typography',
		'settings' => 'tc_e_commerce_shop_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('tc_e_commerce_shop_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tc_e_commerce_shop_li_font_family', array(
	    'section'  => 'tc_e_commerce_shop_typography',
	    'label'    => __( '"li" Tag Fonts','tc-e-commerce-shop'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'tc_e_commerce_shop_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tc_e_commerce_shop_h1_color', array(
		'label' => __('H1 Color', 'tc-e-commerce-shop'),
		'section' => 'tc_e_commerce_shop_typography',
		'settings' => 'tc_e_commerce_shop_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('tc_e_commerce_shop_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tc_e_commerce_shop_h1_font_family', array(
	    'section'  => 'tc_e_commerce_shop_typography',
	    'label'    => __( 'H1 Fonts','tc-e-commerce-shop'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('tc_e_commerce_shop_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_h1_font_size',array(
		'label'	=> __('H1 Font Size','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_typography',
		'setting'	=> 'tc_e_commerce_shop_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'tc_e_commerce_shop_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tc_e_commerce_shop_h2_color', array(
		'label' => __('h2 Color', 'tc-e-commerce-shop'),
		'section' => 'tc_e_commerce_shop_typography',
		'settings' => 'tc_e_commerce_shop_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('tc_e_commerce_shop_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tc_e_commerce_shop_h2_font_family', array(
	    'section'  => 'tc_e_commerce_shop_typography',
	    'label'    => __( 'h2 Fonts','tc-e-commerce-shop'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('tc_e_commerce_shop_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_h2_font_size',array(
		'label'	=> __('h2 Font Size','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_typography',
		'setting'	=> 'tc_e_commerce_shop_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'tc_e_commerce_shop_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tc_e_commerce_shop_h3_color', array(
		'label' => __('h3 Color', 'tc-e-commerce-shop'),
		'section' => 'tc_e_commerce_shop_typography',
		'settings' => 'tc_e_commerce_shop_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('tc_e_commerce_shop_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tc_e_commerce_shop_h3_font_family', array(
	    'section'  => 'tc_e_commerce_shop_typography',
	    'label'    => __( 'h3 Fonts','tc-e-commerce-shop'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('tc_e_commerce_shop_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_h3_font_size',array(
		'label'	=> __('h3 Font Size','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_typography',
		'setting'	=> 'tc_e_commerce_shop_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'tc_e_commerce_shop_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tc_e_commerce_shop_h4_color', array(
		'label' => __('h4 Color', 'tc-e-commerce-shop'),
		'section' => 'tc_e_commerce_shop_typography',
		'settings' => 'tc_e_commerce_shop_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('tc_e_commerce_shop_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tc_e_commerce_shop_h4_font_family', array(
	    'section'  => 'tc_e_commerce_shop_typography',
	    'label'    => __( 'h4 Fonts','tc-e-commerce-shop'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('tc_e_commerce_shop_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_h4_font_size',array(
		'label'	=> __('h4 Font Size','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_typography',
		'setting'	=> 'tc_e_commerce_shop_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'tc_e_commerce_shop_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tc_e_commerce_shop_h5_color', array(
		'label' => __('h5 Color', 'tc-e-commerce-shop'),
		'section' => 'tc_e_commerce_shop_typography',
		'settings' => 'tc_e_commerce_shop_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('tc_e_commerce_shop_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tc_e_commerce_shop_h5_font_family', array(
	    'section'  => 'tc_e_commerce_shop_typography',
	    'label'    => __( 'h5 Fonts','tc-e-commerce-shop'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('tc_e_commerce_shop_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_h5_font_size',array(
		'label'	=> __('h5 Font Size','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_typography',
		'setting'	=> 'tc_e_commerce_shop_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'tc_e_commerce_shop_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tc_e_commerce_shop_h6_color', array(
		'label' => __('h6 Color', 'tc-e-commerce-shop'),
		'section' => 'tc_e_commerce_shop_typography',
		'settings' => 'tc_e_commerce_shop_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('tc_e_commerce_shop_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tc_e_commerce_shop_h6_font_family', array(
	    'section'  => 'tc_e_commerce_shop_typography',
	    'label'    => __( 'h6 Fonts','tc-e-commerce-shop'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('tc_e_commerce_shop_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_h6_font_size',array(
		'label'	=> __('h6 Font Size','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_typography',
		'setting'	=> 'tc_e_commerce_shop_h6_font_size',
		'type'	=> 'text'
	));

	//Layouts
	$wp_customize->add_section( 'tc_e_commerce_shop_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'tc-e-commerce-shop' ),
		'priority'   => null,
		'panel' => 'tc_e_commerce_shop_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('tc_e_commerce_shop_theme_options',array(
	        'default' => __('Right Sidebar','tc-e-commerce-shop'),
	        'sanitize_callback' => 'tc_e_commerce_shop_sanitize_choices'
	)   );
	$wp_customize->add_control('tc_e_commerce_shop_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section','tc-e-commerce-shop'),
	        'section' => 'tc_e_commerce_shop_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','tc-e-commerce-shop'),
	            'Right Sidebar' => __('Right Sidebar','tc-e-commerce-shop'),
	            'One Column' => __('One Column','tc-e-commerce-shop'),
	            'Three Columns' => __('Three Columns','tc-e-commerce-shop'),
	            'Four Columns' => __('Four Columns','tc-e-commerce-shop'),
	            'Grid Layout' => __('Grid Layout','tc-e-commerce-shop')
	        ),
	    )
    );

    //Topbar
	$wp_customize->add_section('tc_e_commerce_shop_topbar',array(
		'title'	=> __('Top Header','tc-e-commerce-shop'),
		'description'	=> __('Add Header Content here','tc-e-commerce-shop'),
		'priority'	=> null,
		'panel' => 'tc_e_commerce_shop_panel_id',
	));

    $wp_customize->add_setting('tc_e_commerce_shop_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tc_e_commerce_shop_mail',array(
		'label'	=> __('Email','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar',
		'setting'	=> 'tc_e_commerce_shop_mail',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('tc_e_commerce_shop_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tc_e_commerce_shop_call',array(
		'label'	=> __('Phone','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar',
		'setting'	=> 'tc_e_commerce_shop_call',
		'type'	=> 'text'
	));

		$wp_customize->add_setting('tc_e_commerce_shop_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tc_e_commerce_shop_facebook_url',array(
		'label'	=> __('Add Facebook link','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar',
		'setting'	=> 'tc_e_commerce_shop_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tc_e_commerce_shop_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tc_e_commerce_shop_twitter_url',array(
		'label'	=> __('Add Twitter link','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar',
		'setting'	=> 'tc_e_commerce_shop_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tc_e_commerce_shop_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tc_e_commerce_shop_instagram_url',array(
		'label'	=> __('Add Instagram link','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar',
		'setting'	=> 'tc_e_commerce_shop_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tc_e_commerce_shop_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tc_e_commerce_shop_youtube_url',array(
		'label'	=> __('Add Youtube link','tc-e-commerce-shop'),
		'section'	=> 'tc_e_commerce_shop_topbar',
		'setting'	=> 'tc_e_commerce_shop_youtube_url',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'tc_e_commerce_shop_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'tc-e-commerce-shop' ),
		'priority'   => null,
		'panel' => 'tc_e_commerce_shop_panel_id'
	) );

	$wp_customize->add_setting('tc_e_commerce_shop_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'  => 'sanitize_text_field'
    ));
    $wp_customize->add_control('tc_e_commerce_shop_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','tc-e-commerce-shop'),
       'section' => 'tc_e_commerce_shop_slidersettings',
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'tc_e_commerce_shop_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'tc_e_commerce_shop_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'tc_e_commerce_shop_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'tc-e-commerce-shop' ),
			'section'  => 'tc_e_commerce_shop_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}	

	//Our Product
	$wp_customize->add_section('tc_e_commerce_shop_product',array(
		'title'	=> __('Featured Products','tc-e-commerce-shop'),
		'description'=> __('This section will appear below the slider.','tc-e-commerce-shop'),
		'panel' => 'tc_e_commerce_shop_panel_id',
	));

	$wp_customize->add_setting('tc_e_commerce_shop_sec1_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_sec1_title',array(
		'label'	=> __('Section Title','tc-e-commerce-shop'),
		'section'=> 'tc_e_commerce_shop_product',
		'setting'=> 'tc_e_commerce_shop_sec1_title',
		'type'=> 'text'
	));	

	$wp_customize->add_setting( 'tc_e_commerce_shop_servicesettings-page-', array(
		'default'           => '',
		'sanitize_callback' => 'tc_e_commerce_shop_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'tc_e_commerce_shop_servicesettings-page-', array(
		'label'    => __( 'Select Product Page', 'tc-e-commerce-shop' ),
		'section'  => 'tc_e_commerce_shop_product',
		'type'     => 'dropdown-pages'
	));

	//Footer
	$wp_customize->add_section('tc_e_commerce_shop_footer',array(
		'title'	=> __('Footer Text','tc-e-commerce-shop'),
		'description'=> __('This section will appear in the .','tc-e-commerce-shop'),
		'panel' => 'tc_e_commerce_shop_panel_id',
	));

	$wp_customize->add_setting('tc_e_commerce_shop_footer_copy',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('tc_e_commerce_shop_footer_copy',array(
		'label'	=> __('Text','tc-e-commerce-shop'),
		'section'=> 'tc_e_commerce_shop_footer',
		'setting'=> 'tc_e_commerce_shop_footer_copy',
		'type'=> 'text'
	));	
}
add_action( 'customize_register', 'tc_e_commerce_shop_customize_register' );


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class TC_E_Commerce_Shop_Customizer_Upsell {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager Customizer manager.
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . 'inc/ecommerce-customize-theme-info-main.php' );
		load_template( trailingslashit( get_template_directory() ) . 'inc/ecommerce-customize-upsell-section.php' );

		// Register custom section types.
		$manager->register_section_type( 'TC_E_Commerce_Shop_Customizer_Theme_Info_Main' );

		// Main Documentation Link In Customizer Root.
		$manager->add_section(
			new TC_E_Commerce_Shop_Customizer_Theme_Info_Main(
				$manager, 'tc-e-commerce-shop-theme-info', array(
					'theme_info_title' => __( 'Ecommerce Shop', 'tc-e-commerce-shop' ),
					'label_url'        => esc_url( 'https://themescaliber.com/doc/free-tc-ecommerce-shop/' ),
					'label_text'       => __( 'Documentation', 'tc-e-commerce-shop' ),
				)
			)
		);

		// Frontpage Sections Upsell.
		$manager->add_section(
			new TC_E_Commerce_Shop_Customizer_Upsell_Section(
				$manager, 'tc-e-commerce-shop-upsell-frontpage-sections', array(
					'panel'       => 'tc_e_commerce_shop_panel_id',
					'priority'    => 500,
					'options'     => array(
						esc_html__( 'Category Tab Section', 'tc-e-commerce-shop' ),
						esc_html__( 'New Arrivals section', 'tc-e-commerce-shop' ),
						esc_html__( 'Mens Product Section ', 'tc-e-commerce-shop' ),
						esc_html__( 'Discount Banner Section', 'tc-e-commerce-shop' ),
						esc_html__( 'Womens Product Section', 'tc-e-commerce-shop' ),
						esc_html__( 'New Arrival / Best Seller section', 'tc-e-commerce-shop' ),
						esc_html__( 'Blog section', 'tc-e-commerce-shop' ),
						esc_html__( 'Brands section', 'tc-e-commerce-shop' ),
						esc_html__( 'Testimonial section', 'tc-e-commerce-shop' ),
						esc_html__( 'Subscribe section', 'tc-e-commerce-shop' ),
					),
					'button_url'  => esc_url( 'https://www.themescaliber.com/premium/multipurpose-ecommerce-wordpress-theme' ),
					'button_text' => esc_html__( 'View PRO version', 'tc-e-commerce-shop' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'tc-e-commerce-shop-upsell-js', trailingslashit( get_template_directory_uri() ) . 'inc/js/ecommerce-customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'tc-e-commerce-shop-theme-info-style', trailingslashit( get_template_directory_uri() ) . 'inc/css/ecommerce-style.css' );
	}
}

TC_E_Commerce_Shop_Customizer_Upsell::get_instance();