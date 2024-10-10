// Menu toggle for mobile navigation
let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

// Check if elements exist to prevent errors
if (menuBtn && navbar) {
   menuBtn.onclick = () => {
      menuBtn.classList.toggle('fa-times');
      navbar.classList.toggle('active');
   };
   
   window.onscroll = () => {
      if (menuBtn.classList.contains('fa-times') || navbar.classList.contains('active')) {
         menuBtn.classList.remove('fa-times');
         navbar.classList.remove('active');
      }
   };
}

// Initialize Swiper for home-slider
let homeSlider = new Swiper(".home-slider", {
   loop: true,
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },
});

// Initialize Swiper for reviews-slider
let reviewsSlider = new Swiper(".reviews-slider", {
   grabCursor: true,
   loop: true,
   autoHeight: true,
   spaceBetween: 20,
   breakpoints: {
      0: {
         slidesPerView: 1,
      },
      700: {
         slidesPerView: 2,
      },
      1000: {
         slidesPerView: 3,
      },
   },
});

// Load more packages functionality
let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItemIndex = 3;

if (loadMoreBtn) {
   loadMoreBtn.onclick = () => {
      let boxes = [...document.querySelectorAll('.packages .box-container .box')];
      
      // Check if there are more items to display
      if (currentItemIndex < boxes.length) {
         for (let i = currentItemIndex; i < currentItemIndex + 3 && i < boxes.length; i++) {
            boxes[i].style.display = 'inline-block';
         }
         currentItemIndex += 3;
      }
      
      // Hide the load more button when all items are displayed
      if (currentItemIndex >= boxes.length) {
         loadMoreBtn.style.display = 'none';
      }
   };
}
