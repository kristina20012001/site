/*----------------------------------------------------------------------------*/
/* TC E-Commerce Shop Responsive WordPress Theme */
/*----------------------------------------------------------------------------*/

Theme Name      :   TC E-Commerce Shop
Theme URI       :   https://www.themescaliber.com/free/ecommerce-shop-wordpress-theme
Version         :   0.3.8
Tested up to    :   WP 4.9.8
Author          :   ThemesCaliber
Author URI      :   https://www.themescaliber.com
license         :   GNU General Public License v3.0
License URI     :   http://www.gnu.org/licenses/gpl.html

/*----------------------------------------------------------------------------*/
/* About Author - Contact Details */
/*----------------------------------------------------------------------------*/

Email       	:   support@themescaliber.com

/*----------------------------------------------------------------------------*/
/* Features */
/*----------------------------------------------------------------------------*/

Manage Slider, services and footer from admin customizer theme setting section.

/*----------------------------------------------------------------------------*/
/* Home Page Setup Steps*/
/*----------------------------------------------------------------------------*/
Below are the steps to setup theme static page.
=========================================================

	Step 1. Create a page named as "home page" and select the template "Custom Home Page".

	Step 2. Go to customizer >> static front page >> check Static page, then select the page which you have added (for example "home page").

For Slider
==============

	Step 1. Create a page, add its title, content and featured image then publish it.

	Step 2. Go to customizer >> Theme Settings >> Slider settings >> here you can select the page which you have added.

For Featured Product
======================

	Step 1. Create a category in woocommerce products -> Category.

	Step 2. Add the product in this category.

	Step 3. Create a page, add the woocommerce category sortcode "[product_category category="category-name" columns="4"]" in the editor. Make sure it is in "Text" mode.

	Step 4. Go to customizer >> Theme Settings >> Featured Product >> here you can select the page which you have added. It will show that perticular categories products below the slider.


/*----------------------------------------------------------------------------*/
/* Theme Resources */
/*----------------------------------------------------------------------------*/

TC E-Commerce Shop WordPress Theme, Copyright 2017 ThemesCaliber
TC E-Commerce Shop is distributed under the terms of the GNU GPL

Theme is Built using the following resource bundles.

1 - Open Sans font - https://www.google.com/fonts/specimen/Open+Sans
	PT Sans font - https://fonts.google.com/specimen/PT+Sans
	Roboto font - https://fonts.google.com/specimen/Roboto
	License: Distributed under the terms of the Apache License, version 2.0 http://www.apache.org/licenses/LICENSE-2.0.html

2 - Images used from Pixabay.
	Pixabay provides images under CC0 license (https://creativecommons.org/about/cc0)

	Slider image, Copyright Republica
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://pixabay.com/en/camera-vintage-retro-old-820018/	

	Product image, Copyright 3179289
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://pixabay.com/en/fashion-woman-clothing-female-1623092/

	Product image, Copyright Hans
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://pixabay.com/en/sports-shoes-running-shoes-sneakers-115149/

	Product image, Copyright AkhilKokani
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://pixabay.com/en/goggles-black-white-background-1452181/

	Product image, Copyright alternativebig20
	License: CC0 1.0 Universal (CC0 1.0)
	Source: https://pixabay.com/en/watch-corsair-vostok-europe-a7-1687073/

3 -	CSS bootstrap.css
    -- Copyright 2011-2018 The Bootstrap Authors
    -- https://github.com/twbs/bootstrap/blob/master/LICENSE
    
    JS bootstrap.js
    -- Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
    -- https://github.com/twbs/bootstrap/blob/master/LICENSE

    CSS Font-awesome.css
    -- Font Awesome 5.0.0 by @davegandy - http://fontawesome.io - @fontawesome
 	   License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)

4 - Customizer Pro
    Source: https://github.com/justintadlock/trt-customizer-pro

TC E-Commerce Shop Free version
==========================================================
TC E-Commerce Shop Free version is compatible with GPL licensed.
For any help you can mail us at support[at]themescaliber.com

Changelog
-----------

Version 0.1
	-- Initial Version Released
	
Version 0.2
	-- Styling Done

Version 0.3
	-- Error resolved.

Version 0.3.1
	Below are following resolved points:-
	-- On the all_the_cool_cats issue, the problem wasn't with the name of the variables, but with the name of the transient itself(sorry if I wasn't clear enough on it). Variables inside of your functions you can name however you like, but since the transient will be stored in the database, just like post meta, it needs to have a custom prefix. So the name of your transient(what you pass to get_transient() and set_transient()) should be tc_e_commerce_shop_all_the_cool_cats.

    --It seems like you accidentally removed the template-parts folder, so now I can't check the sticky post fix :)

    --The fix for the IE style is to simply remove the dependency(as that's what preventing the style from being enqueued). Here's the updated code: wp_enqueue_style('tc-e-commerce-shop-ie', get_template_directory_uri().'/css/ie.css');

    --On the screenshot and image licensing, you need to declare all images that are part of the screenshot. So not just the background image, but also the camera image, the woman, shoes, watch and sunglasses.

    --Also on the screenshot - I don't feel like it follows the requirement of being a reasonable representation of what the theme can look like. I'm going to highlight the specific issues that I'm seeing in terms of the screenshot vs the theme installed locally:

    --There's no way in the theme to hide the site title
    --There's no way to change any of the content over the slider background. The title and "Learn More" are automatically inserted over the featured image and centered.
    --The arrows are still not exactly like in the screenshot.
    --The styling of the products is not the same as in the screenshot
    --The red border(left, right and bottom), as well as the black bar on the bottom do not exist in the actual theme

Version 0.3.2
	Below are following resolved points:-
	-- In template-tags.php, you're still calling delete_transient( 'all_the_cool_cats' ); instead of delete_transient( 'tc_e_commerce_shop_all_the_cool_cats' );

	-- The instructions on how to setup the home page should be part of the readme, or otherwise implemented for the end-user to see(you can add descriptions to the Customizer sections for example). Adding the instructions to the readme will be enough in general.

Version 0.3.3
	-- Tested Upto WordPress Version 4.9.1.
	-- Done Styling Changes.
	-- Remove Unwanted css code.
	-- Added Hooks In Theme.

Version 0.3.4
	-- Long Site Title and Site Description are handling properly. 
	-- Removed the archive template part form index.php , search.php and archive.php.
	-- Removed wp_reset_postdata(); form template-tag.php ex wp_get_attachment_image( $post->ID, $attachment_size ).
	-- Removed in-line style code from custom-header.php.

Version 0.3.5
	-- Woocommerce files updated.
	-- Fontawesome files updated.
	-- font code update in function.php file.
	-- Done the css customization. 

Version 0.3.6
	-- Update bootstrap.
	-- Added post format files and done the changes in template-part folder.	
	-- Removed the unused css.
	-- Removed all the font family and add new font in theme.
	-- update the translation file in language folder.
	-- Added js code in custom.js and delete the other js files.

Version 0.3.7
	-- Added color and font pallete.
	-- Resolved theme errors.

Version 0.3.8
	-- Changed the slider.
	-- Resolved theme errors.
	-- Updated woocommerce.
	-- Changed theme screenshot.
	-- Changed image urls.
	-- Updated pot file.