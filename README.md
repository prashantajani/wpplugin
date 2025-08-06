# Simple Setting Plugin

This repository contains a minimal WordPress plugin demonstrating a basic MVC structure using OOP.

## Installation
1. Copy the `simple-setting-plugin` folder into your WordPress `wp-content/plugins` directory.
2. Activate **Simple Setting Plugin** from the WordPress admin.
3. Navigate to **Settings → Simple Setting** to modify the example setting.

## Structure
```
simple-setting-plugin/
├── simple-setting-plugin.php  # Plugin bootstrap
├── controllers/
│   └── SettingsController.php
├── models/
│   └── SettingsModel.php
└── views/
    └── settings-form.php
```
