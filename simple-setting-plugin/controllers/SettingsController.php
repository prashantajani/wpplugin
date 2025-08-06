<?php

require_once plugin_dir_path(__FILE__) . '../models/SettingsModel.php';

class SettingsController {
    private $model;

    public function __construct() {
        $this->model = new SettingsModel();
    }

    public function init_hooks() {
        add_action('admin_menu', [$this, 'add_menu']);
        add_action('admin_init', [$this, 'register_settings']);
    }

    public function add_menu() {
        add_options_page(
            'Simple Setting Plugin',
            'Simple Setting',
            'manage_options',
            'simple-setting-plugin',
            [$this, 'render_settings_page']
        );
    }

    public function register_settings() {
        register_setting('ssp_options_group', 'ssp_option');
    }

    public function render_settings_page() {
        $value = $this->model->get_option();
        include plugin_dir_path(__FILE__) . '../views/settings-form.php';
    }
}
