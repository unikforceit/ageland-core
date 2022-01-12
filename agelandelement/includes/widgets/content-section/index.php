<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ageland_content_section extends Widget_Base
{

    public function get_name()
    {
        return 'ageland-content-section';
    }

    public function get_title()
    {
        return __('Content Section', 'ageland');
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
                'default' => __('About Us', 'ageland'),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __('Info', 'ageland'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Enim adipi svsciang pellentesque curabitur at tellus pharetra non. Natoque 
                dosnec quis felis nunc, amet. Integer venenatis at velit malesuada vestibulum tempor vitae. Eu sed proin eget
                 aliquet varius in quis. Volutpat turpis quis quis posues re.', 'ageland'),
            ]
        );
        $this->add_control(
            'title2',
            [
                'label' => __('Title 2', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'condition' => [
                    'layout' => 'layout9',
                ],
                'default' => __('About Us', 'ageland'),
            ]
        );
        $this->add_control(
            'info2',
            [
                'label' => __('Info 2', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'condition' => [
                    'layout' => 'layout9',
                ],
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Enim adipi svsciang pellentesque curabitur at tellus pharetra non. Natoque 
                dosnec quis felis nunc, amet. Integer venenatis at velit malesuada vestibulum tempor vitae. Eu sed proin eget
                 aliquet varius in quis. Volutpat turpis quis quis posues re.', 'ageland'),
            ]
        );
        $this->add_control(
            'title3',
            [
                'label' => __('Title 3', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'condition' => [
                    'layout' => 'layout9',
                ],
                'default' => __('About Us', 'ageland'),
            ]
        );
        $this->add_control(
            'info3',
            [
                'label' => __('Info 3', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'condition' => [
                    'layout' => 'layout9',
                ],
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Enim adipi svsciang pellentesque curabitur at tellus pharetra non. Natoque 
                dosnec quis felis nunc, amet. Integer venenatis at velit malesuada vestibulum tempor vitae. Eu sed proin eget
                 aliquet varius in quis. Volutpat turpis quis quis posues re.', 'ageland'),
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __('Sub Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'condition' => [
                    'layout' => ['layout5'],
                ],
                'default' => __('<span>Try Us </span> for better services.', 'ageland'),
            ]
        );
        $this->add_control(
            'sub_info',
            [
                'label' => __('Sub Info', 'ageland'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'condition' => [
                    'layout' => ['layout5'],
                ],
                'default' => __('We’ve a huge number of team members and all member’s are highly skilled & experienced.', 'ageland'),
            ]
        );
        $this->add_control(
            'button',
            [
                'label' => __('Button', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Read More', 'ageland'),
            ]
        );
        $this->add_control(
            'link', [
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
            'image1',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title3',
            [
                'label' => __('Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Cloud Service', 'ageland'),
            ]
        );
        $repeater->add_control(
            'image3',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'layout' => ['layout3','layout6'],
                ],
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'content_list3',
            [
                'label' => __( 'Content List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'condition' => [
                    'layout' => ['layout3','layout6'],
                ],
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Ageland', 'ageland' ),
                    ],
                    [
                        'title' => __( 'Ageland', 'ageland' ),
                    ],
                    [
                        'title' => __( 'Ageland', 'ageland' ),
                    ],
                ],
                'title_field' => '{{{ title3 }}}',
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
                    'layout5' => [
                        'title' => __( 'Five', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout6' => [
                        'title' => __( 'Six', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout7' => [
                        'title' => __( 'Seven', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout8' => [
                        'title' => __( 'Eight', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout9' => [
                        'title' => __( 'Nine', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );
        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'title5',
            [
                'label' => __('Icon', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Icon', 'ageland'),
            ]
        );
        $repeater2->add_control(
            'iconnn',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'icon_list',
            [
                'label' => __( 'icon List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'condition' => [
                    'layout' => ['layout2','layout7'],
                ],
                'fields' => $repeater2->get_controls(),
                'default' => [
                    [
                        'title' => __( 'List', 'ageland' ),
                    ],
                    [
                        'title' => __( 'List', 'ageland' ),
                    ],
                    [
                        'title' => __( 'List', 'ageland' ),
                    ],
                ],
                'title_field' => '{{{ title5 }}}',
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
            'dghdfh',
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
                'name' => 'con_lay4',
                'label' => __('Icon Image', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => 'layout1',
                ],
                'selector' => '{{WRAPPER}} .about_us_sec:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'con_lay444',
                'label' => __('Icon Image', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => 'layout3',
                ],
                'selector' => '{{WRAPPER}} .get_plan_sec:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'con_lay44',
                'label' => __('Icon Image', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => 'layout4',
                ],
                'selector' => '{{WRAPPER}} .interested_pro.home2:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'con_lay442',
                'label' => __('Icon Image', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => 'layout5',
                ],
                'selector' => '{{WRAPPER}} .about_section.about_bg',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'con_lay4422',
                'label' => __('Icon Image', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => 'layout6',
                ],
                'selector' => '{{WRAPPER}} .cta_section.cta_bg',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'con_lay44224',
                'label' => __('Icon Image', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => 'layout7',
                ],
                'selector' => '{{WRAPPER}} .about_section.about_bg_02',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'con_lay442242',
                'label' => __('Icon Image', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => 'layout8',
                ],
                'selector' => '{{WRAPPER}} .cta_section_style_02.cta_bg',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'con_lay4422424',
                'label' => __('Icon Image', 'ageland'),
                'types' => ['classic', 'gradient'],
                'condition' => [
                    'layout' => 'layout9',
                ],
                'selector' => '{{WRAPPER}} .about_us_sec:after',
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

Plugin::instance()->widgets_manager->register(new ageland_content_section());
?>