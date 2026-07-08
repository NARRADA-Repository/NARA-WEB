new Swiper(".wrapper", {
  loop: true,
  spaceBetween: 30,

  // Autoplay
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },

  // Pagination bullets
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // Responsive breakpoints
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

// scroll up button
  // Get the button
    const scrollUpBtn = document.getElementById("scrollUpBtn");

    // Show button when user scrolls down 200px
    window.onscroll = function() {
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollUpBtn.style.display = "block";
      } else {
        scrollUpBtn.style.display = "none";
      }
    };

    // Scroll to top when button clicked
    scrollUpBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Topbar
    
// Hide topbar on scroll
let lastScrollTop = 0; // track last scroll position
const navbar = document.getElementById("mainNavbar");

window.addEventListener("scroll", function() {
    let scrollTop = window.scrollY;

    if (scrollTop > lastScrollTop && scrollTop > 200) {
        // scrolling down
        navbar.classList.add("fixed-top");
    } else {
        // scrolling up
        navbar.classList.remove("fixed-top");
    }

   // lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // avoid negative scroll
});


// flot icon
 function toggleBtn_social() {
      const Btns = document.querySelector(".btns");
      const add = document.getElementById("add");
      const remove = document.getElementById("remove");
      const btn = document.querySelector(".btns").querySelectorAll("a");
      Btns.classList.toggle("open");
      if (Btns.classList.contains("open")) {
        remove.style.display = "block";
        add.style.display = "none";
        btn.forEach((e, i) => {
          setTimeout(() => {
            bottom = 40 * i;
            e.style.bottom = bottom + "px";
            console.log(e);
          }, 100 * i);
        });
      } else {
        add.style.display = "block";
        remove.style.display = "none";
        btn.forEach((e, i) => {
          e.style.bottom = "0px";
        });
      }
    }

