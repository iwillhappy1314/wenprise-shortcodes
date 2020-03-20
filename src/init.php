<?php

/**
 * Wizhi Shortcode
 * Wizhi CMS 插件使用的简码
 */

use Wenprise\Shortcode\Element;
use Wenprise\Shortcode\Loop;

if (function_exists('add_shortcode')) {
    add_shortcode('wprs_divider', [new Element(), 'devider']);
    add_shortcode('wprs_heading', [new Element(), 'heading']);
    add_shortcode('wprs_alert', [new Element(), 'alert']);
    add_shortcode('wprs_button', [new Element(), 'button']);
    add_shortcode('wprs_loop', [new Loop(), 'loop']);

    /**
     * 加载多语言文件
     */
    $locale = apply_filters( 'theme_locale', is_admin() ? get_user_locale() : get_locale(), 'wprs' );
    load_textdomain( 'wprs', __DIR__ . '/languages/wprs-' . $locale . '.mo' );
}