<?php
/**
 * The template part for displaying slider
 *
 * @package TC E-Commerce Shop
 * @subpackage tc_e_commerce_shop
 * @since TC E-Commerce Shop 1.0
 */
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="postbox">
        <?php
          if ( ! is_single() ) {

            // If not a single post, highlight the video file.
            if ( ! empty( $video ) ) {
              foreach ( $video as $video_html ) {
                echo '<div class="entry-video">';
                  echo $video_html;
                echo '</div>';
              }
            };

          }; 
        ?>
        <div class="new-text">
            <div class="box-content">
                <h4><?php the_title();?></h4>
                <div class="metabox">
                    <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?></span>
                    <span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></span>
                    <span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','tc-e-commerce-shop'), __('0 Comments','tc-e-commerce-shop'), __('% Comments','tc-e-commerce-shop') ); ?></span>
                </div>
                <p><?php the_excerpt(); ?></p>
                <?php the_tags(); ?>
                <a href="<?php  the_permalink() ;?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read Full', 'tc-e-commerce-shop' ); ?>"><?php esc_html_e('Read Full','tc-e-commerce-shop'); ?></a>
            </div>
        </div>
        <div class="clearfix"></div> 
    </div> 
</div>