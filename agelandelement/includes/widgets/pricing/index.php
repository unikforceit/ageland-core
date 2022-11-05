<?php
namespace Elementor;
use AgelandElement_Elementor_Addons;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ageland_pricing_table extends Widget_Base
{

    public function get_name()
    {
        return 'pricing-table';
    }

    public function get_title()
    {
        return __('Pricing Table', 'ageland');
    }

    public function get_categories()
    {
        return ['agelandelement-addons'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'pm',
            [
                'label' => __('Pricing', 'ageland'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout',
            [
                'label' => __( 'Layout', 'ageland' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __( 'Pricing Main', 'ageland' ),
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
        ); // layouts
        $this->end_controls_section();

        $this->start_controls_section(
            'pricing_plan',
            [
                'label' => __('Pricing Plan', 'ageland'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'plan_animation_duration',
            [
                'label' => __('Plan animation duration', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('2s', 'ageland'),
            ]
        );
        $repeater->add_control(
            'active_status', [
                'label' => __( 'Active Status', 'ageland' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'ACTIVE', 'ageland' ),
                'label_off' => __( 'INACTIVE', 'ageland' ),
                'return_value' => 'active',
            ]
        );
        $repeater->add_control(
            'plan_title',
            [
                'label' => __('Plan Title', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Personal', 'ageland'),
            ]
        );
        $repeater->add_control(
            'plan_price',
            [
                'label' => __('Plan Price', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('$20', 'ageland'),
            ]
        );
        $repeater->add_control(
            'plan_price_label',
            [
                'label' => __('Price Duration', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('/month', 'ageland'),
            ]
        );
        $repeater->add_control(
            'plan_features',
            [
                'label' => __('Plan Features', 'ageland'),
                'type' => \AgelandElement_Elementor_Addons::LIST_CONTROL,
            ]
        );
        $repeater->add_control(
            'plan_des',
            [
                'label' => __('Plan Description', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('The perfect plan for early stages start ups that want to launch quickly.', 'ageland'),
            ]
        );
        $repeater->add_control(
            'plan_btn',
            [
                'label' => __('Plan Button', 'ageland'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Choose This Plan', 'ageland'),
            ]
        );
        $repeater->add_control(
            'plan_btn_link', [
                'label' => __('Plan Button Link', 'ageland'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

        $repeater1 = new \Elementor\Repeater();
        $repeater1->add_control(
            'rmtitle',
            [
                'label' => __('Title', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Standard', 'ageland'),
            ]
        );
        $repeater1->add_control(
            'rmprice',
            [
                'label' => __('Price', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('$90.99', 'ageland'),
            ]
        );
        $repeater1->add_control(
            'rmsub',
            [
                'label' => __('Sub Title', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('per month', 'ageland'),
            ]
        );
        $repeater1->add_control(
            'rmfeatures',
            [
                'label' => __('Features', 'ageland'),
                'type' => AgelandElement_Elementor_Addons::LIST_CONTROL,
            ]
        );
        $repeater1->add_control(
            'rmbutton',
            [
                'label' => __('Button', 'ageland'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Purchase', 'ageland'),
            ]
        );
        $repeater1->add_control(
            'rmlink', [
                'label' => __('Link', 'ageland'),
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
            'plan_list',
            [
                'label' => __( 'Monthly list', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'plan_title' => __( 'Personal', 'ageland' ),
                    ],
                    [
                        'plan_title' => __( 'Professional', 'ageland' ),
                    ],
                    [
                        'plan_title' => __( 'Essential', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ plan_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'ypma',
            [
                'label' => __('Yearly', 'ageland'),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'layout'=>['layout2', 'layout1'],
                ],
            ]
        );
        $this->add_control(
            'ylabel',
            [
                'label' => __('Label', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Yearly', 'ageland'),
            ]
        );
        $this->add_control(
            'ytitle',
            [
                'label' => __('Title', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Startup', 'ageland'),
            ]
        );
        $this->add_control(
            'yprice',
            [
                'label' => __('Price', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('$90.99', 'ageland'),
            ]
        );
        $this->add_control(
            'ysub',
            [
                'label' => __('Sub Title', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('per month', 'ageland'),
            ]
        );
        $this->add_control(
            'yfeatures',
            [
                'label' => __('Features', 'ageland'),
                'type' => AgelandElement_Elementor_Addons::LIST_CONTROL,
            ]
        );
        $this->add_control(
            'ybutton',
            [
                'label' => __('Button', 'ageland'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Purchase', 'ageland'),
            ]
        );
        $this->add_control(
            'ylink', [
                'label' => __('Link', 'ageland'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'rytitle',
            [
                'label' => __('Title', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Standard', 'ageland'),
            ]
        );
        $repeater2->add_control(
            'ryprice',
            [
                'label' => __('Price', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('$90.99', 'ageland'),
            ]
        );
        $repeater2->add_control(
            'rysub',
            [
                'label' => __('Sub Title', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('per month', 'ageland'),
            ]
        );
        $repeater2->add_control(
            'ryfeatures',
            [
                'label' => __('Features', 'ageland'),
                'type' => AgelandElement_Elementor_Addons::LIST_CONTROL,
            ]
        );
        $repeater2->add_control(
            'rybutton',
            [
                'label' => __('Button', 'ageland'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Purchase', 'ageland'),
            ]
        );
        $repeater2->add_control(
            'rylink', [
                'label' => __('Link', 'ageland'),
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
            'ylist',
            [
                'label' => __( 'Yearly list', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater2->get_controls(),
                'default' => [
                    [
                        'rytitle' => __( 'Professional', 'ageland' ),
                    ],
                    [
                        'rytitle' => __( 'Professional', 'ageland' ),
                    ],
                    [
                        'rytitle' => __( 'Professional', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ rytitle }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Style', 'ageland'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $repeater3 = new Repeater();
        $repeater3->add_control(
            'shapel', [
                'label' => __('Shape', 'ageland'),
                'type' => Controls_Manager::MEDIA,
                'show_external' => true,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shapelist',
            [
                'label' => __( 'Shape list', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater3->get_controls(),
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'shape',
                'label' => __('Shape', 'ageland'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .section-bg:after',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'ageland'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .price-box .price-head .price-ribbon-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .price-box .price-head .price-ribbon-title',
            ]
        );
        $this->add_control(
            'pricing_color',
            [
                'label' => __('Pricing Color', 'ageland'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .price-box .price-head .price-value h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'pr_fonts',
                'label' => __('Pricing Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .price-box .price-head .price-value h4',
            ]
        );
        $this->add_control(
            'unit_color',
            [
                'label' => __('Unit Color', 'ageland'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .price-box .price-head .price-value h4 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'pruu_fonts',
                'label' => __('Unit Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .price-box .price-head .price-value h4 span',
            ]
        );
        $this->add_control(
            'fe_color',
            [
                'label' => __('Feature Color', 'ageland'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .price-box .price-info ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'fea_fonts',
                'label' => __('Feature Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .price-box .price-info ul li',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Button Color', 'ageland'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .price-box .price-bottom .btn-6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color',
            [
                'label' => __('Button BG Color', 'ageland'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .price-box .price-bottom .btn-6' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Button Hover Color', 'ageland'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .price-box .price-bottom .btn-6:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'border_stick',
                'label' => __('Border Sticker', 'ageland'),
                'selector' => '{{WRAPPER}} .packege_pricing_area_2 .select_month_wrapper .split',
            ]
        );
        $this->add_responsive_control(
            'bra',
            [
                'label' => __('Border Radius Sticker', 'ageland'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .packege_pricing_area_2 .select_month_wrapper .split' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'borderss_stick',
                'label' => __('Shadow', 'ageland'),
                'selector' => '{{WRAPPER}} .packege_pricing_area_2 .single_pakege_2',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_bgghhsta',
                'label' => __( 'Box Background', 'ageland' ),
                'types' => [  'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .select_month_wrapper .split',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_bgghhst',
                'label' => __( 'Box Background', 'ageland' ),
                'types' => [  'gradient' ],
                'selector' => '{{WRAPPER}} .packege_pricing_area_2 .single_pakege_2 .sticker',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_bgghh',
                'label' => __( 'Box Background', 'ageland' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .packege_pricing_area_2 .single_pakege_2',
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

}

Plugin::instance()->widgets_manager->register(new ageland_pricing_table());
?>