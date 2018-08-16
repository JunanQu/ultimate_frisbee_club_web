$(function() {
   $('.scroll-down').click (function() {
     $('html, body').animate({scrollTop: $('div#recent_news').offset().top }, 'slow');
     return false;
   });
 });
