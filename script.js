document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.myswiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            grabCursor: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                991: {
                    slidesPerView: 3
                }
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            speed: 600
        });

        new Swiper(".bannerSwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    }

);