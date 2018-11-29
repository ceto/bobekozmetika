<div class="kepzescard">
    <figure class="kepzescard__ill">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail() ?>
        </a>
    </figure>
    <div class="kepzescard__body">
        <h3 class="kepzescard__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="kepzescard__kivonat"><?php the_excerpt() ?></div>
        <a class="kepzescard__action button tiny secondary" href="<?php the_permalink(); ?>">Részletek</a>
    </div>
</div>