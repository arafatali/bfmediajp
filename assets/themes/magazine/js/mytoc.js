$(document).ready(function () {
  /* TOCハイライト処理 */
  if ($(window).width() >= 1423) {
    $(window).scroll(function () {
      var position = $(this).scrollTop();
      var currentId = "";

      $(".mytoc h2").each(function (index, element) {
        var y = $(element).offset().top;
        var id = $(element).attr("id");

        if (position > y - 10) {
          currentId = id;
        }
      });

      $(".mytoc li").each(function (index, element) {
        var href = $(element).children("a").attr("href");

        if ("#" + currentId == href) {
          $(element).css({
            "background-color": "#EFEFEF",
          });
        } else {
          $(element).css({
            "background-color": "inherit",
          });
        }
      });
    });
  }
});