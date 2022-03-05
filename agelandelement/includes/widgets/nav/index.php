<?php
namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ageland_header_builder extends Widget_Base
{

    public function get_name()
    {
        return 'header-builder';
    }

    public function get_title()
    {
        return __('Header Builder', 'ageland');
    }

    public function get_icon()
    {
        return 'eicon-nav-menu';
    }

    public function get_categories()
    {
        return array('ageland-builder');
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Main Nav', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'main_nav',
            [
                'label' => __('Main Menu', 'ageland'),
                'type' => Controls_Manager::SELECT2,
                'options' => king_menu_select_choices(),
                'multiple' => false,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'main_m_nav',
            [
                'label' => __('Mobile Menu', 'ageland'),
                'type' => Controls_Manager::SELECT2,
                'options' => king_menu_select_choices(),
                'multiple' => false,
                'label_block' => true,
            ]
        );
        $this->add_responsive_control(
            'menu_align',
            [
                'label' => __('Menu Alignment', 'ageland'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', 'ageland'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'ageland'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', 'ageland'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ageland-builder-nav' => 'justify-content: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'menu_style',
            [
                'label' => __('Main Menu', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'nav_color',
            [
                'label' => __('Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-v5 .main-menu ul li a, 
                    {{WRAPPER}} .header-v5 .main-menu ul li.menu-item-has-children:after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'nav_fonts',
                'label' => __('Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .header-v5 .main-menu ul li a',
            ]
        );
        $this->add_responsive_control(
            'sdpda',
            [
                'label' => esc_html__('Item Padding', 'thepack'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .header-v5 .main-menu ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sdpd',
            [
                'label' => esc_html__('Item Margin', 'thepack'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .header-v5 .main-menu ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'sub_menu_style',
            [
                'label' => __('Sub Menu', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sub_color',
            [
                'label' => __('Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-v5 .main-menu ul li.menu-item-has-children .sub-menu li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'hsub_color',
            [
                'label' => __('Hover Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-v5 .main-menu ul li.menu-item-has-children .sub-menu li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_fonts',
                'label' => __('Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .header-v5 .main-menu ul li.menu-item-has-children .sub-menu li a',
            ]
        );
        $this->add_control(
            'droph',
            [
                'label' => __('DropDown Hover BG', 'ageland'),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dropbgh',
                'label' => __('Main BG', 'ageland'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .header-v5 .main-menu ul li.menu-item-has-children .sub-menu li a:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __('Menu Border', 'ageland'),
                'selector' => '{{WRAPPER}} .header-v5 .main-menu ul li.menu-item-has-children .sub-menu li',
            ]
        );
        $this->add_responsive_control(
            'dropwi',
            [
                'label' => __('DropDown Width', 'ageland'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 100,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .header-v5 .main-menu ul li.menu-item-has-children .sub-menu' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'drop',
            [
                'label' => __('DropDown BG', 'ageland'),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dropbg',
                'label' => __('Main BG', 'ageland'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .header-v5 .main-menu ul li.menu-item-has-children .sub-menu',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'droborder',
                'label' => __('Main Border', 'ageland'),
                'selector' => '{{WRAPPER}} .header-v5 .main-menu ul li.menu-item-has-children .sub-menu',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'mobile_style',
            [
                'label' => __('Mobile Menu', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'm_color',
            [
                'label' => __('Main Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile-menu ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'm_fonts',
                'label' => __('Main Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .mobile-menu ul li a',
            ]
        );
        $this->add_control(
            's_color',
            [
                'label' => __('Sub Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile-menu ul li ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 's_fonts',
                'label' => __('Sub Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .mobile-menu ul li ul li a',
            ]
        );
        $this->add_control(
            'tgcolor',
            [
                'label' => __('Toggle Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile-menu-area .menu-bar span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tgbg',
            [
                'label' => __('Mobile Menu BG', 'ageland'),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbg',
                'label' => __('Main BG', 'ageland'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .mobile-menu.open-menu',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings();

        $main_menu = $settings['main_nav'];
        $mobile_menu = $settings['main_m_nav'];

        ?>
        <section class="ageland-builder-nav">
            <!-- header part -->
            <header class="header_part classic_header dark_color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-xl justify-content-between align-items-center">
                                <div class="pu_logo_area">
                                    <?php ageland_logo(); ?>
                                    <?php ageland_logo('navbar-brand sticky_logo'); ?>
                                </div>
                                <div class="main_nav_wrapper d-flex justify-content-end">
                                    <div class="main_nav collapse navbar-collapse justify-content-end"
                                         id="navbarNavDropdown">
                                        <?php
                                        echo str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'],
                                            wp_nav_menu( array(
                                                    'container' => false,
                                                    'echo' => false,
                                                    'menu' => $main_menu,
                                                    'menu_id' => 'main-menu',
                                                    'fallback_cb'=> 'ageland_no_main_nav',
                                                    'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
                                                )
                                            ));
                                        ?>
                                    </div>
                                    <div class="header_right_btn">
                                        <a href="https://wppro.unikforce.com/ageland/contact/" class="ag_btn btn_1 d-none d-sm-block">Hire Us</a>
                                        <div class="pu_collaps_menu_icon offcanvus_menu_trigger navbar-toggler collapsed mr-0">
                                            <div class="burger_icon">
                                                <span class="burger_icon_top"></span>
                                                <span class="burger_icon_bottom"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header part end -->
            <div class="off_canvus_menu">
                <div class="off_canvus_menu_iner">
                    <div class="off_canvus_menu_iner_logo">
                        <?php ageland_logo('off_canvus_logo'); ?>
                        <div class="popup-close-button close_icon">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <div class="off_canvus_menu_iner_content">
                        <nav class="navbar">
                            <?php
                            echo str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'],
                                wp_nav_menu( array(
                                        'container' => false,
                                        'echo' => false,
                                        'menu' => $mobile_menu,
                                        'menu_id' => 'm-main-menu',
                                        'fallback_cb'=> 'ageland_no_main_nav',
                                        'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
                                    )
                                ));
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="offcanvas_overlay"></div>
        </section>
    <?php }

}

Plugin::instance()->widgets_manager->register(new ageland_header_builder());