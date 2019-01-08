<section class="toprow ashow-for-tablet">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="cell show-for-tablet tablet-auto">
                <nav class="toprow__nav">
                    <?php
                        if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--student', 'items_wrap' => '<ul class="%2$s">%3$s<li class="menu-item menu-facebook menu-item--icon"><a href="#" target="_blank"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use></svg></a></li></ul>']);
                    endif;
                    ?>
                </nav>
            </div>
            <div class="cell shrink">
                <select name="callus" id="callus" class="toprow__callus expanded" onChange="window.location.href=this.value;">
                    <option value="#">FOGLALJ IDŐPONTOT!</option>
                    <option value="tel:+3612856354">Szalon: +36 1 285 6354</option>
                    <option value="tel:+36706020915">Böbe: +36 70 602 0915</option>
                    <option value="tel:+36202806367">Vivi: +36 20 280 6367</option>
                    <option value="tel:+36304635540">Niki: +36 30 463 5540</option>

                </select>
            </div>
            <div class="cell hide-for-tablet text-right auto ">
                <button class="menutoggler" data-open="mobilemodal">Menü</button>
            </div>
    </div>
</div>
</section>
<header class="banner">
<div class="banner__top">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell text-center">
            
                <div class="banner__branding">
                    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                        <div class="brand__logo"><svg class="icon"><use xlink:href="#icon-logo"></use></svg></div>
                        <span class="brand__name">Böbe Kozmetika<span> Pesterzsébet</span></span>
                        <span class="brand__descr">Budapest 20. kerület &middot; Vörösmarty utca 28/C</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="banner__nav ashow-for-tablet">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center text-align-center">
            <div class="cell">
                <?php
                    if (has_nav_menu('secondary_navigation')) :
                wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'menu menu--main align-center', 'items_wrap' => '<ul class="%2$s">%3$s</ul>']);
                endif;
                ?>
            </div>
        </div>
    </div>
</nav>
</header>