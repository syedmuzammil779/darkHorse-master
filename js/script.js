$('.hamburger').click(function(){
    $(this).toggleClass('active');
    $('.navbar-brand').toggleClass('active');
    $('#navbarNav').toggleClass('active');
});

// banner img slider

 $(function () {

    $('.main-img-slider').owlCarousel({
        margin: 0,
        loop:true,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        items: 1,
         animateOut: 'fadeOut',
    // animateIn: 'flipInX',
        smartSpeed: 500,
        // touchDrag:false,
        // mouseDrag: false,
        slideSpeed: 1000,
        navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
        onInitialized: counter, //When the plugin has initialized.
        onTranslated: counter,

    });

  function counter(event) {
        var element = event.target; // DOM element, in this example .owl-carousel
        var items = event.item.count; // Number of items
        var item = event.item.index + -1; // Position of the current item
        $('#counter').html("<span class='firs_number'>" + "0" + item + "</span>" + "<span  class='second_number'> / </span> " + "<span class='second_number'>" + "0" + items + "</span>");
        
    }

});
$(function () {
var swiper = new Swiper('.video-swiper', {

    spaceBetween: 0,
    slidesPerView:1,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    effect: 'fade',
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});
$('.client-slider').owlCarousel({
  margin: 20,
  loop:true,
  dots: false,
  nav:true,
  navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
  responsive:{
    0:{
        items:4
    },
    767:{
        items:3
    },
    992:{
      items:5
  },
    1100:{
        items:6
    }
}
});
$('.work-slider').owlCarousel({
  margin: 20,
  loop:true,
  dots: false,
  nav:true,
  navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
  responsive:{
    0:{
        items:2
    },
    767:{
        items:2.9,
        margin: 10,
    },
    1000:{
        items:2.9
    }
}
});
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  // css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};



AOS.init({
  duration: 1200,
  once: true
});




// $(window).scroll(function() {
//   var top_of_element = $(".creator-heading").offset().top;
//   var bottom_of_element = $(".creator-heading").offset().top + $(".creator-heading").outerHeight();
//   var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
//   var top_of_screen = $(window).scrollTop();

//   if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
//       $('.creator-heading h2 span').addClass('active');
//   } else {
//     $('.home-creator-heading h2 span').removeClass('active');
//   }
// });
