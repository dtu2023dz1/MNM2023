document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.card__content', {
        loop : true,
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        centerSlide: 'true',
        fade: 'true',
        grapCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            1000: {
              slidesPerView: 2,
            },
            1900: {
              slidesPerView: 3,
            },
          },
    });
});
