const swiperTestiminials = new Swiper('.swiper-testmonials', {
  direction: 'horizontal',
  loop: true,

  navigation: {
    nextEl: '.testimonials-next',
    prevEl: '.testimonials-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: false,
      pagination: {
        el: '.testimonials-pagination',
        clickable: true,
        dynamicBullets: true,
      },
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 10,
      navigation: false,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
      navigation: true,
      navigation: {
        nextEl: '.testimonials-next',
        prevEl: '.testimonials-prev',
      },
    },
  }
});

const swiperPartners = new Swiper('.swiper-partners', {
  direction: 'horizontal',
  loop: true,
  navigation: {
    nextEl: '.partners-next',
    prevEl: '.partners-prev',
  },
  breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 20,
            navigation: false,
            pagination: {
              el: '.partners-pagination',
              clickable: true,
              dynamicBullets: true,
            },

          },
          578: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          1000: {
            slidesPerView: 5,
            spaceBetween: 20,
          },
        }
});

$(document).ready(function(){
  $('#mobileOpen').on('click', function(){
    $('#mobileMenu').show(200);
  });
  $('#mobileClose').on('click', function(){
    $('#mobileMenu').hide(200);
  });
});