// Swiper Setup
let aboutSwiper = new Swiper(".about-swiper", {
    spaceBetween: 30,
    loop: 'true',
  
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  })