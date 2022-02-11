$(document).ready(function () {
  "use strict";

  //show nav link underline 
  $(".nav-link").on("mouseleave", function () {
    $(this).addClass("change")
  });
  $(".nav-link").on("mousemove", function () {
    $(this).removeClass("change")
  });

  // fixed header
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();

    if (scroll > 1) {
      $("header").addClass("fixed");
    } else {
      $("header").removeClass("fixed");
    }
  });

  //main slider owl
  $(".main-slider-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 8000,
    items: 1,
    nav: false,
    dots: true,
    smartSpeed: 1000,
    navText: ["<i class='bi bi-arrow-left'></i>", "<i class='bi bi-arrow-right'></i>"],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },

      992: {
        items: 1,
      }
    }
  });

  //to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 500) {
      $("#toTop").fadeIn(100);
    } else {
      $("#toTop").fadeOut(100);
    }
  });

  $("#toTop").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 0);
  });

  //validate form
  // (function () {
  //   // Fetch all the forms we want to apply custom Bootstrap validation styles to
  //   let forms = document.querySelectorAll(".needs-validation")

  //   // Loop over them and prevent submission
  //   Array.prototype.slice.call(forms)
  //     .forEach(function (form) {
  //       form.addEventListener("submit", function (event) {
  //         if (!form.checkValidity()) {
  //           event.preventDefault()
  //           event.stopPropagation()
  //         }
  //         form.classList.add("was-validated")
  //       }, false)
  //     })
  // })();

  //lazyload images
  $("img").Lazy({
    scrollDirection: "vertical",
    effect: "fadeIn",
    visibleOnly: false,
  });
});

$(window).on("load", function () {
  $('.loader').delay(500).fadeOut(500);

  //wow animate
  wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: false, // default
    live: true // default
  })
  // wow.init();
});