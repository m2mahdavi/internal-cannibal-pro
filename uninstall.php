<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

// Actions on plugin uninstall
function icp_uninstall() {
    delete_option('icp_api_key');
}

register_uninstall_hook(__FILE__, 'icp_uninstall');
