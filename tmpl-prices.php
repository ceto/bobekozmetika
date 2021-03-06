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
                <img class="kepzeshead__img" src="<?= get_stylesheet_directory_uri().'/dist/images/parallax-3.jpg' ?>" alt="<?php the_title(); ?>">
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
                                <?php if ( $prtbl_subtitle=get_field('prtbl_subtitle','service-type_'.$servicetype->term_id) ) :?>
                                <p><?= $prtbl_subtitle ?></p>
                                <?php endif; ?>
                                <h2><?= get_field('prtbl_title','service-type_'.$servicetype->term_id); ?></h2>
                                </header>
                                <dl class="pricelist">
                                    <?php while( have_rows('prices','service-type_'.$servicetype->term_id) ): the_row(); ?>
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
                                <?php if ( $prtbl_footer=get_field('prtbl_footer','service-type_'.$servicetype->term_id) ) :?>
                                <footer class="pricetable__foot">
                                    <?= $prtbl_footer ?>
                                </footer>
                                <?php endif; ?>      
                          
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
<?php get_template_part( '/templates/breaking'); ?>