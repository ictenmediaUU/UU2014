<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_54f80f2c7c9c3',
	'title' => 'Theme options',
	'fields' => array (
		array (
			'placement' => 'top',
			'endpoint' => 0,
			'key' => 'field_54f9b27dcd98d',
			'label' => 'Homepage',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'layout' => 'vertical',
			'choices' => array (
				'news_agenda' => 'news and agenda',
				'news' => 'news items only',
				'news2' => 'news items only with sidebar',
				'agenda' => 'agenda items only',
				'agenda2' => 'agenda items only with sidebar',
				'blog' => 'Blogpage tiles',
				'blog2' => 'Blogpage list with sidebar',
			),
			'default_value' => 'news_agenda',
			'other_choice' => 0,
			'save_other_choice' => 0,
			'allow_null' => 0,
			'return_format' => 'value',
			'key' => 'field_54f80f57662f3',
			'label' => 'Layout',
			'name' => 'uu_options_post_types',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 50,
				'class' => '',
				'id' => '',
			),
		),
		array (
			'taxonomy' => 'category',
			'field_type' => 'checkbox',
			'multiple' => 0,
			'allow_null' => 0,
			'return_format' => 'id',
			'add_term' => 1,
			'load_terms' => 0,
			'save_terms' => 1,
			'key' => 'field_54f98aefba4de',
			'label' => 'Categories news',
			'name' => 'uu_options_news_frontpage_cat',
			'type' => 'taxonomy',
			'instructions' => 'Choose one or more categories to display on the homepage. You may need to create a category first (menuitem: posts > categories)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'min' => 1,
			'max' => 10,
			'step' => 1,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_54f81046662f4',
			'label' => 'Number of news items',
			'name' => 'uu_options_news_amount',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 50,
				'class' => 'pull-right',
				'id' => '',
			),
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_54f98a7eba4dd',
			'label' => 'News alternative title',
			'name' => 'uu_options_alternative_title_news',
			'type' => 'text',
			'instructions' => 'Choose an alternative title for the items on the frontpage, i.e. "Blog".',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'default_value' => 1,
			'message' => '',
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'field_55014f8690c1a',
			'label' => 'News show publication date',
			'name' => 'uu_options_news_show_pubdate',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'min' => 1,
			'max' => 10,
			'step' => 1,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_54f810ef662f5',
			'label' => 'Number of agenda items',
			'name' => 'uu_options_agenda_amount',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 50,
				'class' => 'pull-right',
				'id' => '',
			),
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_54f98a27ba4dc',
			'label' => 'Agenda alternative title',
			'name' => 'uu_options_alternative_title_agenda',
			'type' => 'text',
			'instructions' => 'Optionally choose an alternative title for Agenda, i.e. "events"',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'taxonomy' => 'category',
			'field_type' => 'checkbox',
			'multiple' => 0,
			'allow_null' => 0,
			'return_format' => 'id',
			'add_term' => 1,
			'load_terms' => 0,
			'save_terms' => 1,
			'key' => 'field_56a9e01628d89',
			'label' => 'Categories agenda',
			'name' => 'uu_options_agenda_frontpage_cat',
			'type' => 'taxonomy',
			'instructions' => 'Choose one or more categories to display on the homepage. You may need to create a category first (menuitem: posts > categories)',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_54f80f57662f3',
						'operator' => '==',
						'value' => 'news_agenda',
					),
				),
				array (
					array (
						'field' => 'field_54f80f57662f3',
						'operator' => '==',
						'value' => 'agenda',
					),
				),
				array (
					array (
						'field' => 'field_54f80f57662f3',
						'operator' => '==',
						'value' => 'agenda2',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 1,
			'message' => '',
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'field_56700a47fef82',
			'label' => 'Read more buttons?',
			'name' => 'uu_options_frontpage_read_more_links',
			'type' => 'true_false',
			'instructions' => 'Display "read more" buttons below the news and agenda item blocks',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_56700ad3fef83',
			'label' => 'Read more button news alternative title',
			'name' => 'uu_options_alternative_read_more_title_news',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_54f80f57662f3',
						'operator' => '==',
						'value' => 'news_agenda',
					),
				),
				array (
					array (
						'field' => 'field_54f80f57662f3',
						'operator' => '==',
						'value' => 'news',
					),
				),
				array (
					array (
						'field' => 'field_54f80f57662f3',
						'operator' => '==',
						'value' => 'news2',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_56700fc65e349',
			'label' => 'Read more button agenda alternative title',
			'name' => 'uu_options_alternative_read_more_title_agenda',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_54f80f57662f3',
						'operator' => '==',
						'value' => 'news_agenda',
					),
				),
				array (
					array (
						'field' => 'field_54f80f57662f3',
						'operator' => '==',
						'value' => 'agenda',
					),
				),
				array (
					array (
						'field' => 'field_54f80f57662f3',
						'operator' => '==',
						'value' => 'agenda2',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'taxonomy' => 'category',
			'field_type' => 'checkbox',
			'multiple' => 0,
			'allow_null' => 0,
			'return_format' => 'id',
			'add_term' => 1,
			'load_terms' => 0,
			'save_terms' => 1,
			'key' => 'field_55f14f2d9ff78',
			'label' => 'Categories blog',
			'name' => 'uu_options_blog_frontpage_cat',
			'type' => 'taxonomy',
			'instructions' => 'Choose one or more categories to display on the homepage. You may need to create a category first (menuitem: posts > categories)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'layout' => 'vertical',
			'choices' => array (
				'name' => 'author name',
				'photo' => 'author photo',
				'link' => 'link to author page',
			),
			'default_value' => array (
				'' => '',
			),
			'allow_custom' => 0,
			'save_custom' => 0,
			'toggle' => 0,
			'return_format' => 'value',
			'key' => 'field_55ffd77bbcae9',
			'label' => 'Blog author options',
			'name' => 'uu_options_blog_author_options',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'placement' => 'top',
			'endpoint' => 0,
			'key' => 'field_5539ef695f800',
			'label' => 'Posts and pages',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'field_57d265134e04d',
			'label' => 'Show Banner widget on all pages?',
			'name' => 'uu_options_banner_widget_on_all_pages',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'layout' => 'horizontal',
			'choices' => array (
				'date' => 'Date of publication',
				'author' => 'Author',
				'taxonomy' => 'Category, tags or other taxonomy',
			),
			'default_value' => array (
				'date' => 'date',
				'author' => 'author',
				'taxonomy' => 'taxonomy',
			),
			'allow_custom' => 0,
			'save_custom' => 0,
			'toggle' => 0,
			'return_format' => 'value',
			'key' => 'field_5539ef7e5f801',
			'label' => 'Show Metadata',
			'name' => 'uu_options_posts_metadata',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 0,
			'message' => '',
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'field_56bd937a31583',
			'label' => 'Show Blog Author',
			'name' => 'uu_options_posts_blog_author',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => 1,
			'message' => '',
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'field_55ae16a94de12',
			'label' => 'People page trim description',
			'name' => 'uu_options_people_page_trim_description',
			'type' => 'true_false',
			'instructions' => 'Trim the description field on the people page and people page large template.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'uu-theme-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;