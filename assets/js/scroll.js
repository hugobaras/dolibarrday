$("#scrollToRegister").on("click", function () {
  $("html, body").animate(
    {
      scrollTop: $("#register").offset().top - 50,
    },
    1000
  );
});

$(document).ready(function () {
  $('a[href^="#"]').on("click", function (event) {
    var target = $(this.getAttribute("href"));
    if (target.length) {
      event.preventDefault();
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: target.offset().top - 50,
          },
          1000
        );
    }
  });
});
