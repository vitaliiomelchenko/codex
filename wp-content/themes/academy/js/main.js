var $ = jQuery;

$(document).ready(function(){
  console.log('douc');


  
});

$(window).on("scroll",function(){
  // $('#header').css('background-color','#f8f8ee');
  console.log($('#header').offset().top)
  
});

document.addEventListener('scroll', function (event) {
  console.log($('#main').offset().top);
  //if ($('#header').offset().top < 30) {
  //   $('#header').addClass('scroll');
  // }
  // if ($('#header').offset().top > 30) {
  //   $('#header').removeClass('scroll');
  // }
  if($('#main').offset().top < 30) {
    $("#header").addClass("scrolled");
} 
  else {
    //remove the background property so it comes transparent again (defined in your css)
  $("#header").removeClass("scrolled");
}
}, true /*Capture event*/);

//nav
$('#nav-toggle').on('click',function(){
	$('header').toggleClass('header-active');
});
$('.nav-close').on('click',function(){
	$('header').removeClass('header-active');
});

$('.menu-item__parent').each(function(){
  let btn = $(this).find('.menu-item__icon');
  let btnLink = btn.prev();
  let subNav = $(this).find('.sub-menu');
  btn.on('click',function(e){
    if($(window).width()<992){
      e.preventDefault();
      subNav.slideToggle();
    }
  });
  btnLink.on('click',function(e){
    if($(window).width()<992){
      e.preventDefault();
      subNav.slideToggle();
    }
  });
})

//header white
if($(".header__white").length){
  $(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $("#header").addClass("scrolled");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
          $("#header").removeClass("scrolled");
        }
    });
  });
}




//lazy loading
// function lazyInit(){
//   $('.lazy-img').addClass('loaded');
//     $('.lazy-img').Lazy({
//         afterLoad: function(element){
//             imagesLoaded(element,function(){
//                 element.parent().addClass('loaded');
//             });
//         }
//     });
// }
// lazyInit();
//smooth scroll to anchor
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 100
    }, 500);
});

//animations

//appearence animation on scroll
$('.appear').each(function() {
    let el = $(this);
    let inview = el.waypoint(function(direction) {
        el.addClass('visible');
    }, {
        offset: '95%'
    });
});


// History back

function goBack() {
  window.history.back();
}

// sliders


$('.textLogos__slider').slick({
  dots: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  autoplay: true,
  infinite: true,
  autoplaySpeed: 5000,
  appendArrows: ".textLogos__sliderNav",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 375,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$('.sucessStories__slider').slick({
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  // autoplay: true,
  infinite: true,
  autoplaySpeed: 5000,
  appendArrows: ".sucessStories__sliderNav"
});

$('.singleItemSlider').slick({
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  dots: false,
  // autoplay: true,
  infinite: true,
  autoplaySpeed: 5000,
  appendArrows: ".singleItemSlider__sliderNav",
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.singleItemSlider--one').slick({
  speed: 1000,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  // autoplay: true,
  infinite: true,
  // adaptiveHeight: true,
  autoplaySpeed: 5000,
  appendArrows: ".singleItemSlider__sliderNav"
});


$(document).ready(function(){
  $(".custom-next").click(function(e) { // Added a '.'
    $(".sucessStories__slider").slick('slickNext'); // Switched to '.slick-slider'
  });
  $(".custom-prev").click(function(e) { // Added a '.'
    $(".sucessStories__slider").slick('slickPrev'); // Switched to '.slick-slider'
  });
})

// CountUp animation when user section is visible

$(document).ready(function() {

	const animItems = document.querySelectorAll('.appear');							// Указаному классу дабавляеться анимация
	if (animItems.length > 0) {
		window.addEventListener('scroll', animOnScroll);
		function animOnScroll() {
			for (let index = 0; index < animItems.length; index++) {
				const animItem = animItems[index];
				const animItemHeight = animItem.offsetHeight;
				const animItemOffset = offset(animItem).top;
				const animStart = 100;

				let animItemPoint = window.innerHeight - animItemHeight - animStart;
				if (animItemHeight > window.innerHeight) {
					animItemPoint = window.innerHeight - window.innerHeight / animStart;
				}

				if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
					animItem.classList.add('anim_act');									//Активация анимации
					// console.log('add');
					$('.counter:not(".anim_finished")').each(function () {
						var $this = $(this);
						jQuery({ Counter: 0 }).animate({ Counter: $this.attr('data-count') }, {
						duration: 3000,
						easing: 'swing',
						step: function () {
							$this.text(this.Counter.toFixed(1));
						},
						complete: function() {
							$this.text(this.Counter);
									// alert('finished');
						}
						});
						$this.text(Math.ceil(this.Counter));
						animItem.classList.add('anim_finished');	
					});
				} 
				else {																	//Скрытие анимации, если не надо можно убрать!
					animItem.classList.remove('anim_act');
					// console.log('remove')
				}
				// console.log('error')
			}
			// console.log('error_1')
		}
		// console.log('error_2')

		function offset(el) {
			const rect = el.getBoundingClientRect(),
				scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
				scrollTop = window.pageXOffset || document.documentElement.scrollTop;
			return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
		}

		setTimeout(() => {																//Вызов анимации
			animOnScroll();
		}, 3000);																		//Время вызова анимации 'ms'

	};
});

// About card height

// $( ".teamGrid__member" ).each(function( index ) {
//   let FooterHeight = $(this).find(".teamGrid__memberFooter").height();
//   let FooterPadding = 30;
//   let FooterRealHeight = FooterHeight + FooterPadding;
//   let FooterTransform = 'calc(100% - ' + FooterRealHeight + 'px)';
//   $(this).css( "padding-bottom", FooterRealHeight );
//   $(this).find(".teamGrid__memberFooter").css( "top", FooterTransform );
// });


