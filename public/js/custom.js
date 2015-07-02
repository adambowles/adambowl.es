/*------------------------------------------------------*/
/* Determine what size screen this is being rendered on */
/*------------------------------------------------------*/
var viewportSize = 'xs'; // Mobile first

(function($, viewport){
  // Execute only after document has fully loaded
  $(document).ready(function() {
    viewportSize = getViewportSize(viewport);
  });

  // Execute code each time window size changes
  $(window).resize(
    viewport.changed(function(){
      viewportSize = getViewportSize(viewport);
    })
  );

})(jQuery, ResponsiveBootstrapToolkit);

function getViewportSize(viewport)
{
  if( viewport.is('xs') ) {
    return 'xs';
  }
  if( viewport.is('sm') ) {
    return 'sm';
  }
  if( viewport.is('md') ) {
    return 'md';
  }
  if( viewport.is('lg') ) {
    return 'lg';
  }
}


/*--------------------------------------------------------------------------*/
/* Collapse the navbar once a link has been activated (small displays only) */
/*--------------------------------------------------------------------------*/
$('.nav a').on('click', function(){
  if(viewportSize == 'xs') {
    $(".navbar-toggle").click();
  }
});


/*---------------*/
/* Sticky navbar */
/*---------------*/
$(function() {
  $('#nav-wrapper').height($("#nav").height());

  $('#nav').affix({
    offset: { top: $('#nav').offset().top }
  });
});


/*------------------*/
/* Smooth scrolling */
/*------------------*/
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - ((viewportSize == 'xs') ? 25 : 50) // offset slightly less then navbar size (xs screen has minified navbar)
        }, 750, 'easeInOutCubic');
        return false;
      }
    }
  });
});


/*-----------------*/
/* Parallax header */
/*-----------------*/
$(document).ready(function(){
   $('section[data-type="background"]').each(function(){
     var parallax = $(this);

      $(document).ready(function(){
        parallaxise(parallax);
      });

      $(window).scroll(function() {
        parallaxise(parallax);
      });
   });
});

function parallaxise(element)
{
  var yPos = -($(window).scrollTop() / parallax.data('speed'));
  var coords = '50% '+ yPos + 'px';
  element.css({ backgroundPosition: coords });
}
