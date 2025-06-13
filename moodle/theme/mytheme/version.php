<?php

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'theme_mytheme';
$plugin->version = 2025061202;              // Текущая дата в формате ГГГГММДДЧЧ (2025-06-12 00:00)
$plugin->requires = 2022041900;   
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '1.0';   
$plugin->dependencies = ['theme_boost' => ANY_VERSION];
