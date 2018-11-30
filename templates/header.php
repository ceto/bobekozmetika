<section class="toprow show-for-tablet">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell">
                <a href="#" class="toprow__action">Kapcsolat</a>
                <nav class="toprow__nav">
                    <?php
                    if (has_nav_menu('secondary_navigation')) :
                wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'menu menu--student', 'items_wrap' => '<ul class="%2$s">%3$s<li class="menu-item menu-facebook menu-item--icon"><a href="#" target="_blank"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use></svg></a></li></ul>']);
                endif;
                ?>
            </nav>
        </div>
    </div>
</div>
</section>
<header class="banner">
<div class="banner__top">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="auto cell">
                <div class="banner__branding">
                    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                        <div class="brand__logo"><svg class="icon"><use xlink:href="#icon-logo"></use></svg></div>
                        <span class="brand__name">Böbe Kozmetika<span> Pesterzsébet</span></span>
                        <span class="brand__descr">Budapest 12. kerület &middot; Vörösmarty utca 28/C</span>
                    </a>
                </div>
            </div>
            <div class="shrink cell show-for-tablet">
                <nav class="banner__nav">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu dropdown menu--main', 'items_wrap' => '<ul class="%2$s" data-dropdown-menu data-click-open="true" data-disable-hover="true">%3$s</ul>']);
                endif;
                ?>
                </nav>
            </div>
            <div class="shrink cell hide-for-tablet">
                <button class="menutoggler" data-open="mobilemodal">Menü</button>
            </div>
        </div>
    </div>
</div>
</header>