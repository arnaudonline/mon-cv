$("button").click(function () {
  this.classList.toggle("open");
  $(".menu").toggleClass("open");
});

$("nav").click(function () {
  $("button").toggleClass("open");
  $(".menu").toggleClass("open");
});
