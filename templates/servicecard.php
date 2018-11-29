<article <?php post_class('postcard'); ?>>
    <figure class="postcard__thumb">
          
    </figure>  
  <header class="postcard__header">
    <h2 class="postcard__title">
        <?php if(is_sticky()) : ?>
          <span class="postcard__label postcard__label--featured"><svg class="icon"><use xlink:href="#icon-announcement"></use></svg></span>
        <?php endif; ?>
        <?php if( get_post_format()=='gallery'  ) : ?>
          <span class="postcard__label postcard__label--gallery">
            <svg class="icon"><use xlink:href="#icon-photo"></use></svg>
          </span>
        <?php elseif( get_post_format()=='video'  ) : ?>
          <span class="postcard__label postcard__label--video">
            <svg class="icon"><use xlink:href="#icon-film"></use></svg>
          </span>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
  </header>
  <div class="postcard__excerpt">
    <?php the_excerpt(); ?>
  </div>
  <a class="button tiny success" href="<?php the_permalink(); ?>">Részletek</a>
</article>
