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
    </script>
    <script>
      // Show more news
      document.getElementById('show-more').addEventListener('click', function() {
        var hiddenNews = document.querySelectorAll('.news.hidden');
        for (var i = 0; i < 2; i++) {
          hiddenNews[i].classList.remove('hidden');
        }
        if (hiddenNews.length <= 2) {
          this.style.display = 'none';
        }
      });
    </script>
    <script>
      // Search news
      document.getElementById('search').addEventListener('input', function() {
        var filter = this.value.toLowerCase();
        var newsList = document.getElementById('news-list');
        var newsItems = newsList.getElementsByTagName('li');

        for (var i = 0; i < newsItems.length; i++) {
          var title = newsItems[i].getElementsByClassName('title-new')[0].innerText.toLowerCase();
          var content = newsItems[i].getElementsByTagName('p')[1].innerText.toLowerCase();

          if (title.indexOf(filter) > -1 || content.indexOf(filter) > -1) {
            newsItems[i].style.display = '';
          } else {
            newsItems[i].style.display = 'none';
          }
        }
      });
    </script>
    <script>
      const hamburger = document.querySelector('.hamburger');
      const nav = document.querySelector('.header-nav');

      hamburger.addEventListener('click', () => {
        nav.classList.toggle('show');
      });
    </script>
  </body>
</html>