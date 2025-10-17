/*** Sticky header */
jQuery(document).ready(function ($) {
  window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > 250) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  });

  const body = document.body;
  const scrollUp = "scroll-up";
  const scrollDown = "scroll-down";
  let lastScroll = 100;

  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= 0) {
      body.classList.remove(scrollUp);
      return;
    }

    if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
      // down
      body.classList.remove(scrollUp);
      body.classList.add(scrollDown);
    } else if (
      currentScroll < lastScroll &&
      body.classList.contains(scrollDown)
    ) {
      // up
      body.classList.remove(scrollDown);
      body.classList.add(scrollUp);
    }

    lastScroll = currentScroll;
  });

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
  // 👉 Auto close if user clicks outside sidebar
  document.addEventListener("click", (e) => {
    const isClickInsideMenu =
      mobileNav.contains(e.target) || menuToggle.contains(e.target);
    if (!isClickInsideMenu && !mobileNav.classList.contains("hidden")) {
      closeMobileMenu();
    }
  });

  // 👉 Auto close on scroll
  window.addEventListener("scroll", () => {
    if (!mobileNav.classList.contains("hidden")) {
      closeMobileMenu();
    }
  });

  // 👉 Auto close on resize
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 1280 && !mobileNav.classList.contains("hidden")) {
      closeMobileMenu();
    }
  });

  // sidebar
  // sidebar
  document.addEventListener("DOMContentLoaded", function () {
    const openSidebar = document.getElementById("openSidebar");
    const closeSidebar = document.getElementById("closeSidebar");
    const contactSidebar = document.getElementById("contactSidebar");

    if (!openSidebar || !closeSidebar || !contactSidebar) return;

    // Open sidebar
    openSidebar.addEventListener("click", () => {
      contactSidebar.classList.remove("translate-x-full");
      contactSidebar.classList.add("translate-x-0");
    });

    // Close sidebar
    closeSidebar.addEventListener("click", () => {
      contactSidebar.classList.remove("translate-x-0");
      contactSidebar.classList.add("translate-x-full");
    });

    // Sidebar auto close when clicking outside or scrolling
    document.addEventListener("click", function (e) {
      const isInsideSidebar = contactSidebar.contains(e.target);
      const isInsideButton = openSidebar.contains(e.target);
      if (!isInsideSidebar && !isInsideButton) {
        contactSidebar.classList.remove("translate-x-0");
        contactSidebar.classList.add("translate-x-full");
      }
    });

    // Auto close when scrolling
    window.addEventListener("scroll", function () {
      if (contactSidebar.classList.contains("translate-x-0")) {
        contactSidebar.classList.remove("translate-x-0");
        contactSidebar.classList.add("translate-x-full");
      }
    });

    // ✅ Auto close when resizing (desktop ↔ mobile)
    let resizeTimeout;
    window.addEventListener("resize", function () {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        if (contactSidebar.classList.contains("translate-x-0")) {
          contactSidebar.classList.remove("translate-x-0");
          contactSidebar.classList.add("translate-x-full");
        }
      }, 200); // সামান্য delay দিলে smooth কাজ করে
    });
  });





  
  // slick slider

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

  // accroidium
  jQuery(document).ready(function ($) {
     const toggleButtons = document.querySelectorAll('[id^="toggleBtn"]');
  const extraTexts = document.querySelectorAll('[id^="extraText"]');

  const plusIconClass = "ri-add-line";
  const subtractIconClass = "ri-subtract-fill";

  function setIcon(icon, isOpen) {
    icon.classList.toggle(plusIconClass, !isOpen);
    icon.classList.toggle(subtractIconClass, isOpen);
  }

  function hideAllExcept(currentIndex) {
    extraTexts.forEach((text, index) => {
      const icon = toggleButtons[index].querySelector("i");
      const isCurrent = index === currentIndex;
      text.classList.toggle("hidden", !isCurrent);
      setIcon(icon, isCurrent);
    });
  }

  // ✅ Default state: first FAQ open, rest closed
  window.addEventListener("DOMContentLoaded", () => hideAllExcept(1));

  // ✅ Click event with loop
  toggleButtons.forEach((btn, index) => {
    btn.addEventListener("click", () => {
      const isHidden = extraTexts[index].classList.contains("hidden");
      if (isHidden) hideAllExcept(index);
      else hideAllExcept(-1); // সব বন্ধ করতে চাইলে
    });
  });

  });
});
