<?php
/**
* Template Name: Árlista Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<header class="kepzeshead ">
    <figure class="kepzeshead__fig">
        <div class="kepzeshead__imgwrap">
            <?php if ( get_field('fejleckep') ) :?>
                <?php $image =  get_field('fejleckep'); s?>
                <?= wp_get_attachment_image( $image[ID], 'full' ) ?>
            <?php else: ?>
                <img class="kepzeshead__img" src="<?= get_stylesheet_directory_uri().'/dist/images/nyitolap-stolen.jpg' ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
    </figure>
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center text-center">
            <div class="cell xlarge-10 xxlarge-9 ">
                <div class="kepzeshead__content">
                    <h1 class="kepzeshead__title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="xlarge-10 xxlarge-9 cell">
            <div class="ps ps--narrow">
                <div class="lead"><?php the_excerpt(); ?></div>
                <div class="post__content bodycopy">
                    <?php the_content(); ?>
                </div>
                <?php
                    $the_servicetypes = get_terms( array(
                        'taxonomy' => 'service-type',
                        'hide_empty' => true,
                    ) );
                ?>
                <div class="ps ps--narrow">
                    <div class="grid-x grid-margin-x grid-margin-y tablet-up-2 large-up-2 xxlarge-up-2">
                        <?php foreach ($the_servicetypes as $servicetype ) : ?>
                        <div class="cell">

                            <div class="pricetable">
                                <header class="pricetable__head">
                                    <p>Lorem ipsum dolor</p>
                                    <h2><?= $servicetype->name; ?></h2>
                                </header>
                                <dl class="pricelist">
                                    <dt>IPL Bőrfiatalítás és pigmentfolt halványítás</dt>
                                    <dd>2.300 Ft<span>Akció</span></dd>
                                    <dt>Lorem arckezelés</dt>
                                    <dd>52.000 Ft</dd>
                                    <dt>Mikrodermabrációs arckezelés <span>Nyári aromaterápiával</span></dt>
                                    <dd>72.500 Ft<span>Új kezelés</span></dd>
                                    <dt>IPL Bőrfiatalítás és pigmentfolt halványítás</dt>
                                    <dd>2.300 Ft</dd>
                                    <dt>Lorem arckezelés</dt>
                                    <dd>52.000 Ft</dd>
                                    <dt>Tű nélküli mezoterápia <span>Lorem ipsum dolor sit amet</span></dt>
                                    <dd>22.000 Ft</dd>
                                    <dt>Lézeres archalványítás</dt>
                                    <dd>18.600 Ft</dd>
                                </dl> 
                          
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <footer class="post__footer">
                    <?php get_template_part('/templates/postscage' ); ?>
                    <?php get_template_part('/templates/dlcage' ); ?>
                </footer>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>