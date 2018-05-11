<?php
/**
 * Wizhi Shortcode
 * Wizhi CMS 插件使用的简码
 */

add_action( 'init', function ()
{

	// 检测 Shortcake 插件功能是否存在
	if ( ! function_exists( 'shortcode_ui_register_for_shortcode' ) ) {
		return;
	}

	// 只有管理员可以使用
	if ( ! is_admin() ) {
		return;
	}

	// 显示按钮
	shortcode_ui_register_for_shortcode( 'wprs_button', [
		'label'         => __( 'Button', 'wprs' ),
		'listItemImage' => 'dashicons-external',
		'attrs'         => [
			[
				'label'   => __( 'Button color', 'wprs' ),
				'attr'    => 'type',
				'type'    => 'select',
				'options' => wprs_data_colors(),
			],
			[
				'label'   => __( 'Button Size', 'wprs' ),
				'attr'    => 'size',
				'type'    => 'select',
				'options' => wprs_data_sizes(),
			],
			[
				'label' => __( 'Button text', 'wprs' ),
				'attr'  => 'text',
				'type'  => 'text',
				'meta'  => [
					'placeholder' => __( 'Button text', 'wprs' ),
				],
			],
			[
				'label' => __( 'Button Link', 'wprs' ),
				'attr'  => 'url',
				'type'  => 'url',
				'meta'  => [
					'placeholder' => 'http://',
				],
			],
		],
	] );


	// 显示分割线
	shortcode_ui_register_for_shortcode( 'wprs_divider', [
		'label'         => __( 'Divider line', 'wprs' ),
		'listItemImage' => 'dashicons-minus',
		'attrs'         => [
			[
				'label'   => __( 'Divider type', 'wprs' ),
				'attr'    => 'type',
				'type'    => 'select',
				'options' => [
					'solid'  => __( 'Solid', 'wprs' ),
					'shadow' => __( 'Shadow', 'wprs' ),
				],
			],
		],
	] );


	// 显示内容标题
	shortcode_ui_register_for_shortcode( 'wprs_heading', [
			'label'         => __( 'Heading', 'wprs' ),
			'listItemImage' => 'dashicons-editor-bold',
			'attrs'         => [
				[
					'label'   => __( 'Heading type', 'wprs' ),
					'attr'    => 'type',
					'type'    => 'select',
					'options' => [
						'background' => __( 'With background', 'wprs' ),
						'border'     => __( 'With border', 'wprs' ),
					],
				],
				[
					'label' => __( 'Heading text', 'wprs' ),
					'attr'  => 'content',
					'type'  => 'text',
					'meta'  => [
						'placeholder' => __( 'Please enter heading text', 'wprs' ),
					],
				],
			],
		]

	);


	// 显示提示信息
	shortcode_ui_register_for_shortcode( 'wprs_alert', [
		'label'         => __( 'Alert', 'wprs' ),
		'listItemImage' => 'dashicons-info',
		'attrs'         => [
			[
				'label'   => __( 'Alert type', 'wprs' ),
				'attr'    => 'type',
				'type'    => 'select',
				'options' => wprs_data_colors(),
			],
			[
				'label' => __( 'Alert content', 'wprs' ),
				'attr'  => 'content',
				'type'  => 'textarea',
				'meta'  => [
					'placeholder' => __( 'Please enter alert content', 'wprs' ),
				],
			],
		],
	] );


	// 创建显示页面内容UI
	shortcode_ui_register_for_shortcode( 'wprs_content', [
		'label'         => __( 'Page content', 'wprs' ),
		'listItemImage' => 'dashicons-media-document',
		'attrs'         => [
			[
				'label' => __( 'Page ID', 'wprs' ),
				'attr'  => 'id',
				'type'  => 'post_select',
				'query' => [ 'post_type' => 'page' ],
			],
			[
				'label' => __( 'Show text count', 'wprs' ),
				'attr'  => 'cont',
				'type'  => 'text',
				'value' => '120',
			],
			[
				'label' => __( 'Show more link', 'wprs' ),
				'attr'  => 'more',
				'type'  => 'checkbox',
				'value' => true,
			],
		],
	] );


	// 创建文章列表UI
	shortcode_ui_register_for_shortcode( 'wprs_loop', [
		'label'         => __( 'Post title list', 'wprs' ),
		'listItemImage' => 'dashicons-media-text',
		'attrs'         => [
			[
				'label'   => __( 'Post type', 'wprs' ),
				'attr'    => 'type',
				'type'    => 'select',
				'value'   => 'post',
				'options' => wprs_data_post_types(),
			],
			[
				'label'   => __( 'Taxonomy', 'wprs' ),
				'attr'    => 'tax',
				'type'    => 'select',
				'value'   => 'category',
				'options' => wprs_data_taxonomies(),
			],
			[
				'label' => __( 'Term', 'wprs' ),
				'attr'  => 'tag',
				'type'  => 'text',
				'value' => 'default',
			],
			[
				'label' => __( 'Offset post count', 'wprs' ),
				'attr'  => 'offset',
				'type'  => 'number',
				'value' => 0,
			],
			[
				'label' => __( 'Show post count', 'wprs' ),
				'attr'  => 'num',
				'type'  => 'number',
				'value' => 12,
			],
			[
				'label' => __( 'Show term title as module heading', 'wprs' ),
				'attr'  => 'heading',
				'type'  => 'checkbox',
				'value' => true,
			],
			[
				'label'   => __( 'List Template', 'wprs' ),
				'attr'    => 'tmp',
				'type'    => 'select',
				'value'   => '',
				'options' => wprs_data_templates( 'templates/loop' ),
			],
		],
	] );

} );