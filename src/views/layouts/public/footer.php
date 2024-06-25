    <footer id="footer">
      <div class="wrapper">
        <ul class="footer-nav">
          <li>&copy; <?= date('Y'); ?> - Tous droits réservés</li>
          <li><a href="https://fr.linkedin.com/in/alexandrabily" target="_blank" class="fa fa-linkedin"></a></li>
        </ul>
      </div>
    </footer>
    <script>
      // Leaflet map initialization
      var map = L.map('mapid', {
          scrollWheelZoom: false
      }).setView([43.5403, -1.4828], 13);

      // Adding a tile layer to the map
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
          maxZoom: 18,
      }).addTo(map);

      // Adding a marker to the map
      var marker = L.marker([43.5403, -1.4828]).addTo(map);
      marker.bindPopup("<b>Tarnos</b><br>Interstices Sud Aquitaine<br>").openPopup();

      // Show more news
      document.getElementById('show-more').addEventListener('click', function() {
        var hiddenNews = document.querySelectorAll('.news.hidden');
        hiddenNews.forEach(function(news) {
          news.classList.remove('hidden');
        });
        this.style.display = 'none';
      });
    </script>
  </body>
</html>