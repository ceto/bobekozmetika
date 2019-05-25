<?php
/**
* Template Name: Kapcsolat Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="ps ps--xlight">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell contactcontent">
                <div class="grid-x grid-margin-x">
                    <div class="cell medium-6 large-3">
                        <h2>Cím</h2>
                        <p><strong>Böbe Kozmetika - Pesterzsébet</strong><br />
                            H-1201 Budapest,<br />
                            Vörösmarty utca 28/C<br />
                        </p>
                        <p><strong>Nyitvatartás</strong><br>
                            Hétfő - Péntek: 08:00 - 20:00<br>
                            Szombat: 08:00 - 14:00*<br>
                            Vasárnap: Zárva<br><br>
                            <small>*hónap utolsó szombatján: Zárva</small>
                        </p>
                        <a href="#opop" class="button tiny">Részletes nyitvatartás</a>
                    </div>
                    <div class="cell medium-6 large-3">
                        <h2>Elérhetőség</h2>
                        <p><strong>Szalon:</strong> <a href="tel:+3612856354">+36 1 285 6354</a><br>
                            <strong>Böbe:</strong> <a href="tel:+36706020915">+36 70 602 0915</a><br>
                            <strong>Vivi:</strong> <a href="tel:+36202806367">+36 20 280 6367</a><br>
                        </p>
                        <p><strong>E-mail:</strong><br />
                            <a href="mailto:szalon@bobekozmetika.hu">szalon@bobekozmetika.hu</a>
                        </p>
                        <p><strong>És még:</strong><br />
                            <a href="https://www.facebook.com/bobekozmetika/" target="_blank" rel="noopener">Facebook</a>
                        </p>
                    </div>
                    <div class="cell medium-6 large-6">
                        <h2>Megközelítés</h2>
                        <p><strong>Határ úti metrótól:</strong> 66-os busszal.</p>
                        <p><strong>Kőbánya-Kispest metrómegállótól:</strong> 151-es busszal.</p>
                        <p><strong>Boráros téről</strong> 23 és 23E busszal.</p>
                        <p><strong>Pesterzsébet Városközpont megálló:</strong> 66, 23 és 23E buszok 10 perc séta</p>
                        <p><strong>Baross utca megálló</strong> 151-es Busz 5 perc séta</p>
                        <p><strong>Parkolás:</strong> Szalon előtt az utcán ingyenes.</p>
                        <p><small><a target="_blank" href="https://www.google.com/maps/dir/47.5050517,19.0546006/Budapest,+V%C3%B6r%C3%B6smarty+u.+28c,+1201/@47.4680585,19.0524314,13z/data=!3m1!4b1!4m18!1m7!3m6!1s0x4741c2aeb7808f2d:0xdcc761ab5c66d6a!2sBudapest,+V%C3%B6r%C3%B6smarty+u.+28c,+1201!3b1!8m2!3d47.434609!4d19.10463!4m9!1m1!4e1!1m5!1m1!1s0x4741c2aeb7808f2d:0xdcc761ab5c66d6a!2m2!1d19.10463!2d47.434609!3e0">útvonaltervezés…</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ps" id="opop" name="opop" >
    <div class="grid-container grid-container--narrow">
        <div class="grid-x grid-margin-x grid-margin-y align-center">
            <div class="medium-8 cell">
                <header class="sectionhead text-center">
                <h2>Hetek beosztása és munkarend <small>Ezen a héten a
                <?php
                    $weekNumber = date("W");
                    if($weekNumber&1) {
                        echo '<strong>páratlan heti</strong>';
                    } else {
                        echo '<strong>páros heti</strong>';
                    }
                ?>
                beosztás szerint dolgozunk.</small>
                </h2>
                </header>
            </div>
        </div>
        <div class="grid-x grid-margin-x grid-margin-y medium-up-2">
            <div class="cell">
                <h3 class="">Páros heti beosztás</h3>
                <table class="hover">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Délelőtt<br><small>(8:00 - 13:00)</small></th>
                            <th>Délután<br><small>(14:00 - 20:00)</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Hétfő</th><td>Böbe</td><td>Vivi</td>
                        </tr>
                        <tr>
                            <th>Kedd</th><td>Vivi</td><td>Böbe</td>
                        </tr>
                        <tr>
                            <th>Szerda</th><td>Böbe</td><td>Vivi</td>
                        </tr>
                        <tr>
                            <th>Csütörtök</th><td>Vivi</td><td>Böbe</td>
                        </tr>
                        <tr>
                            <th>Péntek</th><td>Böbe</td><td>Vivi</td>
                        </tr>
                        <tr>
                            <th>Szombat</th><td>Érdeklődj telefonon</td><td>Zárva</td>
                        </tr>
                        <tr>
                            <th>Vasárnap</th><td>Zárva</td><td>Zárva</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cell">
                <h3>Páratlan heti beosztás</h3>
                <table class="hover">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Délelőtt<br><small>(8:00 - 13:00)</small></th>
                            <th>Délután<br><small>(14:00 - 20:00)</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Hétfő</th><td>Vivi</td><td>Böbe</td>
                        </tr>
                        <tr>
                            <th>Kedd</th><td>Böbe</td><td>Vivi</td>
                        </tr>
                        <tr>
                            <th>Szerda</th><td>Vivi</td><td>Böbe</td>
                        </tr>
                        <tr>
                            <th>Csütörtök</th><td>Böbe</td><td>Vivi</td>
                        </tr>
                        <tr>
                            <th>Péntek</th><td>Vivi</td><td>Böbe</td>
                        </tr>
                        <tr>
                            <th>Szombat</th><td>Érdeklődj telefonon</td><td>Zárva</td>
                        </tr>
                        <tr>
                            <th>Vasárnap</th><td>Zárva</td><td>Zárva</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cell">
            <?php the_content(); ?>
                <!-- <h3 class="">Szombati nyitvatartás</h3>
                <table class="hover">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Délelőtt<br><small>(8:00 - 13:00)</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Január 5.</th><td>Böbe</td>
                        </tr>
                        <tr>
                            <th>Január 12.</th><td>Vivi</td>
                        </tr>
                        <tr>
                            <th>Január 19.</th><td>Vivi</td>
                        </tr>
                        <tr>
                            <th>Január 25.</th><td>Zárva</td>
                        </tr>
                    </tbody>
                </table> -->
            </div>
        </div>
    </div>
</div>
<div class="grid-container full">
    <div class="grid-x">
        <div class="medium-7 xlarge-8 axxlarge-9 cell mapcanvascell medium-order-2">
            <div class="mapcanvas" id="mapcanvas"></div>
        </div>
        <div class="medium-5 xlarge-4 axxlarge-3 ashow-for-tablet cell medium-order-1">
            <img class="mapphoto" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/bejarat.jpg" alt="">
        </div>
    </div>
</div>
<!-- Google MAps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT99lOn79TnwKX53VjwYSfmFvz97OYpwA"></script>
<script>
function initialize() {
var mapOptions = {
center: new google.maps.LatLng(47.434798, 19.104651),
zoom: 16,
zoomControl: true,
zoomControlOptions: {style: google.maps.ZoomControlStyle.DEFAULT,},
disableDoubleClickZoom: false,
mapTypeControl: true,
mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,},
scaleControl: true,
scrollwheel: false,
streetViewControl: true,
draggable: true,
overviewMapControl: true,
overviewMapControlOptions: {opened: false,},
mapTypeId: google.maps.MapTypeId.ROADMAP,
styles: [{featureType: "landscape",stylers: [{saturation: -100}, {lightness: 65}, {visibility: "on"}]}, {featureType: "poi",stylers: [{saturation: -100}, {lightness: 51}, {visibility: "simplified"}]}, {featureType: "road.highway",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "road.arterial",stylers: [{saturation: -100}, {lightness: 30}, {visibility: "on"}]}, {featureType: "road.local",stylers: [{saturation: -100}, {lightness: 40}, {visibility: "on"}]}, {featureType: "transit",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "administrative.province",stylers: [{visibility: "off"}]/** /},{featureType: "administrative.locality",stylers: [{ visibility: "off" }]},{featureType: "administrative.neighborhood",stylers: [{ visibility: "on" }]/**/}, {featureType: "water",elementType: "labels",stylers: [{visibility: "on"}, {lightness: -25}, {saturation: -100}]}, {featureType: "water",elementType: "geometry",stylers: [{hue: "#ffff00"}, {lightness: -25}, {saturation: -97}]}],
}
map = new google.maps.Map(document.getElementById('mapcanvas'), mapOptions);
//var image = '<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flag.png';
var myLatLng = new google.maps.LatLng(47.434798, 19.104651);
var officeMarker = new google.maps.Marker({
position: myLatLng,
map: map,
//icon: image,
animation: google.maps.Animation.DROP,
});
//officeMarker.setAnimation(google.maps.Animation.BOUNCE);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php endwhile; ?>
