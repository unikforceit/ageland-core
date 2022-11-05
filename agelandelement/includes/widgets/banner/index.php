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
        return __('Ageland Banner', 'ageland');
    }

    public function get_categories()
    {
        return ['agelandelement-addons'];
    }

    public function get_icon()
    {
        return 'eicon-image';
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout',
            [
                'label' => __('Layout', 'ageland'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __('Home 1 Banner', 'ageland'),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __('Choose Banner', 'ageland'),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout3' => [
                        'title' => __('Home 2 Banner', 'ageland'),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout4' => [
                        'title' => __('Contact Us Banner', 'ageland'),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout5' => [
                        'title' => __('Banner 5', 'ageland'),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        ); // layouts

        $this->add_control(
            'graphic_image1',
            [
                'label' => __('Graphic Image One', 'ageland'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        ); // Graphic One image
        $this->add_control(
            'sub_title',
            [
                'label' => __('Sub Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Sub Title', 'ageland'),
            ]
        ); // subtitle
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Title', 'ageland'),
            ]
        ); // title
        $this->add_control(
            'info',
            [
                'label' => __('Info', 'ageland'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('A Forward Thinking digital agency, that helps clients world-wide build stronger digital presence that people remember.', 'ageland'),
            ]
        ); // info
        $this->add_control(
            'button1',
            [
                'label' => __('Button 1', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Learn More About Us', 'ageland'),
            ]
        ); // button one
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
        ); // button one link
        $this->add_control(
            'thumb_image',
            [
                'label' => __('Thumb Image', 'ageland'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        ); // thumb image

        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'shape_title',
            [
                'label' => __('Shape Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Shape Icon', 'ageland'),
            ]
        );
        $repeater2->add_control(
            'shape_image',
            [
                'label' => __('Choose Image', 'ageland'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_list',
            [
                'label' => __('Shape List', 'ageland'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'condition' => [
                    'layout' => ['layout3', 'layout4'],
                ],
                'fields' => $repeater2->get_controls(),
                'default' => [
                    [
                        'shape_title' => __('Shape', 'ageland'),
                    ],
                    [
                        'shape_title' => __('Shape', 'ageland'),
                    ],
                    [
                        'shape_title' => __('Shape', 'ageland'),
                    ],

                ],
                'title_field' => '{{{ shape_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section1',
            [
                'label' => __('Rating-Customers', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rating_icon',
            [
                'label' => __('Rating Icon', 'ageland'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'rating_point',
            [
                'label' => __('Rating Point', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('4.8/5', 'ageland'),
            ]
        );
        $this->add_control(
            'rating_text',
            [
                'label' => __('Rating Text', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Point', 'ageland'),
            ]
        );
//        Customers
        $repeater = new Repeater();
        $repeater->add_control(
            'customers_image', [
                'label' => esc_html__('Customers Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload 3 customers image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $this->add_control('customers_list', [
            'label' => esc_html__('Customers List', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]);
        $this->add_control(
            'customers_no',
            [
                'label' => __('Customers Number', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('2291', 'ageland'),
            ]
        );
        $this->add_control(
            'customers_text',
            [
                'label' => __('Customers Text', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Happy Customers', 'ageland'),
            ]
        );

        $this->end_controls_section();

//        Graphic section
        $this->start_controls_section(
            'graphic_section',
            [
                'label' => esc_html__('Graphic Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'graphic_image', [
                'label' => esc_html__('Graphic Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload about graphic image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $this->add_control('graphic_list', [
            'label' => esc_html__('Graphic Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]);
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
                    'layout' => ['layout1', 'layout2'],
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
        include dirname(__FILE__) . '/' . $settings['layout'] . '.php';
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