<?php
class ICP_OpenAI_Integration {
    public function __construct() {
        // Initialize OpenAI API integration
    }

    public function get_suggestion($content) {
        $api_key = get_option('icp_api_key');
        if (!$api_key) return null;

        // Call OpenAI API (example)
        $response = wp_remote_post('https://api.openai.com/v1/completions', array(
            'headers' => array(
                'Authorization' => 'Bearer ' . $api_key,
                'Content-Type'  => 'application/json',
            ),
            'body' => json_encode(array(
                'model' => 'text-davinci-003',
                'prompt' => 'Analyze the following content: ' . $content,
                'max_tokens' => 150,
            )),
        ));

        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        return $data['choices'][0]['text'] ?? null;
    }
}
