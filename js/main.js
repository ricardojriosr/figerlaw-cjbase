jQuery(document).ready(function($) {


// nav shrink
$(window).scroll(function(){
    if ($(this).scrollTop() > 30) {
       $('nav').addClass('shrink');
    } else {
       $('nav').removeClass('shrink');
    }
  });



// toggle anything


// search modal
$('.search-header').click(function() {
  $('.search-form-section').toggleClass('open');
});

$('.close-btn').click(function() {
  $('.search-form-section').removeClass('open');
});

// video modal
$('.video-pop-btn').click(function() {
  $('.video-modal').toggleClass('open');
});

$('.close-btn').click(function() {
  $('.video-modal').removeClass('open');
});




//mobile toggle
$(".mobile-toggle").click(function(){
//	$("#mobile-menu-custom").removeClass('');
// $("#mobile-menu-custom").toggleClass("slidee collapsed");
 $("#mobile-menu-custom").toggleClass("slideout");

});

// Bootstrap menu magic
$(window).resize(function() {
if ($(window).width() < 768) {
  $(".dropdown-toggle").attr('data-toggle', 'dropdown');
} else {
  $(".dropdown-toggle").removeAttr('data-toggle dropdown');
}
});



//Galerry toggle
$('.gimage').click(function() {
  $(this).toggleClass('open');
  $(this).siblings().removeClass('open');
});



});


// BOOTSTRAP WP
jQuery( document ).ready( function( $ ) {

    $( 'input.search-field' ).addClass( 'form-control' );

    // the search widget
    $( 'input.search-field' ).addClass( 'form-control' );
    $( 'input.search-submit' ).addClass( 'btn btn-default' );

    $( '.widget_rss ul' ).addClass( 'media-list' );

    $( '.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul' ).addClass( 'nav' );

    $( '.widget_recent_comments ul#recentcomments' ).css( 'list-style', 'none').css( 'padding-left', '0' );
    $( '.widget_recent_comments ul#recentcomments li' ).css( 'padding', '5px 15px');

    $( 'table#wp-calendar' ).addClass( 'table table-striped');
} );


/* MEGA MENU */
jQuery('body').on('mouseenter mouseleave', '.dropdown', function (e) {
  var dropdown = jQuery(e.target).closest('.dropdown');
  var menu = jQuery('.dropdown-menu', dropdown);
  dropdown.addClass('show');
  menu.addClass('show');
  setTimeout(function () {
      dropdown[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
      menu[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
  }, 300);
});