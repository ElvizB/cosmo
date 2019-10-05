/*==== Smoothscroll ====*/

$("#home a, .custom-navbar a").on("click", function(event) {
  var $anchor = $(this);
  $("html, body")
    .stop()
    .animate(
      {
        scrollTop: $($anchor.attr("href")).offset().top - 100
      },
      1000
    );
  event.preventDefault();
});

console.log("hola");
