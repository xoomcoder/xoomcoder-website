
<section>
    <h1>Recherche et Offres d'Emploi</h1>
    <p>Sur cette page, vous pourrez trouver des offres d'emploi géolocalisées et aussi publier votre annonce de recherche d'emploi.</p>
</section>

<section>
    <h2>Liste des annonces</h2>
    <?php View::show('blocnote') ?>
</section>

<section>
    <h2>Carte des annonces</h2>
    <div class="xmap" id="mapid"></div>
</section>

<link rel="stylesheet" href="assets/leaflet/leaflet.css">
<script type="module">
import * as L from './assets/leaflet/leaflet-src.esm.js';

let mymap = L.map('mapid').setView([46, 3], 5);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 10,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);

</script>