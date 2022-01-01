<?php

	class ageland_custom_post_type {
		
		function __construct() {
			
			add_action('init', array(&$this,'ageland_builder_post_type'));
			add_action('init', array(&$this,'create_builder_post_taxonomy'));
            add_action('init', array(&$this, 'create_services_cpt'));
            add_action('init', array(&$this, 'services_taxonomy'), 0);
            add_action('init', array(&$this, 'create_project_cpt'));
            add_action('init', array(&$this, 'project_taxonomy'), 0);
            add_action('init', array(&$this, 'create_features_cpt'));
            add_action('init', array(&$this, 'features_taxonomy'), 0);

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
                'menu_icon' => 'dashicons-megaphone',
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

       // Doctor Post Type
        function create_features_cpt() {
            $labels = array(
                'name' => __('Features', 'ageland'),
                'singular_name' => __('Feature', 'ageland'),
                'add_new' => __('Add feature', 'ageland'),
                'add_new_item' => __('Add feature', 'ageland'),
                'edit_item' => __('Edit feature', 'ageland'),
                'new_item' => __('New feature', 'ageland'),
                'all_items' => __('All feature', 'ageland'),
                'view_item' => __('View feature', 'ageland'),
                'search_items' => __('Search feature', 'ageland'),
                'not_found' => __('No feature found', 'ageland'),
                'not_found_in_trash' => __('No feature found in the trash', 'ageland'),
                'parent_item_colon' => '',
                'supports' => array('post-formats'),
                'menu_name' => __('Features', 'ageland')
            );
            $args = array(
                'labels' => $labels,
                'public' => true,
                'menu_position' => 6,
                'menu_icon' => 'dashicons-plus-alt',
                'taxonomies' => array('feature_category'),
                'supports' => array('title', 'editor', 'thumbnail', 'excerpt','elementor'),
                'has_archive' => true,
            );
            register_post_type('features', $args);
        }

        function Features_taxonomy() {
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
                'rewrite' => array('slug' => 'feature_category'),
            );
            register_taxonomy('feature_category', 'features', $args);
        }
					
	}  

    new ageland_custom_post_type();

