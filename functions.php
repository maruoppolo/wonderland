<?php
/**
 * Wonder Land Functions and Definitions
 * @package Wonder_Land
 */

require_once get_template_directory() . '/inc/class-wonderland-minify.php';

function wonderland_setup() {
    load_theme_textdomain( 'wonderland', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wonderland_setup' );

function wonderland_scripts() {
    wp_enqueue_style( 'wonderland-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );
    wp_enqueue_script( 'wonderland-form-handler', get_template_directory_uri() . '/assets/js/form-handler.js', array(), '1.0.0', true );

    wp_localize_script( 'wonderland-form-handler', 'wonderland_ajax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'wonderland_nonce' )
    ) );
}
add_action( 'wp_enqueue_scripts', 'wonderland_scripts' );

function wonderland_cleanup_head() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'init', 'wonderland_cleanup_head' );

/**
 * Custom Post Type: Leads
 */
function wk_register_leads_cpt() {
    $labels = array(
        'name' => 'Leads',
        'singular_name' => 'Lead',
        'menu_name' => 'Leads',
        'all_items' => 'All Leads',
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        'capabilities' => array(
            'create_posts' => 'do_not_allow',
        ),
        'hierarchical' => false,
        'supports' => array('title'),
        'menu_icon' => 'dashicons-email-alt',
    );
    register_post_type('leads', $args);
}
add_action('init', 'wk_register_leads_cpt');

/**
 * Admin Columns for Leads
 */
function wk_set_leads_columns($columns) {
    $new_columns = array(
        'cb' => $columns['cb'],
        'title' => 'Name',
        'lead_email' => 'Email',
        'lead_phone' => 'Phone',
        'date' => $columns['date'],
    );
    return $new_columns;
}
add_filter('manage_leads_posts_columns', 'wk_set_leads_columns');

function wk_display_leads_columns($column, $post_id) {
    switch ($column) {
        case 'lead_email':
            echo get_post_meta($post_id, '_lead_email', true);
            break;
        case 'lead_phone':
            echo get_post_meta($post_id, '_lead_phone', true);
            break;
    }
}
add_action('manage_leads_posts_custom_column', 'wk_display_leads_columns', 10, 2);

/**
 * AJAX Handler: Save Lead
 */
function wk_save_lead_ajax() {
    check_ajax_referer('wonderland_nonce', 'nonce');

    $email = sanitize_email($_POST['user_email']);
    $name  = sanitize_text_field($_POST['user_name']);
    $phone = sanitize_text_field($_POST['user_phone']);

    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Invalid email'));
    }

    $post_id = wp_insert_post(array(
        'post_title'  => !empty($name) ? $name : $email,
        'post_type'   => 'leads',
        'post_status' => 'publish'
    ));

    if ($post_id) {
        update_post_meta($post_id, '_lead_email', $email);
        update_post_meta($post_id, '_lead_name', $name);
        update_post_meta($post_id, '_lead_phone', $phone);
        
        wp_send_json_success();
    }

    wp_send_json_error();
}
add_action('wp_ajax_save_lead', 'wk_save_lead_ajax');
add_action('wp_ajax_nopriv_save_lead', 'wk_save_lead_ajax');

/**
 * Minification Toggle
 */
if ( !is_admin() ) {
    add_action('get_header', function() {
        ob_start(function($html) {
            return new Wonderland_Minify($html);
        });
    });
}