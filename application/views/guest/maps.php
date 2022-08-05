<div class="section is-header bg-accent-dark img-blog overflow-hidden position-relative">
  <div class="container flex-horizontal position-relative">
    <script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />
    <div id="map"></div>
    <style type="text/css">
        #map {
            position: relative;
            width: 100%;
            height: 550px;
        }
    </style>
    <script>
        L.mapbox.accessToken = 'pk.eyJ1IjoiYXJpcG9uIiwiYSI6ImNrbjV3cmZ5NTA4aDUyd25zenk3MmlwYzgifQ.YbJ_Ir794eD8VlrVvpX64g';
        var map = L.mapbox.map('map')
        .setView([2.004180, 124.371678], 7)
        .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));
        <?php foreach ($maps as $key => $value) { ?>
            var marker = L.marker([<?= $value['latitude'] ?>, <?= $value['longitude'] ?>], {
                icon: L.mapbox.marker.icon({
                    'marker-color': '#9c89cc'
                })
            })

            .bindPopup("<strong><?= $value['nama_wisata'] ?></strong><br><img class='img-maps' src='<?= $value['img'] ?>'><br>")
            .addTo(map);   
        <?php } ?> 
    </script>
    <div class="gradient-overlay hidden-only-lg"></div>
</div>
<div class="section">

</div>