<?php

	class ageland_custom_post_type {
		
		function __construct() {
			
			add_action('init', array(&$this,'ageland_builder_post_type'));
			add_action('init', array(&$this,'create_builder_post_taxonomy'));
            add_action('init', array(&$this, 'create_services_cpt'));
            add_action('init', array(&$this, 'services_taxonomy'), 0);
            add_action('init', array(&$this, 'create_project_cpt'));
            add_action('init', array(&$this, 'project_taxonomy'), 0);

        }
	  // Builder Post Type
		function ageland_builder_post_type() {
        $labels = array(
            'name' => __('Ageland Builder', 'ageland'),
            'singular_name' => __('Ageland Builder', 'ageland'),
            'add_new' => __('Add ageland builder', 'ageland'),
            'add_new_item' => __('Add ageland builder', 'ageland'),
            'edit_item' => __('Edit ageland builder', 'ageland'),
            'new_item' => __('New ageland builder', 'ageland'),
            'all_items' => __('All ageland builder', 'ageland'),
            'view_item' => __('View ageland builder', 'ageland'),
            'search_items' => __('Search ageland builder', 'ageland'),
            'not_found' => __('No ageland builder found', 'ageland'),
            'not_found_in_trash' => __('No portfolio found in the trash', 'ageland'),
            'parent_item_colon' => '',
            'menu_name' => __('Ageland Theme Builder', 'ageland')
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-admin-multisite',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt','elementor'),
            'has_archive' => false,
        );
            register_post_type('ageland_builders', $args);
        }

        function create_builder_post_taxonomy() {
            $labels = array(
                'name' => __('Category', 'ageland'),
                'singular_name' => __('Category', 'ageland'),
                'search_items' => __('Search categories', 'ageland'),
                'all_items' => __('Categories', 'ageland'),
                'parent_item' => __('Parent category', 'ageland'),
                'parent_item_colon' => __('Parent category:', 'ageland'),
                'edit_item' => __('Edit category', 'ageland'),
                'update_item' => __('Update category', 'ageland'),
                'add_new_item' => __('Add category', 'ageland'),
                'new_item_name' => __('New category', 'ageland'),
                'menu_name' => __('Category', 'ageland'),
            );
            $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                'show_ui' => true,
                'show_admin_column' => true,
                'rewrite' => array('slug' => 'ageland_builder_cat'),
            );
            register_taxonomy('ageland_builder_cat', 'ageland_builders', $args);
        }

        // Services Post type
        function create_services_cpt() {
            $labels = array(
                'name' => __('Service', 'ageland'),
                'singular_name' => __('Service', 'ageland'),
                'add_new' => __('Add service', 'ageland'),
                'add_new_item' => __('Add service', 'ageland'),
                'edit_item' => __('Edit service', 'ageland'),
                'new_item' => __('New service', 'ageland'),
                'all_items' => __('All service', 'ageland'),
                'view_item' => __('View service', 'ageland'),
                'search_items' => __('Search service', 'ageland'),
                'not_found' => __('No service found', 'ageland'),
                'not_found_in_trash' => __('No portfolio found in the trash', 'ageland'),
                'parent_item_colon' => '',
                'supports' => array('post-formats'),
                'menu_name' => __('Services', 'ageland')
            );
            $args = array(
                'labels' => $labels,
                'public' => true,
                'menu_position' => 5,
                'menu_icon' => 'dashicons-megaphone',
                'taxonomies' => array('service_category'),
                'supports' => array('title', 'editor', 'thumbnail', 'excerpt','elementor'),
                'has_archive' => true,
            );
            register_post_type('services', $args);
        }

        function services_taxonomy() {
            $labels = array(
                'name' => __('Category', 'ageland'),
                'singular_name' => __('Category', 'ageland'),
                'search_items' => __('Search categories', 'ageland'),
                'all_items' => __('Categories', 'ageland'),
                'parent_item' => __('Parent category', 'ageland'),
                'parent_item_colon' => __('Parent category:', 'ageland'),
                'edit_item' => __('Edit category', 'ageland'),
                'update_item' => __('Update category', 'ageland'),
                'add_new_item' => __('Add category', 'ageland'),
                'new_item_name' => __('New category', 'ageland'),
                'menu_name' => __('Category', 'ageland'),
            );
            $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                'show_ui' => true,
                'show_admin_column' => true,
                'rewrite' => array('slug' => 'service_category'),
            );
            register_taxonomy('service_category', 'services', $args);
        }

        // Project Post type
        function create_project_cpt() {
            $labels = array(
                'name' => __('Project', 'ageland'),
                'singular_name' => __('Project', 'ageland'),
                'add_new' => __('Add project', 'ageland'),
                'add_new_item' => __('Add project', 'ageland'),
                'edit_item' => __('Edit project', 'ageland'),
                'new_item' => __('New project', 'ageland'),
                'all_items' => __('All project', 'ageland'),
                'view_item' => __('View project', 'ageland'),
                'search_items' => __('Search project', 'ageland'),
                'not_found' => __('No project found', 'ageland'),
                'not_found_in_trash' => __('No portfolio found in the trash', 'ageland'),
                'parent_item_colon' => '',
                'supports' => array('post-formats'),
                'menu_name' => __('Projects', 'ageland')
            );
            $args = array(
                'labels' => $labels,
                'public' => true,
                'menu_position' => 5,
                'menu_icon' => 'dashicons-archive',
                'taxonomies' => array('project_cat'),
                'supports' => array('title', 'editor', 'thumbnail', 'excerpt','elementor'),
                'has_archive' => true,
            );
            register_post_type('project', $args);
        }

        function project_taxonomy() {
            $labels = array(
                'name' => __('Category', 'ageland'),
                'singular_name' => __('Category', 'ageland'),
                'search_items' => __('Search categories', 'ageland'),
                'all_items' => __('Categories', 'ageland'),
                'parent_item' => __('Parent category', 'ageland'),
                'parent_item_colon' => __('Parent category:', 'ageland'),
                'edit_item' => __('Edit category', 'ageland'),
                'update_item' => __('Update category', 'ageland'),
                'add_new_item' => __('Add category', 'ageland'),
                'new_item_name' => __('New category', 'ageland'),
                'menu_name' => __('Category', 'ageland'),
            );
            $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                'show_ui' => true,
                'show_admin_column' => true,
                'rewrite' => array('slug' => 'project_cat'),
            );
            register_taxonomy('project_cat', 'project', $args);
        }

        // Team Post type
        function create_team_cpt() {
            $labels = array(
                'name' => __('Team', 'ageland'),
                'singular_name' => __('Team', 'ageland'),
                'add_new' => __('Add Team', 'ageland'),
                'add_new_item' => __('Add Team', 'ageland'),
                'edit_item' => __('Edit Team', 'ageland'),
                'new_item' => __('New Team', 'ageland'),
                'all_items' => __('All Team', 'ageland'),
                'view_item' => __('View Team', 'ageland'),
                'search_items' => __('Search Team', 'ageland'),
                'not_found' => __('No Team found', 'ageland'),
                'not_found_in_trash' => __('No portfolio found in the trash', 'ageland'),
                'parent_item_colon' => '',
                'supports' => array('post-formats'),
                'menu_name' => __('Teams', 'ageland')
            );
            $args = array(
                'labels' => $labels,
                'public' => true,
                'menu_position' => 5,
                'menu_icon' => 'dashicons-archive',
                'taxonomies' => array('Team_cat'),
                'supports' => array('title', 'editor', 'thumbnail', 'excerpt','elementor'),
                'has_archive' => true,
            );
            register_post_type('Team', $args);
        }

        function team_taxonomy() {
            $labels = array(
                'name' => __('Team', 'ageland'),
                'singular_name' => __('Team', 'ageland'),
                'search_items' => __('Search Teams', 'ageland'),
                'all_items' => __('Teams', 'ageland'),
                'parent_item' => __('Parent Team', 'ageland'),
                'parent_item_colon' => __('Parent Team:', 'ageland'),
                'edit_item' => __('Edit Team', 'ageland'),
                'update_item' => __('Update Team', 'ageland'),
                'add_new_item' => __('Add Team', 'ageland'),
                'new_item_name' => __('New Team', 'ageland'),
                'menu_name' => __('Team', 'ageland'),
            );
            $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                'show_ui' => true,
                'show_admin_column' => true,
                'rewrite' => array('slug' => 'team_cat'),
            );
            register_taxonomy('team_cat', 'team', $args);
        }
					
	}  

    new ageland_custom_post_type();

