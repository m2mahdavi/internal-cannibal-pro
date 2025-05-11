<?php
class Admin_UI {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    public function add_admin_menu() {
        add_menu_page(
            esc_html__('Internal Cannibal Pro', 'internal-cannibal-pro'),
            esc_html__('Internal Cannibal Pro', 'internal-cannibal-pro'),
            'manage_options',
            'internal-cannibal-pro',
            array($this, 'admin_page'),
            'dashicons-search',
            20
        );
    }

    public function admin_page() {
        ?>
        <div class="wrap">
            <h1><?php esc_html_e('Internal Cannibal Pro Dashboard', 'internal-cannibal-pro'); ?></h1>
            <p><?php esc_html_e('Manage and analyze your site for keyword cannibalization issues.', 'internal-cannibal-pro'); ?></p>
        </div>
        <?php
    }

    public function enqueue_scripts() {
        wp_enqueue_style('admin-style', plugin_dir_url(__FILE__) . 'css/admin.css', [], '1.0.0');
        wp_enqueue_script('admin-script', plugin_dir_url(__FILE__) . 'js/admin.js', ['jquery'], '1.0.0', true);
    }
}
new Admin_UI();
