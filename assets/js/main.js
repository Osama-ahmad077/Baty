jQuery(document).ready(function ($) {
  $(".fancy-slider").each(function () {
    var $wrapper = $(this);
    var $main = $wrapper.find(".main-carousel");
    var $thumbs = $wrapper.find(".thumb-carousel");

    if (!$main.length || !$thumbs.length) return;

    $main.addClass("owl-carousel");
    $thumbs.addClass("owl-carousel");

    $main.owlCarousel({
      items: 1,
      loop: false,
      nav: false,
      dots: false,
      smartSpeed: 600,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
    });

    $thumbs.owlCarousel({
      items: 3,
      margin: 10,
      nav: false,
      dots: false,
      loop: false,
      smartSpeed: 600,
      responsive: {
        0: {
          items: 2,
          nav: true,
        },
        1000: {
          items: 3,
          nav: true,
          loop: false,
        },
      },
    });

    $thumbs.find(".owl-item").eq(0).addClass("current");

    $main.on("changed.owl.carousel", function (event) {
      var index = event.item.index;

      $thumbs.trigger("to.owl.carousel", [index, 300, true]);

      $thumbs.find(".owl-item").removeClass("current");
      $thumbs.find(".owl-item").eq(index).addClass("current");
    });

    $thumbs.on("click", ".owl-item", function () {
      var index = $(this).index();

      $main.trigger("to.owl.carousel", [index, 300, true]);

      $thumbs.find(".owl-item").removeClass("current");
      $(this).addClass("current");
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".collection_swiper", {
    loop: true,
    speed: 600,
    centeredSlides: true,
    grabCursor: true,
    effect: "coverflow",

    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 120,
      modifier: 1.5,
      slideShadows: false,
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      /* 📱 Mobile */
      320: {
        slidesPerView: 1.5,
        spaceBetween: 10,
        coverflowEffect: {
          rotate: -15,
          depth: 80,
          modifier: 1,
        },
      },

      /* 📲 Tablet */
      768: {
        slidesPerView: 1.7,
        spaceBetween: 20,
        coverflowEffect: {
          rotate: -15,
          depth: 100,
          modifier: 1.2,
        },
      },

      /* 💻 Laptop */
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,
        coverflowEffect: {
          rotate: -15,
          depth: 120,
          modifier: 1.4,
        },
      },

      /* 🖥 Desktop */
      1440: {
        slidesPerView: 2.5,
        spaceBetween: 40,
        coverflowEffect: {
          rotate: -10,
          depth: 150,
          modifier: 1.6,
        },
      },
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".my_features", {
    loop: true,
    speed: 600,
    centeredSlides: true,
    grabCursor: true,
    effect: "slide",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      /* 📱 Mobile */
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },

      /* 📲 Tablet */
      768: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      /* 💻 Laptop */
      1024: {
        slidesPerView: 1,
        spaceBetween: 30,
      },

      /* 🖥 Desktop */
      1440: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
    },
  });
  new Swiper(".features_product", {
    // Optional parameters
    // direction: "vertical",
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
      el: ".swiper-scrollbar",
    },
  });
});
