<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class ageland_team extends Widget_Base {

    public function get_name() {
        return 'ageland-team';
    }
 
    public function get_title() {
        return __('Team', 'ageland');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['agelandelement-addons'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'ageland' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Got A Question?', 'ageland' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                 tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'ageland' ),
            ]
        );
        $this->add_control(
            'layout',
            [
                'label' => __( 'Layout', 'ageland' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __( 'One', 'ageland' ),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __( 'Two', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            't_title',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Jerome Bell', 'ageland' ),
            ]
        );
        $repeater->add_control(
            't_desig',
            [
                'label' => __( 'Designation', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'UI/UX Designer', 'ageland' ),
            ]
        );
        $repeater->add_control(
			'icon1',
			[
				'label' => __( 'Social Icons 1', 'ageland' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-twitter',
					'library' => 'brand',
				],
			]
		);
        $repeater->add_control(
            'link1', [
                'label' => __('Link 1', 'ageland'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
			'icon2',
			[
				'label' => __( 'Social Icons 2', 'ageland' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-twitter',
					'library' => 'brand',
				],
			]
		);
        $repeater->add_control(
            'link2', [
                'label' => __('Link 2', 'ageland'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
			'icon3',
			[
				'label' => __( 'Social Icons 3', 'ageland' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-twitter',
					'library' => 'brand',
				],
			]
		);
        $repeater->add_control(
            'link3', [
                'label' => __('Link 3', 'ageland'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'team_list',
            [
                'label' => __( 'Team List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        't_title' => __( 'UI/UX Designer', 'ageland' ),
                    ],
                    [
                        't_title' => __( 'UI/UX Designer', 'ageland' ),
                    ],
                    [
                        't_title' => __( 'UI/UX Designer', 'ageland' ),
                    ],
                    [
                        't_title' => __( 'UI/UX Designer', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ t_title }}}',
            ]
        );
        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'image1',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater2->add_control(
            'team_icon',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Icon', 'ageland' ),
            ]
        );
        $this->add_control(
            'icon_list',
            [
                'label' => __( 'Icon List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater2->get_controls(),
                'default' => [
                    [
                        't_title' => __( 'UI/UX Designer', 'ageland' ),
                    ],
                    [
                        't_title' => __( 'UI/UX Designer', 'ageland' ),
                    ],
                    [
                        't_title' => __( 'UI/UX Designer', 'ageland' ),
                    ],
                    [
                        't_title' => __( 'UI/UX Designer', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ team_icon }}}',
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_settings',
            [
                'label' => __( 'General', 'ageland' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'banner-area-v33',
                'label' => __('banner-area-v3', 'ageland'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .teams_second_home2',
            ]
        );
        $this->end_controls_section();

    }
        
    protected function render(){

        $settings = $this->get_settings_for_display();

        include dirname(__FILE__). '/' . $settings['layout']. '.php';

    }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new ageland_team() );