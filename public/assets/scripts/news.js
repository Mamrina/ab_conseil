// Show more news
document.getElementById("show-more").addEventListener("click", function () {
  var hiddenNews = document.querySelectorAll(".news.hidden");
  for (var i = 0; i < 2; i++) {
    hiddenNews[i].classList.remove("hidden");
  }
  if (hiddenNews.length <= 2) {
    this.style.display = "none";
  }
});

// Search news
document.getElementById("search").addEventListener("input", function () {
  var filter = this.value.toLowerCase();
  var newsList = document.getElementById("news-list");
  var newsItems = newsList.getElementsByTagName("li");

  for (var i = 0; i < newsItems.length; i++) {
    var title = newsItems[i]
      .getElementsByClassName("title-new")[0]
      .innerText.toLowerCase();
    var content = newsItems[i]
      .getElementsByTagName("p")[1]
      .innerText.toLowerCase();

    if (title.indexOf(filter) > -1 || content.indexOf(filter) > -1) {
      newsItems[i].style.display = "";
    } else {
      newsItems[i].style.display = "none";
    }
  }
});
