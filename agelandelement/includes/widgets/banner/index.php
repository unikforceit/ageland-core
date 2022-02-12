<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ageland_banner extends Widget_Base
{

    public function get_name()
    {
        return 'ageland-banner';
    }

    public function get_title()
    {
        return __('Banner', 'ageland');
    }

    public function get_categories()
    {
        return ['agelandelement-addons'];
    }

    public function get_icon()
    {
        return 'eicon-image';
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Your Own Extension', 'ageland'),
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __('Sub Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Project Manage', 'ageland'),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __('Info', 'ageland'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Amet, dui, lacus in non massa id tellus amet tincidunt. Lacus ut integer
                 blandit diam nibh pulvinar. Ultrices phasellus', 'ageland'),
            ]
        );
        $this->add_control(
            'button1',
            [
                'label' => __('Button 1', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Download Ageland', 'ageland'),
            ]
        );
        $this->add_control(
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
        $this->add_control(
            'button2',
            [
                'label' => __('Button 2', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Watch A Demo', 'ageland'),
            ]
        );
        $this->add_control(
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
        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'image4',
            [
                'label' => __( 'Shape', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'layout' => ['layout4'],
                ],
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        // Start repeater
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            't_title',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Icon', 'ageland' ),
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
            'link11', [
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
        $this->add_control(
            'icon_list',
            [
                'label' => __( 'Icon List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'condition' => [
                    'layout' => ['layout2'],
                ],
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        't_title' => __( 'Icon', 'ageland' ),
                    ],
                    [
                        't_title' => __( 'Icon', 'ageland' ),
                    ],
                    [
                        't_title' => __( 'Icon', 'ageland' ),
                    ],
                    [
                        't_title' => __( 'Icon', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ t_title }}}',
            ]
        );
        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'shape_title',
            [
                'label' => __( 'Shape Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Shape Icon', 'ageland' ),
            ]
        );
        $repeater2->add_control(
            'shape_image',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_list',
            [
                'label' => __( 'Shape List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'condition' => [
                    'layout' => ['layout3','layout4'],
                ],
                'fields' => $repeater2->get_controls(),
                'default' => [
                    [
                        'shape_title' => __( 'Shape', 'ageland' ),
                    ],
                    [
                        'shape_title' => __( 'Shape', 'ageland' ),
                    ],
                    [
                        'shape_title' => __( 'Shape', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ shape_title }}}',
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
                    'layout3' => [
                        'title' => __( 'Three', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout4' => [
                        'title' => __( 'Four', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Style', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion .acc-btn p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .accordion .acc-btn p',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __('Content Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-box .accordion .acc-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __('Content Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .accordion-box .accordion .acc-content p',
            ]
        );
        $this->add_control(
            'social_bg',
            [
                'label' => __('Background', 'ageland'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'banner-area-v33',
                'label' => __('banner-area-v33', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => ['layout1'],
                ],
                'selector' => '{{WRAPPER}} .hero_banner:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'banner-area-v333',
                'label' => __('banner-area-v333', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => ['layout1'],
                ],
                'selector' => '{{WRAPPER}} .hero_banner:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'banner-area-v3',
                'label' => __('banner-area-v3', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => ['layout1','layout2'],
                ],
                'selector' => '{{WRAPPER}} .hero_banner',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'banner-area-v32',
                'label' => __('banner-area-v3', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => ['layout3'],
                ],
                'selector' => '{{WRAPPER}} .ag_banner_part.banner_bg_img',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'banner-area-v323',
                'label' => __('banner-area-v3', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => ['layout4'],
                ],
                'selector' => '{{WRAPPER}} .ag_banner_part.banner_bg_img_shape',
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include dirname(__FILE__). '/' . $settings['layout']. '.php';
    }


    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register(new ageland_banner());
?>