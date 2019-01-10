<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="ps ps--narrow">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y align-center">
            <div class="cell large-10 xlarge-6 frontintro__imgwrap" >
                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/bobeportre.jpg">
            </div>
            <div class="cell large-10 xlarge-6 frontintro">
                <div class="frontintro__content">
                    <p class="frontintro__pre">Egyéni igényekre szabott</p>
                    <h1 class="frontintro__main">Kozmetikai kezelések GIGI termékekkel</h1>
                    <p class="frontintro__post">Személyre szabott kezeléssel és egyéni szaktanácsadással várjuk a szépülni vágyó hölgyeket Pesterzsébeten.</p>
                    <a href="<?= get_the_permalink(519) ?>" class="frontintro__action button dark hollow">Mutasd a szolgáltatásokat</a>  
                </div>


        </div>
        </div>
    </div>
</div>     


<?php get_template_part( '/templates/breaking'); ?>


<section class="front__thecontent ps aps--bordered aps--xlight">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-justify">
            <div class="cell large-6 xlarge-7 xxlarge-8">
                <div class="ps ps--narrow">
                    <header class="sectionhead">
                        <h2>
                            <small>Pihentető-, relaxáló kezelések 25 éve.</small>
                            Kozmetikai üzletünket bemutatjuk
                        </h2>
                    </header>
                    <div class="lead"><?php the_excerpt(); ?></div>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="cell large-6 xlarge-5 xxlarge-4">
                <section class="pricetable">
                    <header class="pricetable__head">
                        <?php if ( $prtbl_subtitle=get_field('prtbl_subtitle') ) :?>
                        <p><?= $prtbl_subtitle ?></p>
                        <?php endif; ?>
                        <h2><?php the_field('prtbl_title') ?></h2>
                    </header>
                    <dl class="pricelist">
                        <?php while( have_rows('prices') ): the_row(); ?>
                            <dt <?= !get_sub_field('price')?'class="selector"':''; ?>>
                               <?php 
                                    $pritem=get_sub_field('title')."\n";
                                    if ( $description=get_sub_field('description')) {
                                        $pritem.= '<small>'.$description.'</small>'."\n";
                                    }
                               ?>
                                <?php if ( $link=get_sub_field('link') ): ?>
                                <a href="<?= $link['url']; ?>"><?= $pritem;?></a>
                                <?php else: ?><?= $pritem;?><?php endif; ?>
                            </dt>
                            <?php if ($price=get_sub_field('price')) : ?>
                            <dd>
                                <?php the_sub_field('price'); ?>
                                <?php
                                    if ( $label=get_sub_field('label')) {
                                        echo "\n".'<span>'.$label.'</span>'."\n";
                                    }
                                ?>
                            </dd>
                            <?php endif; ?>


                        <?php endwhile; ?>
                    </dl> 
                    <footer class="pricetable__foot">
                        <?php the_field('prtbl_footer') ?>
                        <a href="<?= get_the_permalink(32); ?>" class="button small hollow dark">Mutasd a teljes árlistát</a>
                    </footer>      
                </section>
                <?php dynamic_sidebar('sidebar-frontpage'); ?>
            </div>
        </div>
    </div>
</section>




<?php get_template_part( '/templates/promo','tiles'); ?>
<div class="ps">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-10 xlarge-9 xxlarge-12 cell ps ps--narrow">
                <header class="sectionhead">
                    <h2><small>Szépülni vagy fiatalodni szeretnél?</small>Ismerd meg szolgáltatásainkat</h2>
                </header>
                <div class="lead"><p>Egyéni problémákra és igényekre szabott kezelésekeinket GIGI termékekkel végezzük. Ezek hatásait kozmetikai gépi kezelésekkel fokozzuk. Szalonunk szolgáltatásait az alábbi négy fő csoportban találod meg. Klikkelj a részletekért.</p></div>
            </div>
        </div>

        <div class="grid-x grid-margin-x align-center">
            <div class="large-10 xlarge-9 xxlarge-12 cell">
                <?php
                    $the_servicetypes = get_terms( array(
                        'taxonomy' => 'service-type',
                        'hide_empty' => true,
                    ) );
                ?>
                <div class="grid-x grid-margin-x grid-margin-y medium-up-2 large-up-2 xxlarge-up-4 align-center">
                    <?php foreach ($the_servicetypes as $servicetype ) : ?>
                    <div class="cell">

                        <?php get_template_part('templates/stypecard' ); ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="front__bottom">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-8 cell">
                <?php get_template_part('templates/testimonials'); ?>
            </div>
        </div>
    </div>
</section>

<section id="team" class="ps aps--clight" data-magellan-target="team">

    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell">
                <header class="sectionhead text-center">
                    <h2><small>Szerettel várunk szalonunkban</small>Böbe és a kozmetikus lányok</h2>
                </header>
            </div>
            <div class="cell">
                <?php get_template_part( 'templates/home', 'members'); ?>
            </div>
        </div>
    </div>
        
</section>



<?php
    $image_ids = get_field('gallery', false, false);
    if( $image_ids ): ?>
    <section class="walk__gallery">
    <div class="grid-container">

        <div class="grid-x grid-margin-x">
            <div class="cell">
                <div id="slidernav" class="slidernav owl-nav"></div>
            </div>
        </div>
    </div>

        <div class="bupapslider">
            <div class="owl-carousel owl-slider">
                <?php foreach( $image_ids as $image_id ): ?>
                    <div class="bupapslider__item">
                        <?= wp_get_attachment_image( $image_id, 'medium_large', true, array( 'class' => 'bupapslider__img') ); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>
    <?php endif; ?>

<!-- <div class="ps ps--dark">
    <div class="grid-container">
        <div class="grid-x grid-margin-x text-center">
            <div class="cell ps">
                <h1>fotocsík</h1>
            </div>
        </div>
    </div>
</div> -->

<?php endwhile; ?>