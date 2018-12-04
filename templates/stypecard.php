<?php global $servicetype ?>
<section <?php post_class('postcard'); ?>>

  <header class="postcard__header">
  
    <h2 class="postcard__title">
        <a href="<?= get_term_link($servicetype) ?>"><?= $servicetype->name; ?></a>
    </h2>
    
  </header>
  <figure class="postcard__fig">
  <a href="<?= get_term_link($servicetype) ?>">
  <?php 
    if ( $banner = get_field('banner', $servicetype) ) {
        echo wp_get_attachment_image( $banner[ID], 'full' );
    }
    ?>
  </a>
</figure> 

   
  <div class="postcard__excerpt postcard__excerpt--kiem">
  <ul class="hlist">
    <?php 
        $the_services = new WP_Query( array(
            'posts_per_page'      => -1,
            'post_type' => array(service),
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'service-type',
                    'field'    => 'id',
                    'terms'    => $servicetype->term_id,
                ),
            ),
            ));
            while ($the_services->have_posts()) : $the_services->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>    
    <?php echo wpautop($servicetype->description); ?>
  </div>
  <a class="button tiny dark hollow" href="<?= get_term_link($servicetype) ?>">Mutasd a részleteket</a>
</section>
