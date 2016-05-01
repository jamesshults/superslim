<?php

// sidebar

 if ( function_exists('register_sidebar') )
    register_sidebar(array('description' => 'Left Sidebar'));

// menus

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu('header_nav', __('Header Navigation Menu'));
	register_nav_menu('footer_nav', __('Footer Navigation Menu'));
}

// remove automatically added scripts ( be careful with these )

// remove_action( 'wp_head', 'rsd_link' );
// remove_action( 'wp_head', 'wlwmanifest_link' );

/*if ( !is_admin() ) {
    add_action( 'init', 'my_init' );

    function my_init() {
        wp_deregister_script( 'jquery' );
    }
}*/

/* Remove Contact Form 7 scripts + styles unless on the contact page */

/*add_action( 'wp_enqueue_scripts', 'ac_remove_cf7_scripts' );

function ac_remove_cf7_scripts() {
	if ( !is_page('contact') ) {
		wp_deregister_style( 'contact-form-7' );
		wp_deregister_script( 'contact-form-7' );
	}
}*/

// backend login screen

function my_login_logo() { ?>
	<style type="text/css">
    body {
      background: #ffffff;
      color: #212123;
    }
    body.login div#login h1 a {
      background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png');
      padding-bottom: 20px;
      width: 320px!important;
      height: 45px!important;
      background-size: 320px;
    }
    .login form {
			background: #f0ad00;
    }
    .login label {
    	color: #ffffff;
    }
    input#user_login, input#user_pass {
	  	font-weight: 100;
    }
    .wp-core-ui .button-primary {
	  	background: #7d0d00;
	    border: none;
    }
  	.wp-core-ui .button-primary:hover {
	  	background: #7d0d00;
    }
    .login #backtoblog a, .login #nav a, .login h1 a {
      color: #f0ad00;
    }
    .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
      color: #7d0d00;
    }
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/* backend login logo link */

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return get_bloginfo();
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// remove comment-reply.js script

function disable_comment_js(){
  wp_deregister_script( 'comment-reply' );
}
add_action('init','disable_comment_js');

// remove emoji scripts

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// post thumbnails

//add_theme_support( 'post-thumbnails' );
//the_post_thumbnail('thumbnail');
//the_post_thumbnail('medium');
//the_post_thumbnail('large');
//the_post_thumbnail('full');

?>
