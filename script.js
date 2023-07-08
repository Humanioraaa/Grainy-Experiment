$(document).ready(function () {
  var preLoderLi = $(".preload li"),
    pageDiv = $(".page-transition .div"),
    starting = new TimelineMax({ paused: true }),
    loading = new TimelineMax({ paused: true, repeat: 2 }),
    slideUp = new TimelineMax({ paused: true }),
    loadAnimation = new TimelineMax({});

  starting.staggerTo(pageDiv, 0, {
    bottom: "0%",
  });

  loading
    .staggerFrom(
      preLoderLi,
      0.1,
      {
        y: -15,
        autoAlpha: 0,
        ease: Power1.easeIn,
      },
      0.2
    )
    .staggerTo(
      preLoderLi,
      0.1,
      {
        y: 35,
        autoAlpha: 0,
        ease: Power1.easeIn,
      },
      0.1
    );

  slideUp.staggerTo(
    pageDiv,
    0.1,
    {
      bottom: "100%",
      ease: Power2.easeOut,
    },
    0.2
  );

  loadAnimation
    .add(starting.play(), 0.5)
    .add(loading.play())
    .add(slideUp.play());
});
