<?php

    register_nav_menus(array(
	'Main'   => 'Main Menu',
	'Footer' => 'Footer Menu',
    ));
    
    add_theme_support('post-thumbnails');
    
    function evis_custom_post_type()
    {
        register_post_type('our_work',
            array(
                'labels'        => array(
                'name'          => __('Our Works'),
                'singular_name' => __('Our Works'),
                'add_new'       => 'Add Work',
		'all_items'     => 'All Works',
		'add_new_item'  => 'Add Work',
		'edit_item'     => 'Edit Work',
		'new_item'      => 'New Work',
		'view_item'     => 'View Work'
            ),
                'public'        => true,
                'has_archive'   => true,
                'rewrite'       => array('slug' => 'our_work'),
                'menu_position' => 3,
                'menu_icon'     => 'dashicons-admin-multisite',
                'supports'      => array('title', 'editor', 'thumbnail', 'revisions')
            )
        );
    }
    add_action('init', 'evis_custom_post_type');