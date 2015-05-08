function include(url){
  document.write('<script src="'+url+'"></script>');
  return false ;
}

/* greensock.JS
========================================================*/
include('js/greensock/TweenMax.min.js');

/* cookie.JS
========================================================*/
include('js/jquery.cookie.js');


/* DEVICE.JS
========================================================*/
include('js/device.min.js');

/* Stick up menu
========================================================*/
include('js/tmstickup.js');
$(window).load(function() { 
  if ($('html').hasClass('desktop')) {
      $('#stuck_container').TMStickUp({
      })
  }  
});

/* Easing library
========================================================*/
include('js/jquery.easing.1.3.js');


/* ToTop
========================================================*/
include('js/jquery.ui.totop.js');
$(function () {   
  $().UItoTop({ easingType: 'easeOutQuart' });
});

/* DEVICE.JS AND SMOOTH SCROLLIG
========================================================*/
include('js/jquery.mousewheel.min.js');
include('js/jquery.simplr.smoothscroll.min.js');
$(function () { 
  if ($('html').hasClass('desktop')) {
      $.srSmoothscroll({
        step:150,
        speed:800
      });
  }   
});
include('js/jquery.superscrollorama.js');
$(document).ready(function() { 
  scrolloramaInit();
})

function scrolloramaInit(){
    if($('html').hasClass('desktop')){
    var controller = $.superscrollorama();

    controller
        // page 1
        .addTween('header', TweenMax.from( $('header'), 2.8, {delay: 0.2, css:{opacity: 0}, ease: Expo.easeOut}))
        .addTween('.slider_box', TweenMax.from( $('.slider_box'), 0.3, {delay: 0.8, css:{opacity: 0 , scale: 0.7}, ease: Cubic.easeOut}),0 , 0)
        .addTween('.banner_1', TweenMax.from( $('.banner_1'), 0.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -100)
        .addTween('.banner_2', TweenMax.from( $('.banner_2'), 0.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"top 0%  0" , scale: 0.5}, ease: Cubic.easeOut}),0 , -150)
        .addTween('.banner_3', TweenMax.from( $('.banner_3'), 0.6, {delay: 0.2, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -100)
        .addTween('.wrapper1 h2', TweenMax.from( $('.wrapper1 h2'), 1.3, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -250)
        .addTween('.wrapper1 p', TweenMax.from( $('.wrapper1 p'), 1.3, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -250)
        .addTween('.wrapper2 .grid_6', TweenMax.from( $('.wrapper2 .grid_6'), 1.3, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -250)
        .addTween('.wrapper3 h3', TweenMax.from( $('.wrapper3 h3'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -320)
        .addTween('.s1', TweenMax.from( $('.s1'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -320)
        .addTween('.s2', TweenMax.from( $('.s2'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -320)
        .addTween('.s3', TweenMax.from( $('.s3'), 1.0, {delay: 0.2, css:{opacity: 0 , scale: 0.5}, ease: Cubic.easeOut}),0 , -400)
        .addTween('.content_map', TweenMax.from( $('.content_map'), 1.0, {delay: 0.2, css:{opacity: 0 , scale: 0.5}, ease: Cubic.easeOut}),0 , -400)
        .addTween('#footer .grid_3', TweenMax.from( $('#footer .grid_3'), 1.0, {delay: 0.2, css:{opacity: 0 , scale: 0.5}, ease: Cubic.easeOut}),0 , -400) 
        
         // page 2
        .addTween('.page2 h3', TweenMax.from( $('.page2 h3'), 0.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -50)
        .addTween('.block_2', TweenMax.from( $('.block_2'), 0.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"top 0%  0" , scale: 0.5}, ease: Cubic.easeOut}),0 , -250)
        .addTween('.s4', TweenMax.from( $('.s4'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -120)
        .addTween('.s5', TweenMax.from( $('.s5'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -120)
        .addTween('.s6', TweenMax.from( $('.s6'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -120)
        .addTween('.s7', TweenMax.from( $('.s7'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -120)
        .addTween('.s8', TweenMax.from( $('.s8'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -130)
        .addTween('.s9', TweenMax.from( $('.s9'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -140)
        .addTween('.s10', TweenMax.from( $('.s10'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -150)
        .addTween('.s11', TweenMax.from( $('.s11'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -160)
        .addTween('.s12', TweenMax.from( $('.s12'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -170)
        .addTween('.s13', TweenMax.from( $('.s13'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -180)
        .addTween('.s14', TweenMax.from( $('.s14'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -190)
        .addTween('.s15', TweenMax.from( $('.s15'), 1.6, {delay: 0.2, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -200)
       

}
}       

// /* Stellar.js
// ========================================================*/
// include('js/stellar/jquery.stellar.js');
// $(document).ready(function() { 
//   if ($('html').hasClass('desktop')) {
//       $.stellar({
//         horizontalScrolling: false,
//         verticalOffset: 20
//       });
//       $('.stellar-block').each(function() {
//           this.style.backgroundAttachment = 'fixed';
//       })
//   }
// });


/* Copyright Year
========================================================*/
var currentYear = (new Date).getFullYear();
$(document).ready(function() {
  $("#copyright-year").text( (new Date).getFullYear() );
});


/* Superfish menu
========================================================*/
include('js/superfish.js');
include('js/jquery.mobilemenu.js');


/* Orientation tablet fix
========================================================*/
$(function(){
// IPad/IPhone
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
	ua = navigator.userAgent,

	gestureStart = function () {viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";},

	scaleFix = function () {
		if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
			viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
			document.addEventListener("gesturestart", gestureStart, false);
		}
	};
	
	scaleFix();
	// Menu Android
	if(window.orientation!=undefined){
  var regM = /ipod|ipad|iphone/gi,
   result = ua.match(regM)
  if(!result) {
   $('.sf-menu li').each(function(){
    if($(">ul", this)[0]){
     $(">a", this).toggle(
      function(){
       return false;
      },
      function(){
       window.location.href = $(this).attr("href");
      }
     );
    } 
   })
  }
 }
});
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')