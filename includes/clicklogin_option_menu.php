<?php


function clicklogin_option_menu(){
    ?>
    <h2><?php _e('Click LoginPress', 'clicklogin'); ?></h2>
    <p><?php _e('Click LoginPress is a plugin which makes you beautify your login page using Wordpress Customizer. In customizer, you can preview your changes before you save them.', 'clicklogin'); ?></p>
    <p><?php _e('In Customizer, navigate to Click LoginPress', 'clicklogin'); ?>.</p>
    <a href="<?php echo get_admin_url(); ?>customize.php?url=<?php echo wp_login_url(); ?>" id="submit" class="button button-primary"><?php _e('Get Started!', 'clicklogin'); ?></a>

    <?php
    
}

function clicklogion_register_option_menu(){
    add_theme_page('Customize Login Page', 'Customize Login Page', 'manage_options', 'clicklogin_options', 'clicklogin_option_menu');
}

add_action( 'admin_menu', 'clicklogion_register_option_menu' );

function clicklogin_admin_style() {
  wp_enqueue_style( 'admin_style', CLICKLOGIN_PATH . '/css/clicklogin-option-menu.css',array(), CLICKLOGIN_VERSION, false );
}
add_action( 'admin_enqueue_scripts', 'clicklogin_admin_style' );
?>