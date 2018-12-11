<section class="promotiles">
    <div class="promotile">
        <figure class="promotile__bgimage">
            <a href="<?= get_field('promo_ctalink','option'); ?>">
                <?php $image =  get_field('promo_bgimg','option'); ?>
                <?= wp_get_attachment_image( $image[ID], 'full' ) ?>
            </a>
        </figure>
        <div class="promotile__inner">
            <p class="promotile__subtitle"><?= get_field('promo_subtitle','option'); ?></p>
            <h3 class="promotile__title"><?= get_field('promo_title','option'); ?></h3>
            <div class="promotile__lead">
                <p><?= get_field('promo_lead','option'); ?></p>
            </div>
            <a href="<?= get_field('promo_ctalink','option'); ?>" class="promotile__action button small light hollow "><?= get_field('promo_ctatext','option'); ?></a>
        </div>
    </div>
</section>