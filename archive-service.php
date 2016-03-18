<?php
/**
 * @package myxon
 * @since 1.0
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-8-12">
    <div id="content" class="site-content pad-right" role="main">
      <h1><?php _e( 'Services', 'myxon' ); ?></h1>
      <!-- slider -->
      <div class="column">
        <?php
          $args = array(
            'post_type'               => 'service',
            'posts_per_archive_page'  => -1,
            'order'                   => 'ASC',
            'orderby'                 => 'title'
          );

          $query = new WP_Query( $args );
          
        while( $query->have_posts() ) : $query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <div class="col-4-12 pad-left">
    <div class="uk-panel uk-panel-box">
      <ul class="widget-page-list">
        <?php 
          $args = array(
            'post_type' => 'service',
            'title_li'  => '<h3> '. __( 'Services' ) .' </h3>'
          );
          wp_list_pages( $args ); 
        ?>
      </ul>
    </div>
</div>
</div>
<?php get_footer(); ?>