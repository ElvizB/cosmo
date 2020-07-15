$(".owl-carousel").owlCarousel({
  loop: true,
  nav: false,
  margin: 0,
  autoplay: true,
  autoplayTimeout: 900,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    480: {
      items: 2,
    },
    768: {
      items: 2,
    },
    1100: {
      items: 3,
    },
    1440: {
      items: 6,
    },
  },
});
