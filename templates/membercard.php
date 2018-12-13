<article <?php post_class('membercard'); ?>>
        <figure class="membercard__fig">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium_large'); ?>
                <?php else: ?>
                    <img src="http://placehold.it/768x768" alt="">
                <?php endif; ?>
            </a>
        </figure>
        <header class="membercard__data">
            <h2 class="membercard__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <?php if ( $titulus=get_field('titulus') ) :?>
                <p class="membercard__titulus"><?= $titulus ?></p>
                <?php else: ?>
                <p class="membercard__titulus">Kozmetikus</p>

            <?php endif; ?>
            <div class="membercard__text">
                <?= wpautop(get_the_excerpt(), false); ?>
            </div>
        </header>
        
</article>
