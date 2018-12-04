<header class="kepzeshead">
        <figure class="kepzeshead__fig">
            <div class="kepzeshead__imgwrap">
                <?php 
                    $term = get_queried_object();

                    if ($banner = get_field('banner', $term) ) :?>
                    <?= wp_get_attachment_image( $banner[ID], 'medium' ) ?>
                <?php else: ?>
                    <img class="kepzeshead__img" src="<?= get_stylesheet_directory_uri().'/dist/images/nyitolap-stolen.jpg' ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
        </figure>
        <div class="grid-container">
            <div class="grid-x grid-margin-x align-center text-center">
                <div class="cell xlarge-10 xxlarge-9">
                    <div class="kepzeshead__content">
                        <p class="kepzeshead__servicetype"><a href="<?= get_the_permalink(519) ?>">Szolgáltatások</a></p>
                        <h1 class="kepzeshead__title"><?= $term->name; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="grid-container ps ps--notop">
    <div class="grid-x grid-margin-x align-center">
        <div class="xlarge-10 xxlarge-9 cell">
            <div class="ps ps--narrow">
                <div class="lead"><?php echo wpautop($term->description); ?></div>
            </div>
            <div class="grid-x grid-margin-x grid-margin-y tablet-up-2 large-up-2">
                <?php while (have_posts()) : the_post(); ?>
                <div class="cell">
                <?php get_template_part('templates/kepzescard' ); ?>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php the_posts_navigation(); ?>
    </div>
</div>