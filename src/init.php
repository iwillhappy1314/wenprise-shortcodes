<?php
/**
 * Register ShortCode
 */

add_shortcode( 'wprs_slider', [ 'Wizhi\Shortcode\PostSlider', 'render' ] );
add_shortcode( 'wprs_loop', [ 'Wizhi\Shortcode\PostLoop', 'render' ] );
add_shortcode( 'wprs_list', [ 'Wizhi\Shortcode\PostList', 'render' ] );
add_shortcode( 'wprs_media', [ 'Wizhi\Shortcode\PostGrid', 'render' ] );
add_shortcode( 'wprs_content', [ 'Wizhi\Shortcode\PageContent', 'render' ] );
add_shortcode( 'wprs_divider', [ 'Wizhi\Shortcode\Element', 'divider' ] );
add_shortcode( 'wprs_heading', [ 'Wizhi\Shortcode\Element', 'heading' ] );
add_shortcode( 'wprs_alert', [ 'Wizhi\Shortcode\Element', 'alert' ] );
add_shortcode( 'wprs_button', [ 'Wizhi\Shortcode\Element', 'button' ] );