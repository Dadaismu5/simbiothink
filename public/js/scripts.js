 (function() {
  'use strict';
     // Feature Test
     if ( 'querySelector' in document && 'addEventListener' in window && Array.prototype.forEach ) {

         // Function to animate the scroll
         var smoothScroll = function (anchor, duration) {

             // Calculate how far and how fast to scroll
             var startLocation = window.pageYOffset;
             var endLocation = anchor.offsetTop;
             var distance = endLocation - startLocation;
             var increments = distance/(duration/14);
             var stopAnimation;

             // Scroll the page by an increment, and check if it's time to stop
             var animateScroll = function () {
               window.scrollBy(0, increments);
               stopAnimation();
             };

             // If scrolling down
             if ( increments >= 0 ) {
                 // Stop animation when you reach the anchor OR the bottom of the page
                 stopAnimation = function () {
                   var travelled = window.pageYOffset;
                   if ( (travelled >= (endLocation - increments)) || ((window.innerHeight + travelled) >= document.body.offsetHeight) ) {
                     clearInterval(runAnimation);
                   }
                 };
               }
             // If scrolling up
             else {
                 // Stop animation when you reach the anchor OR the top of the page
                 stopAnimation = function () {
                   var travelled = window.pageYOffset;
                   if ( travelled <= (endLocation || 0) ) {
                     clearInterval(runAnimation);
                   }
                 };
               }
             // Loop the animation function
             var runAnimation = setInterval(animateScroll, 16);
           };

         // Define smooth scroll links
         var scrollToggle = document.querySelectorAll('.scroll');

         // For each smooth scroll link
         [].forEach.call(scrollToggle, function (toggle) {
             // When the smooth scroll link is clicked
             toggle.addEventListener('click', function(e) {

                 // Prevent the default link behavior
                 e.preventDefault();

                 // Get anchor link and calculate distance from the top
                 var dataID = toggle.getAttribute('href');
                 var dataTarget = document.querySelector(dataID);
                 var dataSpeed = toggle.getAttribute('data-speed');

                 // If the anchor exists
                 if (dataTarget) {
                     // Scroll to the anchor
                     smoothScroll(dataTarget, dataSpeed || 500);
                   }
                 }, false);
           });
       }
     })();
     new WOW().init();

     var footerParallaxHeight = $('#footer').height() * 1.35;
     var topOffset = $('#menu').height();
     $('.contenido').css("margin-bottom", footerParallaxHeight);
     $('#pag-proyectos').css("margin-bottom", footerParallaxHeight);
     $('#pag-contacto').css("margin-bottom", footerParallaxHeight);
     $('#vista-proyecto').css("margin-bottom", footerParallaxHeight);
//Kills dead space between content and footer.
$('#vista-proyecto').css("margin-top", topOffset);

//Hover en logo SVG.
$('#h-index').hover(function() {
  $('#inicio').css({fill: "#2F303C", transition: "1s"});
}, function() {
  $('#inicio').css({fill: "#B7B7B8", transition: "1s"});
}
);

$('#h-proyectos').hover(function() {
  $('#proyectos').css({fill: "#2F303C", transition: "1s"});
}, function() {
  $('#proyectos').css({fill: "#010101", transition: "1s"});
}
);

$('#h-nosotros').hover(function() {
  $('#nosotros').css({fill: "#2F303C", transition: "1s"});
}, function() {
  $('#nosotros').css({fill: "#5C5C5C", transition: "1s"});
}
);

$('#h-contacto').hover(function() {
  $('#contacto').css({fill: "#2F303C", transition: "1s"});
}, function() {
  $('#contacto').css({fill: "#B7B7B8", transition: "1s"});
}
);

$(document).ready(function() {
  $(".slideshow-bg main.background").vegas({
    delay: 6500,
    slides: [
    { src: "img/slide-01.jpg" },
    { src: "img/slide-02.jpg" },
    { src: "img/slide-03.jpg" },
    { src: "img/slide-04.jpg" },
    { src: "img/slide-05.jpg" },
    { src: "img/slide-06.jpg" },
    ]
  });

//Gallery indicators.
var numberOfSlides = $("#vista-proyecto").vegas('options', 'slides');
for (var i = 0; i < numberOfSlides.length; i++) {
  if (i == numberOfSlides.length -1)
    $('#bullets ul').append("<li class='circle' id='"+i+"' style='margin-right:0;'></li>");
  else
    $('#bullets ul').append("<li class='circle' id='"+i+"'></li>");
}

$('.circle').click(function() {
  for (var i = 0; i < numberOfSlides.length; i++)
    $('.circle').removeClass('active');

  $("#vista-proyecto").vegas('jump', this.id);
  $(this).addClass('active');
  });
});

$('test').paroller();
$("#hide").click(function(){
  $(".informacion").hide();
});

//Resolving "laggy scroll - Simbio"
(function() {
  var $select = $('#select');
  var $window = $(window);
  var isFixed = false;
  var init = $('#select').offset();

  $window.scroll(function() {
    var currentScrollTop = $window.scrollTop();
    if (currentScrollTop > isFixed === false) {
      isFixed = true;
      $select.css({
        top: 0,
        position: 'fixed'
      });
      console.log("fixed");
    } else if (currentScrollTop <= isFixed === true) {
      isFixed = false;
      $select.css('position', 'relative');
      console.log("unfixed");
    }
  });
}());

$('')

//$('.f-project').
