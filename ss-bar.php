<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!!' );
/**
 * Plugin Name:       SS Bar
 * Plugin URI:        https://santoshpanta.com/
 * Description:       A plugin for adding social links to your wordpress site with cool designs.
 * Version:           2.0.1
 * Requires at least: 5.2
 * Requires PHP:      5.4
 * Author:            Santosh Panta
 * Author URI:        https://santoshpanta.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ss-bar
 * Domain Path:       /languages
 */

if ( !class_exists( 'SS_bar_share' ) ) {

    class SS_bar_share {

        function __construct() {
            
            $this->define_constants();

            $this->register_settings();
            
            add_action( 'admin_menu', array( $this, 'ss_admin_menu' ) );

            add_action( 'wp_enqueue_scripts', array($this, 'register_front_end_assets') );
            
            add_action( 'wp_footer', array($this, 'design_pages'));

        }

        function define_constants() {

            defined( 'SSBR_PATH' ) or define( 'SSBR_PATH', plugin_dir_path( __FILE__ ) );
            defined( 'SSBR_URL' ) or define( 'SSBR_URL', plugin_dir_url( __FILE__ ) );
            defined( 'SSBR_VERSION' ) or define( 'SSBR_VERSION', '1.0.0' );
        }

        function register_front_end_assets(){

            wp_enqueue_style( 'style', SSBR_URL . '/assets/css/style.css', false ,'1.0');
            
            wp_enqueue_style( 'prefix-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        }

        function required_files(){

            include( SSBR_PATH . 'includes/admin/settings.php');
        }

        function ss_admin_menu(){

            add_menu_page( 'Social Side Bar', 'Social Side Bar', 'manage_options', 'ss-share', array( $this, 'ss_settings_page' ), 'dashicons-share' );
        }

        function ss_settings_page(){

            include( SSBR_PATH . 'includes/views/dashboard-template.php');
        }

        function design_pages(){
            if( is_page() || is_single() ){

                include( SSBR_PATH . 'includes/views/page-template.php');
            }
        }

        function register_settings(){

            include( SSBR_PATH . 'includes/class/class-setting.php');
        }

    }

    new SS_bar_share();
}
