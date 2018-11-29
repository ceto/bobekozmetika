<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <header class="kepzeshead">
        <figure class="kepzeshead__fig">
            <div class="kepzeshead__imgwrap">
                <?php 
                    $terms = get_the_terms( $post->ID, 'service-type' );
                    $term = array_pop($terms);

                    if ($banner = get_field('banner', $term) ) :?>
                    <?= wp_get_attachment_image( $banner[ID], 'full' ) ?>
                <?php else: ?>
                    <img class="kepzeshead__img" src="<?= get_stylesheet_directory_uri().'/dist/images/nyitolap-stolen.jpg' ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
        </figure>
        <div class="grid-container">
            <div class="grid-x grid-margin-x align-right">
                <div class="cell large-8">
                    <div class="kepzeshead__content">
                        <p class="kepzeshead__servicetype"><a href="<?= get_term_link($term) ?>"><?= $term->name ?></a></p>
                        <h1 class="kepzeshead__title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="sthelper" class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-8 large-order-2 cell">
                <div class="ps ps--narrow">
                    <div class="lead"><?php the_excerpt(); ?></div>
                    <div class="kepzes__content bodycopy">
                        <?php the_content(); ?>
                    </div>
                    <footer class="post__footer">
                        <?php get_template_part( 'templates/recommend' ) ?>
                        <?php get_template_part('/templates/postscage' ); ?>
                        <?php get_template_part('/templates/dlcage' ); ?>
                    </footer>
                    <?php comments_template('/templates/comments.php'); ?>
                </div>
            </div>
            <div class="large-4 large-order-1 cell kepzes__navcell" data-sticky-container>
                <div class="ps ps--narrow sticky" data-sticky data-sticky-on="large" data-top-anchor="sthelper:top" data-btm-anchor="sthelper:bottom" data-options="marginTop:0;">
                    <nav class="kepzes__nav">
                        <h3 class="widget__title">Szolgáltatások ebben a kategóriában</h3>
                        <?php
                        $actid=get_the_id();
                        $the_kepzesek = new WP_Query( array(
                        'posts_per_page'      => -1,
                        'post_type' => array(service),
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'service-type',
                                'field'    => 'id',
                                'terms'    => $term->term_id,
                            ),
                        )
                        ));
                        ?>
                        <ul class="menu menu--side vertical">
                            <?php while ($the_kepzesek->have_posts() ) : $the_kepzesek->the_post(); ?>
                            <?php setup_postdata( $post ); ?>
                            <li <?= ($actid==get_the_id()?'class="is-active"':''); ?>><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                        <a class="readmore widget__readmore" href="<?= get_term_link($term)?>">Mutasd a részleteket</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endwhile; ?>
