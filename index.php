<?php
require_once('header.php');
?>
<!--TITRE SITE-->
<section id="img-bg">
<section id="titrelocation">
<div id="titresite">
<div id="titleglobal1" class=" titleglobal">
  <h1 class="title1 text-center ">bienvenue sur fbi</h1>
  <h1 class="title2 text-center ">find biere indicator</h1>
  <h5 class="title3 text-center "> Le site communautaire de la bière</h5>
</div>
</div>
</section>
<!--MAPS-->
<main id="maplocation">
<div id="map">
</div>
</section>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	<script type="text/javascript">
            var lat = 50.6371961;
            var lon = 3.062589;
            var macarte = null;
            function initMap() {
                macarte = L.map('map').setView([lat, lon], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
            }
            window.onload = function(){
		initMap(); 
            };
        </script>
</section>
</main>
<?php
require_once('footer.php');
?>
