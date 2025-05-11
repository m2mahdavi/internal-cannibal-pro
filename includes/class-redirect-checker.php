<?php
class ICP_Redirect_Checker {
    public function __construct() {
        // Initialization of redirect checking process
    }

    public function check_redirects($post_id) {
        // Check if a post/page has an existing redirect
        $redirect_url = get_post_meta($post_id, '_redirect_url', true);
        if ($redirect_url) {
            return $redirect_url;
        }
        return false;
    }
}
