<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-aa">
 *
 * @package TC E-Commerce Shop
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'tc-e-commerce-shop' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','tc-e-commerce-shop'); ?></a></div>
  <div class="topbar">
    <div class="container">
      <div class="baricon">
        <?php if( get_theme_mod( 'tc_e_commerce_shop_mail','' ) != '') { ?>
          <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_mail',__('support@example.com','tc-e-commerce-shop')) ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'tc_e_commerce_shop_call','' ) != '') { ?>
          <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('tc_e_commerce_shop_call',__('(518) 356-5373','tc-e-commerce-shop') )); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'tc_e_commerce_shop_facebook_url') != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'tc_e_commerce_shop_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'tc_e_commerce_shop_twitter_url') != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'tc_e_commerce_shop_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'tc_e_commerce_shop_instagram_url') != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'tc_e_commerce_shop_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'tc_e_commerce_shop_youtube_url') != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'tc_e_commerce_shop_youtube_url','' ) ); ?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        <?php } ?>
      </div>
    </div>
  </div>

  <div id="header">
    <div class="container">
      <div class="row">
        <div class="logo col-lg-3 col-md-3">
          <?php if( has_custom_logo() ){ tc_e_commerce_shop_the_custom_logo();
             }else{ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?> 
              <p class="site-description"><?php echo esc_html($description); ?></p>       
          <?php endif; }?>
        </div><?php /** logo **/ ?> 
        <div class="col-lg-9 col-md-9">
          <div class="menubox nav">
              <div class="mainmenu">
                <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
              </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>