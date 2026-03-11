/**
 * Initialize all theme sliders
 * Minimal, optimized code with error handling
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log('55555')
    
    // Wait for Swiper to be available
    if (typeof Swiper === 'undefined') {
        console.warn('Swiper library not loaded yet');
        return;
    }

    // 1. Categories Slider
    initSwiper('.categories-slider', {
        slidesPerView: 3.3,
        spaceBetween: 20,
        breakpoints: {
            840: { slidesPerView: 3.5 },
            1280: { slidesPerView: 4 },
            1720: { slidesPerView: 5 }
        }
    });
    // 2. Brands Slider - Ultra-Smooth Marquee
    initSwiper('.brands-slider', {
        slidesPerView: 3.8,
        spaceBetween: 40,
        loop: true,
        speed: 3000,                    // Adjust this for speed (lower = faster)
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
            reverseDirection: false,     // Set to true if you want opposite direction
        },
        breakpoints: {
            768: { slidesPerView: 5 },
            1280: { slidesPerView: 6 },
            1720: { slidesPerView: 7 }
        },
        // Essential for true marquee effect
        loopAdditionalSlides: 1,         // Add extra slides for smoother loop
        watchSlidesProgress: true,
        breakpointsBase: 'window',
        
        // Disable navigation/pagination for clean marquee
        navigation: false,
        pagination: false,
        
        // Optional: Different easing for smoother motion
        easing: 'linear',                // Linear easing for constant speed
    });
        // 1. Categories Slider
    initSwiper('.small-categories-slider', {
        slidesPerView: 3.5,
        spaceBetween: 15,
        breakpoints: {
            400: { slidesPerView: 4 },

            600: { slidesPerView: 5 },

            840: { slidesPerView: 7 },
            1024: { slidesPerView: 7},

            1280: { slidesPerView: 10 },
            1720: { slidesPerView: 11 }
        }
    });

    // Reusable init function
    function initSwiper(selector, config) {
        const element = document.querySelector(selector);
        if (!element) {
            console.log(`Slider ${selector} not found - skipping`);
            return;
        }

        // Merge default options with custom config
        const options = {
            ...config,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            grabCursor: true,
            on: {
                init: function() {
                    console.log(`${selector} initialized`);
                }
            }
        };

        new Swiper(selector, options);
    }
});