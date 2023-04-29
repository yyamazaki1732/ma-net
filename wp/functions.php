<?php 
    // タイトルの設定
    add_theme_support( 'title-tag' );

    // css&jsの読込設定
    add_filter( 'document_title_separator', 'change_title_separator' );
    function enqueue_name(){
        // スタイルシート
        wp_enqueue_style('original-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');

        // スクリプトファイル
        wp_enqueue_script('function', get_template_directory_uri() . '/js/js-common.js', array(), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts','enqueue_name');
    
    // 不要なcssの排除 
    function dequeue_plugins_style() {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'classic-theme-styles' );
    }
    add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 100 );

    // 不要なjsの排除 
    function no_jQuery() {
        if (!is_admin()) {
            wp_deregister_script('jquery');
        }
    }
    add_action('init', 'no_jQuery');

    // contact form css&js の読込設定 
    add_action( 'wp', function() {
        if ( is_page( 'contact' ) ) return;
        add_filter( 'wpcf7_load_js', '__return_false' );
        add_filter( 'wpcf7_load_css', '__return_false' );
    });

    // reCaptcha css&js の読込設定 
    add_action( 'wp_enqueue_scripts', function() {
        if(is_page('contact')) return;
        wp_deregister_script('google-recaptcha');
    }, 20);
?>