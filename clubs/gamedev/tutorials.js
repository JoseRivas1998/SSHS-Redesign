var playLists = [
  "//www.youtube.com/embed/videoseries?list=",
  "PLXGqUKNYJYkiqqE0fTuOGg0BLX920aMs7",
  "PLXGqUKNYJYkjq3wsxyHQ-UJvrLAi1XjYV",
  "PLXGqUKNYJYkhkXBTuTyBkfK10P3fpsRkJ",
  "PLXGqUKNYJYki0ybyvz-DpxL-85q5yaQWz",
  "PLXGqUKNYJYkihuquwykpJQcMfdp8kjy3l",
  "PLXGqUKNYJYkhaknyJbGT7EzZLelxHlOfw"
];
$(document).ready(function() {
  if($(location).attr('search') != "") {
  var hashNumber = parseInt($(location).attr('search').replace("?pl=", ''));
  if(hashNumber >= 1 && hashNumber <= 6) {
    showPlaylist(hashNumber);
  }
}
});

function showPlaylist(plNum) {
  $("#navTabs li").each(function() {
    $(this).removeClass("active");
  });
  $("#t" + plNum).addClass("active");
  $("#playList").attr("src", playLists[0] + playLists[plNum]);
}

$("#t1").on("click", function() {
  showPlaylist(1);
});

$("#t2").on("click", function() {
  showPlaylist(2);
});

$("#t3").on("click", function() {
  showPlaylist(3);
});

$("#t4").on("click", function() {
  showPlaylist(4);
});

$("#t5").on("click", function() {
  showPlaylist(5);
});

$("#t6").on("click", function() {
  showPlaylist(6);
});
