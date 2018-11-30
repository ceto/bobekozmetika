<?php
    $the_testimonials = new WP_Query( array(
        'posts_per_page'      => -1,
        'post_type' => array(testimonial),
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ));

    $tc=$the_testimonials->found_posts;
?>

<div class="orbit" role="region" aria-label="Rólunk mondták" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
    <div class="orbit-wrapper">
        <!-- <div class="orbit-controls">
                        <button class="orbit-previous">
                    <svg class="icon"><use xlink:href="#icon-arrow-thin-left"></use></svg>
                    </button>
                    <button class="orbit-next">
                <svg class="icon"><use xlink:href="#icon-arrow-thin-right"></use></svg>
                </button>
            </div> -->

        <ul id="test-eq" class="orbit-container">
            <?php $iter=0; while ($the_testimonials->have_posts() ) : $the_testimonials->the_post();  ?>
                <?php setup_postdata( $post ); ?>
                <li class="orbit-slide <?= ($iter==0)?'is-active':''; ?>" >
                    <div>
                        <blockquote class="testimonial">
                            <cite><?php the_title(); ?></cite>
                            <?php the_content() ?>
                            
                        </blockquote>
                    </div>
                </li>
            <?php $iter++; endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
        <nav class="orbit-bullets">
            <button class="is-active" data-slide="0"></button>
            <?php for ($i=1; $i < $tc; $i++) : ?>
            <button data-slide="<?= $i ?>"></button>
            <?php endfor; ?>
        </nav>
    </div>
</div>
