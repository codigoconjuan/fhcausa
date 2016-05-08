jQuery(document).foundation();


var elem = jQuery('#primary-menu');
var nav = jQuery('#site-navigation');

jQuery('button.menu-icon').on('click', function() {

  jQuery(elem).addClass('is-animating');

});
