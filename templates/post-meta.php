<?php if (is_singular('teammember') ) : ?>
<?php the_field('designation'); ?>
<?php else: ?>
Közzétéve:
<time class="updated" datetime="<?= get_post_time('c', true); ?>">
<?= get_the_date(); ?>
</time>
<?php endif; ?>