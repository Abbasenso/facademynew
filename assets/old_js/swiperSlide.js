// swiper 
// Swiper slider 
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    
    // navigation: {
    //   nextEl: ".swiper-button-nexty",
    //   prevEl: ".swiper-button-prevy",
    // },
    breakpoints: {  
        // when window width is <= 320px     
        768:{
            slidesPerView: 2,
        },
        992:{
            slidesPerView: 2,
        },
        1124:{
            slidesPerView: 3,
            // loop: false,
        }
    
    }
    })
// end swiper