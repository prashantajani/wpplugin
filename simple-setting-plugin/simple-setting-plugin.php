<?php
/*
Plugin Name: Simple Setting Plugin
Description: A basic plugin demonstrating MVC structure to save a setting in WordPress.
Version: 1.0.0
Author: Codex
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

require_once plugin_dir_path(__FILE__) . 'models/SettingsModel.php';
require_once plugin_dir_path(__FILE__) . 'controllers/SettingsController.php';

class Simple_Setting_Plugin {
    public function __construct() {
        $controller = new SettingsController();
        $controller->init_hooks();
    }
}

new Simple_Setting_Plugin();
