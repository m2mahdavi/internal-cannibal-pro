<?php
class ICP_Settings {
    public function __construct() {
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function register_settings() {
        // افزودن sanitize_callback برای جلوگیری از خطای PluginCheck
        register_setting('icp_settings_group', 'icp_api_key', [
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        add_settings_section(
            'icp_section',
            esc_html__('Settings', 'internal-cannibal-pro'),
            null,
            'internal-cannibal-pro'
        );

        add_settings_field(
            'icp_api_key',
            esc_html__('OpenAI API Key', 'internal-cannibal-pro'),
            array($this, 'api_key_field'),
            'internal-cannibal-pro',
            'icp_section'
        );
    }

    public function api_key_field() {
        $value = get_option('icp_api_key');
        echo '<input type="text" id="icp_api_key" name="icp_api_key" value="' . esc_attr($value) . '" class="regular-text">';
    }
}

new ICP_Settings();
