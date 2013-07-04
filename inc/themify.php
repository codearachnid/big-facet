<?php

function big_facet_primary_search_icon ( $items, $args ) {
    if ( $args->theme_location == 'primary' ) {
        $items .= sprintf( '<li class="menu-item searchform">%s</li>', get_search_form( false ) );
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'big_facet_primary_search_icon', 10, 2 );

function big_facet_body_class( $classes ){
	return $classes;
}
add_filter( 'body_class', 'big_facet_body_class' );

function big_facet_show_credits(){
	get_template_part( 'partials/credits' );
}
add_action( 'big_facet_credits', 'big_facet_show_credits' );

function big_facet_search_form( $form ) {
	ob_start();
    get_template_part( 'partials/searchform' );
    $form = ob_get_clean();
    return $form;
}

add_filter( 'get_search_form', 'big_facet_search_form', 20 );