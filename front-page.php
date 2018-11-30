<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="grid-container full">
    <div class="grid-x">
        <div class="tablet-6">
            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/bobeportre_crop.jpg">
        </div>
        <div class="tablet-6">
            <div class="grid-x grid-padding-x">
                <div class="cell xxlarge-8">
                <br>
                    <h2>Egyéni igényekre szabott</h2>
                    <h1>Kozmetikai kezelések GIGI termékekkel</h1>
                    <div class="lead"><p>Várunk minden szépülni vágyó hölgyet bármilyen kozmetikai probléma megoldására – személyre szabott, egyéni szaktanácsadással egybekötve – és egy pihentető relaxálásra!</p></div>
                    <a href="<?= get_the_permalink(519) ?>" class="button success">Mutasd a szolgáltatásokat</a>  
                </div>
            </div>
       </div>

</div>     


<?php get_template_part( '/templates/breaking'); ?>
<div class="ps aps--bordered">
<div class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="medium-8 tablet-12 large-10 xxlarge-12 cell ps ps--narrow">
            <h1>A Kozmetika Szolgáltásai</h1>
            <div class="lead"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aperiam beatae dolore explicabo modi quia ea quibusdam exercitationem laborum maiores, reprehenderit accusamus dolor, quasi dignissimos repellendus architecto numquam, vel soluta! 
                        </p></div>
        </div>
    </div>

    <div class="grid-x grid-margin-x align-center">
        <div class="medium-8 tablet-12 large-10 xxlarge-12 cell">
                <?php
                    $the_servicetypes = get_terms( array(
                        'taxonomy' => 'service-type',
                        'hide_empty' => true,
                    ) );
                ?>
                    <div class="grid-x grid-margin-x grid-margin-y tablet-up-2 large-up-2 xxlarge-up-4">
                        <?php foreach ($the_servicetypes as $servicetype ) : ?>
                        <?php //setup_postdata( $post ); ?>
                        <div class="cell">

                            <?php get_template_part('templates/stypecard' ); ?>
                        </div>
                        <?php endforeach; ?>
                        <?php //wp_reset_postdata(); ?>
                    </div>
        </div>
    </div>
</div>
</div>
<?php get_template_part( '/templates/promo','tiles'); ?>
<section class="front__thecontent ps">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-8">
                <div class="ps ps--narrow ps--nobottom">
                    <header class="pagehead">
                        <h1 class="pagehead__title"><?php the_field('focim'); ?></h1>
                        <div class="lead pagehead__lead"><?php the_excerpt(); ?></div>
                        <?php the_content(); ?>
                    </header>
                </div>
                <div class="grid-x grid-margin-x">
                    <div class="tablet-6 large-6 cell">
                        <div class="ps ps--narrow ps--nobottom">
                            <?php the_field('kisblokk_1'); ?>
                        </div>
                    </div>
                    <div class="tablet-6 large-6 cell">
                        <div class="ps ps--narrow ps--nobottom">
                            <?php the_field('kisblokk_2'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-4 cell">
                <div class="ps ps--narrow ps--nobottom">
                    <section class="widget widget--blogcage">
                        <h3 class="widget__title">Hírek és aktualitások</h3>
                        <div class="widget__body">
                            <?php
                            $the_cageposts = new WP_Query( array(
                            'posts_per_page'      => 4,
                            'post__not_in'            => array($alreadyprinted),
                            //'ignore_sticky_posts' => 1,
                            )); ?>
                            <ul class="blogcage">
                                <?php while ( $the_cageposts->have_posts() ) : $the_cageposts->the_post(); ?>
                                <?php setup_postdata( $post ); ?>
                                <?php get_template_part('templates/blogcage' ); ?>
                                <?php endwhile; ?>
                            </ul>
                            <?php wp_reset_query(); ?>
                            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="readmore">Még több hír a blogon</a>
                        </div>
                    </section>
                    <?php dynamic_sidebar('sidebar-frontpage'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="front__bottom">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-8 cell">
                <?php get_template_part('templates/testimonials'); ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>