<?php
/**
* Plugin Name: Email Plugin
* Author: Minh Triet
* Version: 1.0.0
*/
function loadMyBlock() {
  wp_enqueue_script(
    'my-new-block',
    plugin_dir_url(__FILE__) . 'my-email-block.js',
    array('wp-blocks','wp-editor'),
    true
  );
}

add_action('enqueue_block_editor_assets', 'loadMyBlock');