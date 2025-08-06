<?php

class SettingsModel {
    private $option_name = 'ssp_option';

    public function get_option() {
        return get_option($this->option_name, '');
    }

    public function save_option($value) {
        update_option($this->option_name, sanitize_text_field($value));
    }
}
