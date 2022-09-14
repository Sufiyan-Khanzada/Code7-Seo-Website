
// BEGIN: RESPONSIVE NAVBAR       
function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
}
function closeNav() {
    document.getElementById("mySidenav").style.left = "-250px";
}
// END: RESPONSIVE NAVBAR 
// BEGIN: STICKY NAVBAR
$(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('header').addClass('menu_fixed ');
    } else {
      $('header').removeClass('menu_fixed ');
    }
  });
// END: STICKY NAVBAR
// BEGIN: SCROLL TO TOP
var btn = $('.backtop');
$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  $('html, body').animate({scrollTop:0}, '300');
});
// END: SCROLL TO TOP
// BEGIN: FLOATING BUTTONS
  $(".clickbutton").click(function(){
   $('.floatbutton').toggleClass("active");
});
// END: FLOATING BUTTONS
// AOS ANIMATION
$(document).ready(function(){
AOS.init();
});
// AOS ANIMATION


// BANNER ROCKET ANIMATION
const tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".main_banner",
    start: "top top",
    end: "end top",
    scrub:2
  }
});

tl.from(".banner-rocket", {duration:2, xPercent:-100, left:"20%", yPercent:-100, bottom:"40%", force3D:true})
tl.to(".banner-rocket img", {rotation: 180, duration: 2, ease: "linear" })
tl.to(".banner-rocket", {duration:2, xPercent:-100, left:"20%", yPercent:-100, bottom:"40%", force3D:true})




// LOGO ROTATE ANIMATION
gsap.set('.rotate-gsap img', {xPercent:-10});

var rotate = gsap.timeline({
  scrollTrigger:{
    trigger: ".logo-rotate",
    pin: false,
    scrub:0.5,
    start: 'top top',
    end:'+=1000',
  }
})
.to('.rotate-gsap img', {
  rotation:180*1,
  duration:1, ease:'none',
})

// LOGO ROTATE ANIMATION
gsap.set('.rotate-gsap2 img', {xPercent:-10});

var rotate = gsap.timeline({
  scrollTrigger:{
    trigger: ".logo-rotate2",
    pin: false,
    scrub:0.5,
    start: 'top top',
    end:'+=1000',
  }
})
.to('.rotate-gsap2 img', {
  rotation:-180*1,
  duration:1, ease:'none',
})

// LOGO ROTATE ANIMATION
gsap.set('.rotate-gsap3 img', {xPercent:-10});

var rotate = gsap.timeline({
  scrollTrigger:{
    trigger: ".logo-rotate3",
    pin: false,
    scrub:0.5,
    start: '-40% top',
    end:'+=1000',
  }
})
.to('.rotate-gsap3 img', {
  rotation:180*1,
  duration:1, ease:'none',
})

// LOGO ROTATE ANIMATION
gsap.set('.rotate-gsap4 img', {xPercent:-10});

var rotate = gsap.timeline({
  scrollTrigger:{
    trigger: ".logo-rotate4",
    pin: false,
    scrub:0.5,
    start: 'top top',
    end:'+=1000',
  }
})
.to('.rotate-gsap4 img', {
  rotation:270*1,
  duration:1, ease:'none',
})

// BEGIN: SERVICE PAGE ROCKET

// const t2 = gsap.timeline({
//   scrollTrigger: {
//     trigger: ".timeline-section",
//     start: "top top",
//     end: "end end",
//     scrub:2

//   }
// });
// t2.from(".timeline-middle img", {yPercent: 100, duration: 2})
// t2.to(".timeline-middle img", {yPercent: 100, duration: 2})



$('.single-slider').slick({
});
$('.test-ss').slick({
  centerMode: false,
  dots:true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});

$('.case-slider, .package-slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
    



$('.blog-detail-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
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