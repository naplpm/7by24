<?php


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_backgrounds',
		'title' => 'Backgrounds',
		'fields' => array (
			array (
				'key' => 'field_545bed1f33b9a',
				'label' => 'Page Background',
				'name' => 'page_background',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_top-banner',
		'title' => 'top banner',
		'fields' => array (
			array (
				'key' => 'field_545c1c9bb5de4',
				'label' => 'Top Banner',
				'name' => 'top_banner',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'discussion',
				3 => 'comments',
				4 => 'author',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_home-page',
		'title' => 'Home Page',
		'fields' => array (
			array (
				'key' => 'field_545d28d439770',
				'label' => 'First Message',
				'name' => 'first_message',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545d28e739771',
				'label' => 'Second Message',
				'name' => 'second_message',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545d5ede217ca',
				'label' => 'Download Text',
				'name' => 'download_text',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_rates-banner',
		'title' => 'Rates Banner',
		'fields' => array (
			array (
				'key' => 'field_545d7fd75f590',
				'label' => 'Rates Title',
				'name' => 'rates_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545d80045f591',
				'label' => 'Rates Bullet 1',
				'name' => 'rates_bullet_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545d80205f592',
				'label' => 'Rates Bullet 2',
				'name' => 'rates_bullet_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545d80285f593',
				'label' => 'Rates Bullet 3',
				'name' => 'rates_bullet_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),

			array (
				'key' => 'field_545e603b8ec92',
				'label' => 'Sample Rates text 1',
				'name' => 'sample_rates_text_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545e60598ec93',
				'label' => 'Sample Rates text 2',
				'name' => 'sample_rates_text_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545e3f9e58e2b',
				'label' => 'Rates Selector',
				'name' => 'rates_selector',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54636cdbb0156',
				'label' => 'from',
				'name' => 'from',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54636ce5b0157',
				'label' => 'per minute',
				'name' => 'per_minute',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54629f786a084',
				'label' => 'Read more',
				'name' => 'read_more',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54629feefb5d6',
				'label' => 'Rates Link',
				'name' => 'rates_link',
				'type' => 'page_link',
				'required' => 1,
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 3,
	));
	register_field_group(array (
		'id' => 'acf_pin-less',
		'title' => 'Pin-less',
		'fields' => array (
			array (
				'key' => 'field_545e4cc50b26e',
				'label' => 'Pin-less Title',
				'name' => 'pin-less_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545e4cdd0b26f',
				'label' => 'Pin-Less copy',
				'name' => 'pin-less_copy',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_545e4cf10b270',
				'label' => 'Pin-Less link',
				'name' => 'pin-less_link',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 4,
	));
	register_field_group(array (
		'id' => 'acf_retailer',
		'title' => 'Retailer',
		'fields' => array (
			array (
				'key' => 'field_545e5c6bb292c',
				'label' => 'Retailers Title',
				'name' => 'retailers_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_545e5c77b292d',
				'label' => 'Retailers Copy',
				'name' => 'retailers_copy',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546135b056016',
				'label' => 'Retailers Link',
				'name' => 'retailers_link',
				'type' => 'page_link',
				'required' => 1,
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 5,
	));
}

add_action( 'init', 'my_custom_init' );
function my_custom_init() {
	remove_post_type_support( 'post', 'editor' );
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_mobile-apps',
		'title' => 'Mobile Apps',
		'fields' => array (
			array (
				'key' => 'field_546e610db63a7',
				'label' => 'App Features Title',
				'name' => 'app_features_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e5e911e9f3',
				'label' => 'App Feature 1',
				'name' => 'app_feature_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e60a471b9d',
				'label' => 'App Feature 2',
				'name' => 'app_feature_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e60a371b9c',
				'label' => 'App Feature 3',
				'name' => 'app_feature_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e60a371b9b',
				'label' => 'App Feature 4',
				'name' => 'app_feature_4',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e60a271b9a',
				'label' => 'App Feature 5',
				'name' => 'app_feature_5',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e60a171b99',
				'label' => 'App Feature 6',
				'name' => 'app_feature_6',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e60a171b98',
				'label' => 'App Feature 7',
				'name' => 'app_feature_7',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e60a171b97',
				'label' => 'App Feature 8',
				'name' => 'app_feature_8',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e60a071b96',
				'label' => 'App Feature 9',
				'name' => 'app_feature_9',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e60a071b95',
				'label' => 'App Feature 10',
				'name' => 'app_feature_10',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e609f71b94',
				'label' => 'App Feature 11',
				'name' => 'app_feature_11',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_546e609d71b93',
				'label' => 'App Feature 12',
				'name' => 'app_feature_12',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474a0ba8153b',
				'label' => 'User Guides Title',
				'name' => 'user_guides_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474a0d08153c',
				'label' => 'User Guides Text',
				'name' => 'user_guides_text',
				'type' => 'wysiwyg',
				'required' => 1,
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5474a0eb8153d',
				'label' => 'User Guides Link',
				'name' => 'user_guides_link',
				'type' => 'page_link',
				'required' => 1,
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5474f88db4485',
				'label' => 'iOs User Guides Button',
				'name' => 'ios_user_guides_button',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5474f8bcb4486',
				'label' => 'iOs User Guides PDF',
				'name' => 'ios_user_guides_pdf',
				'type' => 'file',
				'required' => 1,
				'save_format' => 'url',
				'library' => 'all',
			),
			array (
				'key' => 'field_5485e9abaf46e',
				'label' => 'Android User Guides Button',
				'name' => 'android_user_guides_button',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5485e9bcaf46f',
				'label' => 'Android User Guides PDF',
				'name' => 'android_user_guides_pdf',
				'type' => 'file',
				'required' => 1,
				'save_format' => 'url',
				'library' => 'all',
			),
			array (
				'key' => 'field_5474f95a01073',
				'label' => 'Acrobat Reader Link',
				'name' => 'acrobat_reader_link',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5475039bd9496',
				'label' => 'Low Rates Details',
				'name' => 'low_rates_details',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_547503c9d9497',
				'label' => 'Low Rates Link',
				'name' => 'low_rates_link',
				'type' => 'page_link',
				'required' => 1,
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_547503d7d9498',
				'label' => 'PIN-LESS Details',
				'name' => 'pin-less_details',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_547503ebd9499',
				'label' => 'PIN-LESS link',
				'name' => 'pin-less_link',
				'type' => 'page_link',
				'required' => 1,
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5475040bc81bf',
				'label' => 'Asterisk',
				'name' => 'asterisk',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'app-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_retailers',
		'title' => 'Retailers',
		'fields' => array (
			array (
				'key' => 'field_547df0b140ccf',
				'label' => 'First Message',
				'name' => 'first_message',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54905e4f72bd7',
				'label' => 'Second Message',
				'name' => 'second_message',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_547df0c940cd0',
				'label' => 'Benefits Line 1',
				'name' => 'benefits_line_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_547df0fbac89e',
				'label' => 'Benefits Line 2',
				'name' => 'benefits_line_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_547df107ac89f',
				'label' => 'Benefits Line 3',
				'name' => 'benefits_line_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54959e37cf4d4',
				'label' => 'Benefits PDF',
				'name' => 'benefits_pdf',
				'type' => 'file',
				'required' => 1,
				'save_format' => 'url',
				'library' => 'all',
			),
			array (
				'key' => 'field_547e11b978184',
				'label' => 'Login Line 1',
				'name' => 'login_line_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_547e122ac4fa7',
				'label' => 'Login Line 2',
				'name' => 'login_line_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_547e1108263df',
				'label' => 'Instructions Line 1',
				'name' => 'instructions_line_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_547e1114263e1',
				'label' => 'Instructions Line 2',
				'name' => 'instructions_line_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_547e1112263e0',
				'label' => 'Instructions Line 3',
				'name' => 'instructions_line_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54959e61cf4d5',
				'label' => 'Store Instructions PDF',
				'name' => 'store_instructions_pdf',
				'type' => 'file',
				'required' => 1,
				'save_format' => 'url',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'retailers-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_pin-less-2',
		'title' => 'Pin-Less',
		'fields' => array (
			array (
				'key' => 'field_5474b1f36256f',
				'label' => 'First Message',
				'name' => 'first_message',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474b20662570',
				'label' => 'Second Message',
				'name' => 'second_message',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474b499121e0',
				'label' => 'Pinless Feature 1',
				'name' => 'pinless_feature_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474b4b7121e2',
				'label' => 'Pinless Feature 2',
				'name' => 'pinless_feature_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474b4b6121e1',
				'label' => 'Pinless Feature 3',
				'name' => 'pinless_feature_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'pinless-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_rates',
		'title' => 'Rates',
		'fields' => array (
			array (
				'key' => 'field_5485f1d19b322',
				'label' => 'First Message',
				'name' => 'first_message',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5485f6865cee9',
				'label' => 'Rates Title',
				'name' => 'rates_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5485f696b2c77',
				'label' => 'Rates Selector',
				'name' => 'rates_selector',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_548600bc79068',
				'label' => 'Rates Bullets Title',
				'name' => 'rates_bullets_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5486008deb69e',
				'label' => 'Rates Bullet 1',
				'name' => 'rates_bullet_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5486009aeb6a1',
				'label' => 'Rates Bullet 2',
				'name' => 'rates_bullet_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5486009aeb6a0',
				'label' => 'Rates Bullet 3',
				'name' => 'rates_bullet_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54860099eb69f',
				'label' => 'Rates Bullet 4',
				'name' => 'rates_bullet_4',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54860d074c21b',
				'label' => 'Rates Bullets text 1',
				'name' => 'rates_bullets_text_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5486011729054',
				'label' => 'Rates Bullets text 2',
				'name' => 'rates_bullets_text_2',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'rates-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_easy-123',
		'title' => 'Easy 123',
		'fields' => array (
			array (
				'key' => 'field_5474bae61ac0c',
				'label' => 'Easy 123 Title',
				'name' => 'easy_123_title',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474baf11ac0d',
				'label' => 'Easy 123 Step 1',
				'name' => 'easy_123_step_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474bb1bf1e09',
				'label' => ' Easy 123 Step 1 text',
				'name' => 'easy_123_step_1_text',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5474bb061ac0f',
				'label' => 'Easy 123 Step 2',
				'name' => 'easy_123_step_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474bbb9728f9',
				'label' => ' Easy 123 Step 2 text',
				'name' => 'easy_123_step_2_text',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5474bb051ac0e',
				'label' => 'Easy 123 Step 3',
				'name' => 'easy_123_step_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5474bbb7728f8',
				'label' => ' Easy 123 Step 3 text',
				'name' => 'easy_123_step_3_text',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5474bbeac4d48',
				'label' => 'Easy 123 Available',
				'name' => 'easy_123_available',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'pinless-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_retailers-link',
		'title' => 'Retailers link',
		'fields' => array (
			array (
				'key' => 'field_54c56cd4a93b4',
				'label' => 'Retailers login link',
				'name' => 'retailers_login_link',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'http://',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'retailers-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
}

?>