// Leaflet map initialization
var map = L.map("mapid", {
  scrollWheelZoom: false,
}).setView([43.5403, -1.4828], 13);

// Adding a tile layer to the map
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  maxZoom: 15,
}).addTo(map);

// Adding a marker to the map
var marker = L.marker([43.5403, -1.4828]).addTo(map);
marker
  .bindPopup("<b>Tarnos</b><br>Interstices Sud Aquitaine<br>43.5403, -1.4828")
  .openPopup();
