<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package TC E-Commerce Shop
 */

get_header(); ?>

<?php do_action( 'tc_e_commerce_shop_above_slider' ); ?>

<?php if( get_theme_mod('tc_e_commerce_shop_slider_hide') != ''){ ?>
  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"> 
      <?php $pages = array();
        for ( $count = 1; $count <= 3; $count++ ) {
          $mod = intval( get_theme_mod( 'tc_e_commerce_shop_slidersettings_page' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $pages[] = $mod;
          }
        }
        if( !empty($pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>
      <div class="carousel-inner" role="listbox">
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h2><?php the_title(); ?></h2>
                <div class="more-btn">              
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('LEARN MORE','tc-e-commerce-shop'); ?></a>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      endif;?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
      </a>
    </div>  
    <div class="clearfix"></div>
  </section>
<?php }?>

<?php do_action( 'tc_e_commerce_shop_below_slider' ); ?>

<?php if( get_theme_mod('tc_e_commerce_shop_sec1_title') != ''){ ?>
  <section id="our-products">
  	<div class="container">
          <?php if( get_theme_mod('tc_e_commerce_shop_sec1_title') != ''){ ?>     
              <h3><?php echo esc_html(get_theme_mod('tc_e_commerce_shop_sec1_title',__('Men Products','tc-e-commerce-shop'))); ?></h3>
              <hr class="product">
          <?php }?>
  			<?php $pages = array();
  				$mod = intval( get_theme_mod( 'tc_e_commerce_shop_servicesettings-page-'));
  				if ( 'page-none-selected' != $mod ) {
  				  $pages[] = $mod;
  				}
  			if( !empty($pages) ) :
  			  $args = array(
  			    'post_type' => 'page',
  			    'post__in' => $pages,
  			    'orderby' => 'post__in'
  			  );
  			  $query = new WP_Query( $args );
  			  if ( $query->have_posts() ) :
  					while ( $query->have_posts() ) : $query->the_post(); ?>
  					    <div class="box-image">
  					        <p><?php the_content(); ?></p>
  					        <div class="clearfix"></div>
  					    </div>
  					<?php endwhile; ?>
  			  <?php else : ?>
  			      <div class="no-postfound"></div>
  			  <?php endif;
  			endif;
  		wp_reset_postdata();?>
  	    <div class="clearfix"></div>		
  	</div>
  </section>
<?php }?>

<?php do_action( 'tc_e_commerce_shop_below_product_section' ); ?>

<div class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
    	<?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>