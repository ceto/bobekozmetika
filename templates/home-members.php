<div id="membersblock" class="membersblock aps aps--narrow">
    <?php
        $args = array(
            'post_type' => array('teammember'),
            'order'               => 'ASC',
            'orderby'             => 'menu_order',
            'posts_per_page'         => -1,
        );
        $the_members = new WP_Query( $args );

    
    ?>

    <div class="membergrid grid-x grid-margin-x small-up-2 medium-up-3 large-up-4 align-center">
        <?php while ($the_members->have_posts()) : $the_members->the_post(); ?>
            <?php setup_postdata( $post ); ?>
            <div class="cell"><?php get_template_part('templates/membercard'); ?></div>
        <?php endwhile; wp_reset_postdata(); ?>   
    </div>
</div>



