<?php

function clicklogin_customize_register($wp_customize){

    $wp_customize->add_panel( 'clicklogin_panel', array(
        'priority' => 25,
        'capability' => 'edit_theme_options',
        'title' => __('Click LoginPress', 'clicklogin'),
        'description' => __('This sections allows you to customize your login pgae', 'clicklogin')
    ));

    /* ----------------------
    |                       |
    |   Section for logo    |
    |                       |
    ------------------------*/

    $wp_customize->add_section( 'clicklogin_logo_section', array(
        'priority' => 5,
        'title' => __('Logo', 'clicklogin'),
        'panel' => 'clicklogin_panel',
    ));
    $wp_customize->add_setting( 'clicklogin_logo', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clicklogin_logo', array(
        'label' => __('Logo Image:', 'clicklogin'),
        'section' => 'clicklogin_logo_section',
        'priority' => 5,
        'settings' => 'clicklogin_logo',
    )));
    $wp_customize->add_setting( 'clicklogin_logo_width', array(
        'default' => '84px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'clicklogin_logo_width', array(
        'label' => __('Logo Width:', 'clicklogin'),
        'section' => 'clicklogin_logo_section',
        'priority' => 10,
        'settings' => 'clicklogin_logo_width',
    ));
    $wp_customize->add_setting( 'clicklogin_logo_height', array(
        'default' => '84px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'clicklogin_logo_height', array(
        'label' => __('Logo Height:', 'clicklogin'),
        'section' => 'clicklogin_logo_section',
        'priority' => 15,
        'settings' => 'clicklogin_logo_height',
    ));
    $wp_customize->add_setting(  'clicklogin_logo_padding', array(
        'default' => '5px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'clicklogin_log_padding', array(
        'label' => __('Logo Padding:', 'clicklogin'),
        'section' => 'clicklogin_logo_section',
        'priority' => 20,
        'settings' => 'clicklogin_logo_padding',
    ));


    /* ----------------------
    |                       |
    |   Section for bg      |
    |                       |
    ------------------------*/

    $wp_customize->add_section( 'clicklogin_bg_section', array(
        'priority' => 10,
        'title' => __('Background', 'clicklogin'),
        'panel' => 'clicklogin_panel',
    ));
    $wp_customize->add_setting( 'clicklogin_bg', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clicklogin_bg', array(
        'label' => __('Background Image:', 'clicklogin'),
        'section' => 'clicklogin_bg_section',
        'priority' => 5,
        'settings' => 'clicklogin_bg',
    )));
    $wp_customize->add_setting( 'clicklogin_bg_color', array(
        'default' => '#F1F1F1',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'clicklogin_bg_color', array(
        'label' => __('Background Color:', 'clicklogin'),
        'section' => 'clicklogin_bg_section',
        'priority' => 10,
        'settings' => 'clicklogin_bg_color',
    )));
    // $wp_customize->add_setting( 'clicklogin_bg_size', array(
    //     'type' => 'option',
    //     'capability' => 'edit_theme_options'
    // ));
    // $wp_customize->add_control( 'clicklogin_bg_size', array(
    //     'label' => __('Background Size:', 'clicklogin'),
    //     'section' => 'clicklogin_bg_section',
    //     'priority' => 15,
    //     'settings' => 'clicklogin_bg_size',
    // ));

    /* ----------------------
    |                       |
    |  Section for Form     |
    |                       |
    ------------------------*/
    $wp_customize->add_section( 'clicklogin_form_bg_section', array(
        'priority' => 15,
        'title' => __('Login Form', 'clicklogin'),
        'panel' => 'clicklogin_panel',
    ));
    $wp_customize->add_setting( 'clicklogin_form_bg', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clicklogin_form_bg', array(
        'label' => __('Background Image:', 'clicklogin'),
        'section' => 'clicklogin_form_bg_section',
        'priority' => 5,
        'settings' => 'clicklogin_form_bg',
    )));
    $wp_customize->add_setting( 'clicklogin_form_bg_color', array(
        'default' => '#FFF',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'clicklogin_form_bg_color', array(
        'label' => __('Background Color:', 'clicklogin'),
        'section' => 'clicklogin_form_bg_section',
        'priority' => 10,
        'settings' => 'clicklogin_form_bg_color',
    )));
    $wp_customize->add_setting( 'clicklogin_form_style_width', array(
        'default' => '350px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'clicklogin_form_style_width', array(
        'label' => __('Form Width:', 'clicklogin'),
        'section' => 'clicklogin_form_bg_section',
        'priority' => 15,
        'settings' => 'clicklogin_form_style_width',
    ));
    $wp_customize->add_setting( 'clicklogin_form_style_height', array(
        'default' => '350px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'clicklogin_form_style_height', array(
        'label' => __('Form Height:', 'clicklogin'),
        'section' => 'clicklogin_form_bg_section',
        'priority' => 20,
        'settings' => 'clicklogin_form_style_height',
    ));
    $wp_customize->add_setting(  'clicklogin_form_style_padding', array(
        'default' => '26px 24px 46px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'clicklogin_form_style_padding', array(
        'label' => __('Form Padding:', 'clicklogin'),
        'section' => 'clicklogin_form_bg_section',
        'priority' => 25,
        'settings' => 'clicklogin_form_style_padding',
    ));
    $wp_customize->add_setting( 'clicklogin_form_style_border', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
        ));
    $wp_customize->add_control( 'clicklogin_form_style_border', array(
        'label' => __('Border (Example: 2px Dotted Black):', 'clicklogin'),
        'section' => 'clicklogin_form_bg_section',
        'priority' => 30,
        'settings' => 'clicklogin_form_style_border',
    ));

    /* ---------------------------
    |                            |
    |  Section for field styling |
    |                            |
    -----------------------------*/

    $wp_customize->add_section( 'clicklogin_field_style', array(
        'priority' => 25,
        'title' => __('Fields', 'clicklogin'),
        'panel' => 'clicklogin_panel',
    ));
    $wp_customize->add_setting( 'clicklogin_field_style_width', array(
        'default' => '100%',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'clicklogin_field_style_width', array(
        'label' => __('Input Field Width:', 'clicklogin'),
        'section' => 'clicklogin_field_style',
        'priority' => 5,
        'settings' => 'clicklogin_field_style_width',
    ));
    $wp_customize->add_setting( 'clicklogin_field_style_margin', array(
        'default' => '2px 6px 16px 0px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'clicklogin_field_style_margin', array(
        'label' => __('Input Field Margin:', 'clicklogin'),
        'section' => 'clicklogin_field_style',
        'priority' => 10,
        'settings' => 'clicklogin_field_style_margin',
    ));
    $wp_customize->add_setting( 'clicklogin_field_style_ifbg', array(
        'default' => '#FFF',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'clicklogin_field_style_ifbg', array(
        'label' => __('Input Field Background:', 'clicklogin'),
        'section' => 'clicklogin_field_style',
        'priority' => 15,
        'settings' => 'clicklogin_field_style_ifbg',
    )));
    $wp_customize->add_setting( 'clicklogin_field_style_ifc', array(
        'default' => '#333',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'clicklogin_field_style_ifc', array(
        'label' => __('Input Field Color:', 'clicklogin'),
        'section' => 'clicklogin_field_style',
        'priority' => 20,
        'settings' => 'clicklogin_field_style_ifc',
    )));
    $wp_customize->add_setting( 'clicklogin_field_style_lc', array(
        'default' => '#777',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'clicklogin_field_style_lc', array(
        'label' => __('Label Color:', 'clicklogin'),
        'section' => 'clicklogin_field_style',
        'priority' => 25,
        'settings' => 'clicklogin_field_style_lc',
    )));

    /* ---------------------------
    |                            |
    | Section for button styling |
    |                            |
    -----------------------------*/

    $wp_customize->add_section( 'clicklogin_button_section', array(
        'priority' => 30,
        'title' => __('Button', 'clicklogin'),
        'panel' => 'clicklogin_panel',
    ));

     $wp_customize->add_setting('clicklogin_button_bg', array(
        'default' => '#2EA2CC',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clicklogin_button_bg', array(
        'label' => __('Button Background:', 'clicklogin'),
        'section' => 'clicklogin_button_section',
        'priority' => 5,
        'settings' => 'clicklogin_button_bg'
    )));

    $wp_customize->add_setting('clicklogin_button_border', array(
        'default' => '#0074A2',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clicklogin_button_border', array(
        'label' => __('Button Border:', 'clicklogin'),
        'section' => 'clicklogin_button_section',
        'priority' => 10,
        'settings' => 'clicklogin_button_border'
    )));

    $wp_customize->add_setting('clicklogin_button_hover_bg', array(
        'default' => '#1E8CBE',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clicklogin_button_hover_bg', array(
        'label' => __('Button Background (Hover):', 'clicklogin'),
        'section' => 'clicklogin_button_section',
        'priority' => 15,
        'settings' => 'clicklogin_button_hover_bg'
    )));

    $wp_customize->add_setting('clicklogin_button_hover_border', array(
        'default' => '#0074A2',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clicklogin_button_hover_border', array(
        'label' => __('Button Border (Hover):', 'clicklogin'),
        'section' => 'clicklogin_button_section',
        'priority' => 20,
        'settings' => 'clicklogin_button_hover_border'
    )));

    $wp_customize->add_setting('clicklogin_button_shadow', array(
        'default' => '#78C8E6',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clicklogin_button_shadow', array(
        'label' => __('Button Box Shadow:', 'clicklogin'),
        'section' => 'clicklogin_button_section',
        'priority' => 25,
        'settings' => 'clicklogin_button_shadow'
    )));

    $wp_customize->add_setting('clicklogin_button_color', array(
        'default' => '#FFF',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'clicklogin_button_color', array(
        'label' => __('Button Color:', 'clicklogin'),
        'section' => 'clicklogin_button_section',
        'priority' => 30,
        'settings' => 'clicklogin_button_color'
    )));



    /* -------------------------------
    |                                |
    |  Section for FieldText styling |
    |                                |
    ---------------------------------*/

    $wp_customize->add_section( 'clicklogin_fieldText_section', array(
        'priority' => 35,
        'title' => __('Field Text Style', 'clicklogin'),
        'panel' => 'clicklogin_panel',
    ));
    $wp_customize->add_setting( 'clicklogin_other_textColor', array(
        'default' => '#999',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'clicklogin_other_textColor', array(
        'label' => __('Text Color:', 'clicklogin'),
        'section' => 'clicklogin_fieldText_section',
        'priority' => 5,
        'settings' => 'clicklogin_other_textColor',
    )));
    $wp_customize->add_setting( 'clicklogin_other_textColorH', array(
        'default' => '#2EA2CC',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'clicklogin_other_textColorH', array(
        'label' => __('Text Color Hover:', 'clicklogin'),
        'section' => 'clicklogin_fieldText_section',
        'priority' => 10,
        'settings' => 'clicklogin_other_textColorH',
    )));

    /* ---------------------------
    |                            |
    | Section for other css      |
    |                            |
    -----------------------------*/

    $wp_customize->add_section( 'clicklogin_customCSS_section', array(
        'priority' => 35,
        'title' => __('Custom CSS', 'clicklogin'),
        'panel' => 'clicklogin_panel',
    ));
    $wp_customize->add_setting( 'clicklogin_custom_css', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'clicklogin_custom_css', array(
        'label' => __('Custom CSS:', 'clicklogin'),
        'type' => 'textarea',
        'section' => 'clicklogin_customCSS_section',
        'priority' => 15,
        'settings' => 'clicklogin_custom_css',
    ));
}
add_action( 'customize_register', 'clicklogin_customize_register' );

function clicklogin_customizer(){

    $clickitlp_logo_path = get_option('clicklogin_logo');
    $clickitlp_logo_width = get_option('clicklogin_logo_width');
    $clickitlp_logo_height = get_option('clicklogin_logo_height');
    $clickitlp_logo_padding = get_option('clicklogin_logo_padding');
    $clickitlp_bg = get_option('clicklogin_bg');
    $clickitlp_bg_color =  get_option('clicklogin_bg_color');
    $clickitlp_bg_size = get_option('clicklogin_bg_size');
    $clickitlp_form_bg_img = get_option('clicklogin_form_bg');
    $clickitlp_form_bg_color = get_option('clicklogin_form_bg_color');
    $clickitlp_form_style_width =  get_option('clicklogin_form_style_width');
    $clickitlp_form_style_height = get_option('clicklogin_form_style_height');
    $clickitlp_form_style_padding = get_option('clicklogin_form_style_padding');
    $clickitlp_form_style_border = get_option('clicklogin_form_style_border');
    $clickitlp_field_style_width = get_option('clicklogin_field_style_width');
    $clickitlp_field_style_margin = get_option('clicklogin_field_style_margin');
    $clickitlp_field_style_ifbg = get_option('clicklogin_field_style_ifbg');
    $clickitlp_field_style_ifc = get_option('clicklogin_field_style_ifc');
    $clickitlp_field_style_lc = get_option('clicklogin_field_style_lc');
    $clickitlp_button_bg = get_option('clicklogin_button_bg');
    $clickitlp_button_border = get_option('clicklogin_button_border');
    $clickitlp_button_shadow = get_option('clicklogin_button_shadow');
    $clickitlp_button_color = get_option('clicklogin_button_color');
    $clickitlp_button_hover_bg = get_option('clicklogin_button_hover_bg');
    $clickitlp_button_hover_border = get_option('clicklogin_button_hover_border');
    $clickitlp_other_textColor = get_option('clicklogin_other_textColor');
    $clickitlp_other_textColorH = get_option('clicklogin_other_textColorH');
    $clickitlp_other_css = get_option('clicklogin_other_css');

    ?>
    <style type = "text/css">
        html, body{
            <?php if ( !empty($clickitlp_bg)) : ?>
                background-image: url(<?php echo $clickitlp_bg; ?>) !important;
            <?php endif; ?>

            <?php if ( !empty($clickitlp_bg_color)) : ?>
                background-color: <?php echo $clickitlp_bg_color; ?> !important;
            <?php endif; ?>

            <?php if( !empty($bg_url)) : ?>
                background-size: <?php echo $clickitlp_bg_size; ?> !important;
            <?php endif; ?>
        }


        body.login div#login h1 a {
            <?php if( !empty($clickitlp_logo_path)) : ?>
                background-image: url(<?php echo $clickitlp_logo_path; ?>) !important;
            <?php endif; ?>

            <?php if (!empty($clickitlp_logo_width)) :?>
                width: <?php echo $clickitlp_logo_width; ?> !important;
            <?php endif; ?>

            <?php if (!empty($clickitlp_logo_height)) :?>
                height: <?php echo $clickitlp_logo_height; ?> !important;
            <?php endif; ?>

            <?php if( !empty($clickitlp_logo_width) || !empty($clickitlp_logo_height)) : ?>
                background-size: <?php echo $clickitlp_logo_width; ?> <?php echo $clickitlp_logo_height; ?> !important;
            <?php endif; ?>

            <?php if( !empty($clickitlp_logo_padding)) : ?>
                padding-bottom: <?php echo $clickitlp_logo_padding; ?> !important;
            <?php endif; ?>
        }


        #loginform {
            <?php if ( !empty($clickitlp_form_bg_img) ): ?>
                background-image: url(<?php echo $clickitlp_form_bg_img; ?> ) !important;
            <?php endif; ?>

            <?php if ( !empty($clickitlp_form_bg_color) ): ?>
                background-color: <?php echo $clickitlp_form_bg_color; ?> !important;
            <?php endif; ?>

            <?php if ( !empty($clickitlp_form_style_height) ): ?>
                height: <?php echo $clickitlp_form_style_height; ?> !important;
            <?php endif; ?>

            <?php if ( !empty($clickitlp_form_style_padding) ): ?>
                padding: <?php echo $clickitlp_form_style_padding; ?> !important;
            <?php endif; ?>

            <?php if ( !empty($clickitlp_form_style_border) ): ?>
                border: <?php echo $clickitlp_form_style_border; ?> !important;
            <?php endif; ?>

        }

        #login {
            <?php if ( !empty($clickitlp_form_style_width) ): ?>
                width: <?php echo $clickitlp_form_style_width; ?> !important;
            <?php endif; ?>
            }

            .login form .input, .login input[type="text"] {
            <?php if ( !empty($clickitlp_field_style_width) ): ?>
                width: <?php echo $clickitlp_field_style_width; ?> !important;
            <?php endif; ?>

            <?php if ( !empty($clickitlp_field_style_margin) ): ?>
                margin: <?php echo $clickitlp_field_style_margin; ?> !important;
            <?php endif; ?>

            <?php if ( !empty($clickitlp_field_style_ifbg) ): ?>
                background: <?php echo $clickitlp_field_style_ifbg; ?> !important;
            <?php endif; ?>

            <?php if ( !empty($clickitlp_field_style_ifc) ): ?>
                color: <?php echo $clickitlp_field_style_ifc; ?> !important;
            <?php endif; ?>

        }

        .login label {
            <?php if ( !empty($clickitlp_field_style_lc) ): ?>
                color: <?php echo $clickitlp_field_style_lc; ?> !important;
            <?php endif; ?>

        }



        .wp-core-ui .button-primary {
            <?php if( !empty($clickitlp_button_bg)) : ?>
                background: <?php echo $clickitlp_button_bg; ?> !important;
            <?php endif; ?>
            <?php if( !empty($clickitlp_button_border)) : ?>
                border-color: <?php echo $clickitlp_button_border; ?> !important;
            <?php endif; ?>
            <?php if( !empty($clickitlp_button_shadow)) : ?>
                box-shadow: 0px 1px 0px <?php echo $clickitlp_button_shadow; ?> inset, 0px 1px 0px rgba(0, 0, 0, 0.15);
            <?php endif; ?>
            <?php if( !empty($clickitlp_button_color)) : ?>
                color: <?php echo $clickitlp_button_color; ?> !important;
            <?php endif; ?>
        }

        .wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
            <?php if( !empty($clickitlp_button_hover_bg)) : ?>
                background: <?php echo $clickitlp_button_hover_bg; ?> !important;
            <?php endif; ?>
            <?php if( !empty($clickitlp_button_hover_border)) : ?>
                border-color: <?php echo $clickitlp_button_hover_border; ?> !important;
            <?php endif; ?>
        }








        .login #backtoblog a, .login #nav a {
            <?php if ( !empty($clickitlp_other_textColor) ): ?>
                color: <?php echo $clickitlp_other_textColor; ?> !important;
            <?php endif; ?>

        }

        .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
        <?php if ( !empty($clickitlp_other_textColorH) ): ?>
            color: <?php echo $clickitlp_other_textColorH; ?> !important;
        <?php endif; ?>

        }



        <?php if ( !empty($clickitlp_other_css) ): ?>
            <?php echo $clickitlp_other_css; ?>
        <?php endif; ?>

    </style>
    <?php


}
add_action( 'login_enqueue_scripts', 'clicklogin_customizer' );

function clicklogin_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'clicklogin_login_logo_url' );

function clicklogin_login_logo_url_title() {
    $title = get_bloginfo( 'name', 'display' );
    return $title;
}
add_filter( 'login_headertitle', 'clicklogin_login_logo_url_title' );
?>