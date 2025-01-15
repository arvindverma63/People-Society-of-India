<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    // Initialize the map
    var map = L.map('map', {
        center: [26.4499, 80.3319], // Center of Kanpur
        zoom: 13, // Zoom level
        zoomControl: false // Disable zoom controls
    });

    // Add a tile layer for the background
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Kanpur locations with latitude, longitude, and label
    var locations = [
        { lat: 26.4499, lng: 80.3319, label: "Kanpur Central Railway Station" },
        { lat: 26.4724, lng: 80.3247, label: "Allen Forest Zoo (Kanpur Zoo)" },
        { lat: 26.4691, lng: 80.3432, label: "JK Temple" },
        { lat: 26.4525, lng: 80.3130, label: "Nana Rao Park" },
        { lat: 26.4638, lng: 80.3170, label: "Moti Jheel" }
    ];

    // Add markers to the map
    locations.forEach(location => {
        L.circleMarker([location.lat, location.lng], {
            color: '#3388ff', // Circle color
            fillColor: '#3388ff',
            fillOpacity: 0.8,
            radius: 10 // Size of the marker
        }).addTo(map).bindPopup(location.label);
    });
</script>
