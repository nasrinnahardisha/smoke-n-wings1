/*** Sticky header */
jQuery(document).ready(function ($) {
  // window.addEventListener("scroll", function () {
  //   const header = document.querySelector("header");
  //   if (window.scrollY > 250) {
  //     header.classList.add("sticky");
  //   } else {
  //     header.classList.remove("sticky");
  //   }
  // });

  // const body = document.body;
  // const scrollUp = "scroll-up";
  // const scrollDown = "scroll-down";
  // let lastScroll = 100;

  // window.addEventListener("scroll", () => {
  //   const currentScroll = window.pageYOffset;
  //   if (currentScroll <= 0) {
  //     body.classList.remove(scrollUp);
  //     return;
  //   }

  //   if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
  //     // down
  //     body.classList.remove(scrollUp);
  //     body.classList.add(scrollDown);
  //   } else if (
  //     currentScroll < lastScroll &&
  //     body.classList.contains(scrollDown)
  //   ) {
  //     // up
  //     body.classList.remove(scrollDown);
  //     body.classList.add(scrollUp);
  //   }

  //   lastScroll = currentScroll;
  // });

  // menu
  const menuToggle = document.getElementById("menu-toggle");
  const menuClose = document.getElementById("menu-close");
  const mobileNav = document.getElementById("mobile-nav");

  menuToggle.addEventListener("click", () => {
    mobileNav.classList.remove("hidden");
    setTimeout(() => {
      mobileNav.classList.remove("opacity-0", "translate-x-full");
      mobileNav.classList.add("opacity-100", "translate-x-0");
    }, 10);

    menuToggle.classList.add("hidden");
    menuClose.classList.remove("hidden");
  });

  menuClose.addEventListener("click", closeMobileMenu);

  function closeMobileMenu() {
    mobileNav.classList.remove("opacity-100", "translate-x-0");
    mobileNav.classList.add("opacity-0", "translate-x-full");

    setTimeout(() => {
      mobileNav.classList.add("hidden");
    }, 300);

    menuToggle.classList.remove("hidden");
    menuClose.classList.add("hidden");
  }

  mobileNav.addEventListener("mouseleave", () => {
    if (
      window.innerWidth < 1280 &&
      mobileNav.classList.contains("translate-x-0")
    ) {
      closeMobileMenu();
    }
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth >= 1280) {
      if (mobileNav.classList.contains("translate-x-0")) {
        closeMobileMenu();
      }
    }
  });

  // sidebar
  const openSidebar = document.getElementById("openSidebar");
  const closeSidebar = document.getElementById("closeSidebar");
  const contactSidebar = document.getElementById("contactSidebar");

  openSidebar.addEventListener("click", () => {
    contactSidebar.classList.remove("translate-x-full");
    contactSidebar.classList.add("translate-x-0");
  });

  closeSidebar.addEventListener("click", () => {
    contactSidebar.classList.remove("translate-x-0");
    contactSidebar.classList.add("translate-x-full");
  });

  document.addEventListener("mousemove", function (e) {
    const isInsideSidebar = contactSidebar.contains(e.target);
    const isInsideButton = openSidebar.contains(e.target);
    if (!isInsideSidebar && !isInsideButton) {
      contactSidebar.classList.remove("translate-x-0");
      contactSidebar.classList.add("translate-x-full");
    }
  });

  // marquee

  $(".slick.marquee").slick({
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: "linear",
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false,
    pauseOnHover: true,
  });

  // social
  document.addEventListener("DOMContentLoaded", () => {
    for (let i = 1; i <= 5; i++) {
      const toggleBtn = document.getElementById(`socialToggleBtn${i}`);
      const socialMenu = document.getElementById(`socialMenu${i}`);
      const circleWrapper = toggleBtn?.closest(".circle");

      if (toggleBtn && socialMenu && circleWrapper) {
        toggleBtn.addEventListener("click", () => {
          socialMenu.classList.toggle("opacity-0");
          socialMenu.classList.toggle("invisible");
          socialMenu.classList.toggle("opacity-100");
          socialMenu.classList.toggle("visible");
          socialMenu.classList.toggle("px-[4px]");
          socialMenu.classList.toggle("py-2");
        });

        circleWrapper.addEventListener("mouseleave", () => {
          socialMenu.classList.remove("opacity-100", "visible");
          socialMenu.classList.add("opacity-0", "invisible");
        });
      }
    }
  });

  // count

  $(document).ready(function () {
    $(".popup-youtube").magnificPopup({
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
    });
  });

  function animateCounter($el) {
    let target = parseInt($el.attr("data-target"));
    let count = 0;
    let speed = 20;
    let increment = Math.ceil(target / 100);

    let counterInterval = setInterval(function () {
      count += increment;
      if (count >= target) {
        count = target;
        clearInterval(counterInterval);
      }
      $el.text(count);
    }, speed);
  }

  $(document).ready(function () {
    let counters = document.querySelectorAll(".counter");

    let observer = new IntersectionObserver(
      function (entries) {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            let $el = $(entry.target);
            $el.text("0");
            animateCounter($el);
          }
        });
      },
      {
        threshold: 0.5,
      }
    );

    counters.forEach((counter) => {
      observer.observe(counter);
    });
  });
});

// slick slider
$(document).ready(function () {
  /*----- courses section slick add -----*/
  $(".slick-items").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    dots: false,
    arrows: true,
    variableWidth: false, // 👉 Slide সবসময় container width respect করবে
    centerMode: false,
    prevArrow:
      "<span class='left-arrow'><i class='bx bx-chevron-left'></i></span>",
    nextArrow:
      "<span class='right-arrow'><i class='bx bx-chevron-right'></i></span>",
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          arrows: false,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          arrows: false,
        },
      },
    ],
  });
  // 🔥 Click করলে active class toggle হবে
  $(".courses-wrapper").on("click", ".left-arrow, .right-arrow", function () {
    $(
      ".courses-wrapper .left-arrow, .courses-wrapper .right-arrow"
    ).removeClass("active");
    $(this).addClass("active");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const totalFaqs = 4;

  for (let i = 1; i <= totalFaqs; i++) {
    const btn = document.getElementById(`toggleBtn${i}`);
    const text = document.getElementById(`extraText${i}`);
    const icon = btn?.querySelector("i");

    if (btn && text && icon) {
      btn.addEventListener("click", function () {
        // প্রথমে সবগুলো বন্ধ করে দেই
        for (let j = 1; j <= totalFaqs; j++) {
          const otherText = document.getElementById(`extraText${j}`);
          const otherBtn = document.getElementById(`toggleBtn${j}`);
          const otherIcon = otherBtn?.querySelector("i");

          if (otherText && otherIcon) {
            otherText.classList.add("hidden");
            otherIcon.classList.add("ri-add-line");
            otherIcon.classList.remove("ri-subtract-line");
          }
        }

        // ক্লিককৃতটা toggle করি
        text.classList.toggle("hidden");
        if (text.classList.contains("hidden")) {
          icon.classList.add("ri-add-line");
          icon.classList.remove("ri-subtract-line");
        } else {
          icon.classList.remove("ri-add-line");
          icon.classList.add("ri-subtract-line");
        }
      });
    }
  }

  // ✅ ডিফল্টভাবে ২ নম্বর ওপেন থাকবে
  const defaultText = document.getElementById("extraText2");
  const defaultIcon = document.querySelector("#toggleBtn2 i");
  if (defaultText && defaultIcon) {
    defaultText.classList.remove("hidden");
    defaultIcon.classList.remove("ri-add-line");
    defaultIcon.classList.add("ri-subtract-line");
  }
});
