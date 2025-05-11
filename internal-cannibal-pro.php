<?php
/**
 * Plugin Name: Internal Cannibal Pro
 * Plugin URI: https://github.com/m2mahdavi/internal-cannibal-pro
 * Description: A professional SEO plugin to detect and fix keyword cannibalization issues within your WordPress website.
 * Version: 1.0.0
 * Author: Mohsen Mahdavi
 * Author URI: https://github.com/m2mahdavi
 * Text Domain: internal-cannibal-pro
 * Domain Path: /languages
 * License: GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Contributors: moma2work
 */

// Prevent direct access
defined('ABSPATH') or die('No script kiddies please!');

// Include core files
include_once plugin_dir_path(__FILE__) . 'admin/class-admin-ui.php';
include_once plugin_dir_path(__FILE__) . 'admin/class-settings.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-keyword-analyzer.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-cannibal-detector.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-content-merger.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-redirect-checker.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-openai-integration.php';

// Activation and Deactivation Hooks
register_activation_hook(__FILE__, 'icp_activate');
register_deactivation_hook(__FILE__, 'icp_deactivate');

// Plugin Activation
function icp_activate() {
    // Actions on activation
}

// Plugin Deactivation
function icp_deactivate() {
    // Actions on deactivation
}

// Initialize the plugin
function icp_init() {
    // Initialize any settings, options, or features
}

add_action('plugins_loaded', 'icp_init');
