<?php
/**
 * Wizhi Shortcode
 * Wizhi CMS 插件使用的简码
 */


add_shortcode( 'wprs_divider', 'wprs_divider' );
/**
 * 显示几种不同类型的分割线
 *
 * @param $atts
 *
 * @package shortcode
 *
 * @usage [divider type="solid"]
 *
 * @return string 经简码格式化后的 HTML 字符串
 */
function wprs_divider( $atts ) {
	$default = [
		'type' => 'solid',
	];
	extract( shortcode_atts( $default, $atts ) );

	$class = 'ui-divider';

	if ( $type ) {
		$class .= ' ui-divider-' . $type;
	}

	// 输出
	$html = '';
	$html .= '<div class="' . $class . '"></div>';

	return $html;
}


add_shortcode( 'wprs_heading', 'wprs_heading' );
/**
 * 显示几种不同类型的分割线
 *
 * @param $atts
 *
 * @package shortcode
 *
 * @usage [heading type="background" content="这是二级标题"]
 *
 * @return string 经简码格式化后的 HTML 字符串
 */
function wprs_heading( $atts ) {
	$default = [
		'type'    => 'background',
		'content' => '这是二级标题',
	];
	extract( shortcode_atts( $default, $atts ) );

	$class = 'ui-heading';

	if ( $type ) {
		$class .= ' ui-heading-' . $type;
	}

	// 输出
	$html = '';
	$html .= '<h2 class="' . $class . '">' . $content . '</h2>';

	return $html;
}


add_shortcode( 'wprs_alert', 'wprs_alert' );
/**
 * 显示几种不同类型的分割线
 *
 * @param $atts
 *
 * @package shortcode
 *
 * @usage [alert type="success" content="这是提示信息"]
 *
 * @return string 经简码格式化后的 HTML 字符串
 */
function wprs_alert( $atts ) {
	$default = [
		'type'    => 'info',
		'content' => '这是提示信息。',
	];
	extract( shortcode_atts( $default, $atts ) );

	$class = 'alert';

	if ( $type ) {
		$class .= ' alert-' . $type;
	}

	// 输出
	$html = '';
	$html .= '<div class="' . $class . '">' . $content . '</div>';

	return $html;
}


add_shortcode( 'wprs_button', 'wprs_button' );
/**
 * 显示链接按钮
 *
 * @param $atts
 *
 * @package shortcode
 *
 * @usage [button type="success" size='' text="这是链接" url="http://www.baidu.com"]
 *
 * @return string 经简码格式化后的 HTML 字符串
 */
function wprs_button( $atts ) {
	$default = [
		'type' => 'success',
		'size' => '',
		'text' => '这是链接',
		'url'  => 'http://',
	];
	extract( shortcode_atts( $default, $atts ) );

	$class = 'btn';

	if ( $type ) {
		$class .= ' btn-' . $type;
	}

	if ( $size ) {
		$class .= ' btn-' . $size;
	}

	// 输出
	$html = '';
	$html .= '<a target="_blank" class="' . $class . '" href="' . $url . '">' . $text . '</a>';

	return $html;
}
