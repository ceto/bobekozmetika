<article <?php post_class(); ?>>
    <header class="posthead ">
        <div class="grid-container">
            <div class="grid-x grid-margin-x align-center">
                <div class="large-9 xxlarge-8 cell">
                    <div class="posthead__content">
                        <?php
                            the_post_thumbnail('medium_large');
                        ?>
                        <h1 class="posthead__title text-center">
                        <?php if (is_single()):  ?>
                        <?php the_title(); ?>
                        <?php else: ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                        </h1>
                        <div class="posthead__meta text-center">
                            <?php get_template_part('templates/post-meta'); ?>
                        </div>
                        <?php if (has_excerpt()) : ?>
                            <div class="posthead__lead lead"><?php the_excerpt(); ?></div>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-9 xxlarge-8 cell">
                <div class="post__content bodycopy">
                    <?php the_content(); ?>
                </div>
                <footer class="post__footer ps ps--narrow">
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                    <?php get_template_part('/templates/dlcage' ); ?>
                    <?php get_template_part('/templates/postscage' ); ?>
                </footer>
                <?php comments_template('/templates/comments.php'); ?>
            </div>
        </div>
    </div>

</article>
<?php // get_template_part( '/templates/breaking'); ?>