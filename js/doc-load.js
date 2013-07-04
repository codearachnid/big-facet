//
// jQuery( document ).mouseup( function (e) {
// 	var search_for = jQuery('#search-fields');
// 	if (search_for.has(e.target).length === 0) {
// 		nav_width = jQuery('menu-primary').width();
// 		search_for.animate({ width : 0, opacity:"hide"}, 1500);
// 	}
// });
jQuery( document ).ready( function( $ ){
	$( '#search-submit' ).on('click',function(){
		nav_width = $('menu-primary').width();
		$('#search-fields').css( { 'width' : nav_width } ).animate({ width : '+=' + nav_width, opacity:"show"}, 1500); //.css( { 'left' : '-' + nav_width } )
	});
	fit_sidebar();
	$( window ).resize( function() {
		fit_sidebar();
	});
});

function fit_sidebar(){
	sidebar = jQuery('#secondary');
	offset = sidebar.offset();
	resize = jQuery(window).height() - offset.top;
	sidebar.height( resize );
}