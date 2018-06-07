<?php
/*
***
**** This file contains all of the shortcodes you can use in your child theme. For use with bootstrap, containers, columns, etc.
***
*/



// Container Shortcode. By default this container is a bootstrap fluid container, which spans the full width of the viewport
function container_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );
	return '<div class="container-fluid ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'container', 'container_shortcode' );


// Inner Container Shortcode. By default this container has a class of "container" which spans the width of bootstraps specified container width.
function inner_container_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );
	return '<div class="container ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'innerContainer', 'inner_container_shortcode' );


// Row Shortcode. This is what is needed to nest your columns in.
function row_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );
	return '<div class="row ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'row', 'row_shortcode' );


// Column Shortcode. This is used for a bootstrap column. Gets a default class of "col". You need to specify the column size classes in the shortcode's "class" attribute.
function col_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );
	return '<div class="col ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'col', 'col_shortcode' );


// Div Shortcode. This is a simple div which you can add your own custom classes to. There are no default classes.
function div_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );
	return '<div class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'div', 'div_shortcode' );


// Span shortcode. No default classes, but you may add your own within the shortcode.
function span_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );
	return '<span class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</span>';
}
add_shortcode( 'span', 'span_shortcode' );


// Accordion Shortcode
function accordion_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'title' => ''
	), $atts );
	return '<div class="accordionItem ' . esc_attr($a['class']) . '"><p class="accordionToggle accordionTitle"><strong> ' . esc_attr($a['title']) . ' </strong></p><div class="accordionContent">' . do_shortcode($content) . '</div></div>';
}
add_shortcode( 'accordion', 'accordion_shortcode' );

?>
