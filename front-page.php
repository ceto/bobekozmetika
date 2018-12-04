<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="ps ps--xlight ps--narrow ps--bordered">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y align-center">
            <div class="cell large-10 xlarge-6 frontintro__imgwrap" >
                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/bobeportre.jpg">
            </div>
            <div class="cell large-10 xlarge-6 frontintro">
                <div class="frontintro__content">
                    <p class="frontintro__pre">Egyéni igényekre szabott</p>
                    <h1 class="frontintro__main">Kozmetikai kezelések GIGI termékekkel</h1>
                    <p class="frontintro__post">Személyre szabott kezeléssel és egyéni szaktanácsadással várunk minden szépülni vágyó hölgyet Pesterzsébeten.</p>
                    <a href="<?= get_the_permalink(519) ?>" class="frontintro__action button dark hollow">Mutasd a szolgáltatásokat</a>  
                </div>


        </div>
        </div>
    </div>
</div>     


<?php //get_template_part( '/templates/breaking'); ?>
<div class="ps aps--bordered">
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="medium-8 medium-offset-2 tablet-12 tablet-offset-0 large-10 large-offset-1 xxlarge-9 xxlarge-offset-0 cell ps ps--narrow">
            <h1>Kozmetikai kezelések és szolgáltatások</h1>
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
            <div class="cell large-10 large-offset-1 xxlarge-8 xxlarge-offset-0">
                <div class="ps ps--narrow">
                    <header class="pagehead">
                        <h1 class="apagehead__title">Kozmetikánk bemutatkozik<?php //the_field('focim'); ?></h1>
                        <div class="lead pagehead__lead"><?php the_excerpt(); ?></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt provident, officiis ad aut eius iure asperiores ipsa ex corrupti assumenda eos? Asperiores perferendis non accusamus, natus nesciunt expedita quasi beatae?</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat obcaecati odio nemo repudiandae molestiae eos esse, quis fugit? Aut doloribus sapiente reprehenderit autem sint magnam laborum animi ab tempore nisi.</p>
                        <?php the_content(); ?>
                    </header>
                </div>
                <div class="grid-x grid-margin-x grid-margin-y small-up-2 tablet-up-3 large-up-3 ">
                    <div class="cell">
                        <?php //the_field('kisblokk_1'); ?>
                        <div class="membercard">
                            <figure class="membercard__fig">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/bobeportre.jpg">
                            </figure>
                            <h3 class="membercard__title">Vasné Gáspár Böbe</h3>
                            <p class="membercard__titulus">Mesterkozmetikus</p>
                        </div>


                    </div>
                    <div class="cell">
                        <?php //the_field('kisblokk_2'); ?>
                        <div class="membercard">
                            <figure class="membercard__fig">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/bobeportre.jpg">
                            </figure>
                            <h3 class="membercard__title">Nagy Tímea Alexandra</h3>
                            <p class="membercard__titulus">Szem és szempilla</p>
                        </div>
                    </div>
                    <div class="cell">
                        <?php //the_field('kisblokk_2'); ?>
                        <div class="membercard">
                            <figure class="membercard__fig">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/bobeportre.jpg">
                            </figure>
                            <h3 class="membercard__title">Ági Kovács</h3>
                            <p class="membercard__titulus">Száj és Orr</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-10 large-offset-1 xxlarge-4 xxlarge-offset-0 cell">
                <div class="ps ps--narrow ps--nobottom">
                <section class="pricetable">
                    <header class="pricetable__head">
                        <p>Lorem ipsum dolor</p>
                        <h2>Gépi kezelések</h2>
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
                    <footer class="pricetable__foot">
                        <a href="<?= get_the_permalink(32); ?>" class="button small hollow dark">Mutasd a teljes árlistát</a>
                    </footer>      
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