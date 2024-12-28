<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <style>
        #map { height: 600px; }
    </style>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<body>
    <div id="map"></div>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-0.3155398750904368, 117.1371634207888], 5);

        // Menambahkan tile OpenStreetMap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18, // Set maxZoom ke nilai default OpenStreetMap
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Data kabupaten dikirim dari controller
        var kabupaten = @json($list_kabupaten);
        console.log(kabupaten);

        // Tambahkan marker untuk setiap kabupaten
        kabupaten.forEach(function(kab) {
            if (kab.latitude && kab.longitude) { // Cek apakah koordinat valid
                var marker = L.marker([kab.latitude, kab.longitude]).addTo(map);
                marker.bindPopup(kab.name);
            } else {
                console.warn("Kabupaten tanpa koordinat:", kab.name);
            }
        });
    </script>
</body>
</html>
